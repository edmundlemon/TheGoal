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

    public function store(Request $request, Order $order){
        $request->validate([
            'payment_statement' => 'file|mimes:pdf|max:2048',
        ]);
        $payment = new Payment();
        $payment->order_id = $order->id;
        if ($request->hasFile('payment_statement')) {
            $statement = $request->file('payment_statement');
            $statementName = Str::random(10) . '.' . $statement->getClientOriginalExtension();
            $path = 'pdfs/statement/';
            $statement->move(public_path($path), $statementName);
            $payment->statement = asset($path . $statementName);
        }
        $payment->save();

        return redirect()->route('orders.show', $order);
    }
}
