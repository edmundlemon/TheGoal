<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReceiptController extends Controller
{
    //
    public function generatePdf(Order $order)
    {
        if ($order->status != 'Approved') {
            return redirect()->route('orders.index')
                ->with('error', 'Order not approved yet.');
        }

        else if ($order->customer_id != auth('customer')->user()->id) {
            return redirect()->route('orders.index')
                ->with('error', 'Unauthorized access.');
        }
        $data = [
            'price' => $order->total_price,
            'pickup_date' => $order->pickup_date,
            'return_date' => $order->return_date,
            'pickup_location' => $order->pickup_location,
            'return_location' => $order->return_location,
            'customer_name' => $order->customer->name,
            'car_brand' => $order->car->brand,
            'car_model' => $order->car->model,
            'car_type' => $order->car->type,
            'total_price' => number_format($order->total_price, 2, '.', ',')
        ];

        $pdf = Pdf::loadView('receipt', $data);

        return $pdf->download('receipt.pdf');
    }

    public function adminGeneratePdf(Order $order)
    {
        if ($order->status != 'Approved') {
            return redirect()->route('orders.index')
                ->with('error', 'Order not approved yet.');
        }

        $data = [
            'price' => $order->total_price,
            'pickup_date' => $order->pickup_date,
            'return_date' => $order->return_date,
            'pickup_location' => $order->pickup_location,
            'return_location' => $order->return_location,
            'customer_name' => $order->customer->name,
            'car_brand' => $order->car->brand,
            'car_model' => $order->car->model,
            'car_type' => $order->car->type,
            'total_price' => number_format($order->total_price, 2, '.', ',')
        ];

        $pdf = Pdf::loadView('receipt', $data);

        return $pdf->download('receipt.pdf');
    }
}
