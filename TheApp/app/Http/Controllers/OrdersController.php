<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Car;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function index()
    {
        return view('orders.index');
    }

    public function store(Request $request, Customer $customer, Car $car, Payment $payment)
    {
        $request->validate([
            'car_id' => 'required',
            'customer_id' => 'required',
            'pickup_date' => 'required|after:today',
            'return_date' => 'required|after:pickup_date',
            'pickup_location' => 'required',
            'return_location' => 'required',
        ]);

        $order = new Order();
        $order->car_id = $request->car_id;
        $order->customer_id = $request->customer_id;
        $order->order_date = $request->order_date;
        $order->delivery_date = $request->delivery_date;
        $order->status = 'Pending Payment';
        $order->save();

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    public function approve(Order $order)
    {
        if (auth('admin')->user()->hasRole('admin')) {
            $order->status = 'Approved';
            $order->save();
        }
        else {
            return (403);
        }
    }

    public function orderDetail(Order $order)
    {
        return view('orders.detail', compact('order'));
    }
}
