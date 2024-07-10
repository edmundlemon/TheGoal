<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    //
    public function index()
    {
        return view('payments.index');
    }

    public function show(Order $order)
    {
        // dd($order);
        // return view('upload-payment-receipt', [
        //     'order' => $order,
        // ]);
        return view('upload-payment-receipt', [
            'order' => $order
        ]);
    }

    public function store(Request $request, Order $order){
        if ($order->status != 'Pending Payment') {
            return redirect()->route('pending.orders')->with('error', 'Order is not pending payment.');
        }
        $request->validate([
            'payment_statement' => 'required|file|mimes:pdf|max:2048',
        ]);
        // dd($request->all());
        $payment = new Payment();
        $payment->order_id = $order->id;
        if ($request->hasFile('payment_statement')) {
            $statement = $request->file('payment_statement');
            $statementName = Str::random(10) . '.' . $statement->getClientOriginalExtension();
            $path = 'pdfs/statement/';
            $statement->move(public_path($path), $statementName);
            $payment->payment_statement = asset($path . $statementName);
        }
        // dd($request->hasFile('payment_statement'));
        // dd($payment);
        $order->status = 'Pending Approval';
        $payment->save();

        return redirect()->route('index')->with('success', 'Payment Receipt uploaded successfully.');
    }
}
