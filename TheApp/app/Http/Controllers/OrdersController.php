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
        $pendingPaymentOrders = Order::where('status', 'Pending Payment')->where('customer_id', auth('customer')->user()->id)->get();
        $approvedOrders = Order::where('status', 'Approved')->where('customer_id', auth('customer')->user()->id)->get();
        $rejectedOrders = Order::where('status', 'Rejected')->where('customer_id', auth('customer')->user()->id)->get();
        return view('orders-index', [
            'pendingPaymentOrders' => $pendingPaymentOrders,
            'approvedOrders' => $approvedOrders,
            'rejectedOrders' => $rejectedOrders
        ]);
    }

    public function showAll()
    {
        $pendingOrders = Order::where('status', 'Pending Payment')->get();
        $approvedOrders = Order::where('status', 'Approved')->get();
        $rejectedOrders = Order::where('status', 'Rejected')->get();
        $returnedOrders = Order::where('status', 'Returned')->get();
        return view('view-all-orders', [
            'pendingOrders' => $pendingOrders,
            'approvedOrders' => $approvedOrders,
            'rejectedOrders' => $rejectedOrders,
            'returnedOrders' => $returnedOrders

        ]);
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
        $order->customer_id = auth('customer')->user()->id;
        $order->pickup_date = $request->pickup_date;
        $order->return_date = $request->return_date;
        $order->status = 'Pending Payment';
        $order->pickup_location = $request->pickup_location;
        $order->return_location = $request->return_location;
        $order->total_price = $total_price;
        // dd($order);
        $order->save();

        return redirect()->route('customer.order.show', $order->id)
            ->with('success', 'Order created successfully.');
    }

    public function update(Request $request, Order $order){
        if (auth('customer')->user()->id != $order->customer_id) {
            return redirect('forbidden');
        }
        elseif ($order->status != 'Pending Payment') {
            return redirect('forbidden');
        }
        $request->validate([
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
        $order->pickup_date = $request->pickup_date;
        $order->return_date = $request->return_date;
        $order->pickup_location = $request->pickup_location;
        $order->return_location = $request->return_location;
        $order->total_price = $total_price;
        $order->save();
    }

    public function showPending()
    {
        $pendingPaymentOrders = Order::where('status', 'Pending Payment')->get();
        // dd($pendingPaymentOrders);
        return view('show-pending-order', [
            'orders' => $pendingPaymentOrders
        ]);
    }

    public function destroy(Order $order)
    {
        if (auth('customer')->user()->id != $order->customer_id) {
            return redirect('forbidden');
        }
        elseif ($order->status != 'Pending Payment') {
            return redirect('forbidden');
        }
        $order->delete();
        return redirect()->route('index')
            ->with('success', 'Order deleted successfully.');
    }

    public function approveOrder(Order $order)
    {
        if (auth('admin')->user()) {
            $order->status = 'Approved';
            $order->save();
        }
        else {
            return redirect('forbidden');
        }
        return redirect()->back()
            ->with('success', 'Order approved successfully.');
    }

    public function rejectOrder(Order $order)
    {
        if (auth('admin')->user()) {
            $order->status = 'Rejected';
            $order->save();
        }
        else {
            return redirect('forbidden');
        }

        return redirect()->back()
            ->with('success', 'Order rejected successfully.');
    }

    public function orderDetail(Order $order)
    {
        return view('orders.detail', compact('order'));
    }

    public function show(Order $order)
    {
        $startDate = Carbon::parse($order->pickup_date);
        $endDate = Carbon::parse($order->return_date);
        $days = $startDate->diffInDays($endDate);
        return view('view-order', [
            'order' => Order::find($order->id),
            'days' => $days,
        ]
    );
    }

    public function returnedOrder(Order $order)
    {
        if (auth('admin')->user()) {
            $order->status = 'Returned';
            $order->save();
        }
        else {
            return redirect('forbidden');
        }
        return redirect()->back()
            ->with('success', 'Order returned successfully.');
    }
}
