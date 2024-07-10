<?php

namespace App\Http\Controllers;

use auth;
use Carbon\Carbon;
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

    public function store(Request $request, Customer $customer)
    {
        $request->validate([
            'car_id' => 'required',
            // 'customer_id' => 'required',
            'pickup_date' => 'required|after:today',
            'return_date' => 'required|after:pickup_date',
            'pickup_location' => 'required',
            'return_location' => 'required',
        ]);

        $startDate = Carbon::parse($request->pickup_date);
        $endDate = Carbon::parse($request->return_date);
        $days = $startDate->diffInDays($endDate);

        $car = Car::find($request->car_id);
        $total_price = $days * $car->price;
        
        $order = new Order();
        $order->car_id = $request->car_id;
        $order->customer_id = auth('user')->user()->id;
        $order->pickup_date = $request->pickup_date;
        $order->return_date = $request->return_date;
        $order->status = 'Pending Payment';
        $order->pickup_location = $request->pickup_location;
        $order->return_location = $request->return_location;
        $order->total_price = $total_price;
        $order->save();

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    public function showPending()
    {
        $pendingPaymentOrders = Order::where('status', 'Pending Approval')->get();
        // dd($pendingPaymentOrders);
        return view('show-pending-order', [
            'orders' => $pendingPaymentOrders
        ]);
    }

    public function approveOrder(Order $order)
    {
        if (auth('admin')->user()) {
            $order->status = 'Approved';
            $order->save();
        }
        else {
            return (403);
        }
        return redirect()->route('pending.orders')
            ->with('success', 'Order approved successfully.');
    }

    public function orderDetail(Order $order)
    {
        return view('orders.detail', compact('order'));
    }
}
