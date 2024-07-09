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
        
        $data = [
            'price' => $order->price,
            'pickup_date' => $order->pickup_date,
            'return_date' => $order->return_date,
            'car_type' => $order->car_type,
        ];

        $pdf = Pdf::loadView('receipt', $data);

        return $pdf->download('receipt.pdf');
    }
}
