@extends('layouts.app')

@section('title', 'View Order')

@section('content')
    <br><br><br><br><br><br>

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded px-12 pt-6 pb-8 mb-4 border relative">
        <button class="absolute top-2 right-2 hover:font-bold transition-font duration-300 ease-in-out"
            onclick="history.back()">Back</button>
        <div class="flex justify-between mb-4">
            <h2 class="text-4xl font-bold text-indigo-600">Order Details</h2>
        </div>
        <div class="flex justify-between mb-4">
            <h5 class="text-red-500 font-medium">
                Upload Your Receipt below for Payment Verification
            </h5>
        </div>
        <div class="mb-4">
            <h5 class="text-gray-800 font-medium">Order ID: <span
                    class="text-gray-600 font-semibold">{{ $order->id }}</span></h5>
        </div>
        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Customer Name: <span
                        class="text-gray-600 font-semibold">{{ $order->customer->name }}</span></p>
                <p class="text-gray-800 font-medium">Customer Email: <span
                        class="text-gray-600 font-semibold">{{ $order->customer->email }}</span></p>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Car Name: <span
                        class="text-gray-600 font-semibold">{{ $order->car->brand }}
                        {{ $order->car->model }}</span></p>
                <p class="text-gray-800 font-medium">Car Price (per day): <span
                        class="text-gray-600 font-semibold"><b>MYR</b>
                        {{  number_format($order->car->price, 2, '.', '') }}</span></p>
            </div>
        </div>
        <div class="mb-4">
            <img src="{{ $order->car->image }}" alt=" {{ $order->car->brand }} {{ $order->car->model }}"
                class="w-full h-64 object-cover rounded">
        </div>
        <div class="flex flex-wrap mb-1">
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Days: <span
                        class="text-gray-600 font-semibold">{{ $days }}</span></p>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Order Date: <span
                        class="text-gray-600 font-semibold">{{ $order->created_at }}</span></p>
            </div>
        </div>

        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Pickup Date: <span
                        class="text-green-600 font-semibold">{{ $order->pickup_date }}</span></p>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                <p class="text-gray-800 font-medium">Return Date:
                    <span class="text-red-600 font-semibold">{{ $order->return_date }}</span>
                </p>
            </div>
        </div>

        <div class="mb-4">
            <p class="text-gray-800 font-medium">Total Price: <span 
                class="text-gray-600 font-semibold"><b>MYR </b>{{ number_format($order->total_price, 2, '.', '') }}</span></p>
            <p class="text-gray-800 font-medium">Status: <span id="status"
                    class="text-gray-600 font-semibold">{{ $order->status }}</span></p>
        </div>
        @if ($order->status === 'Pending Payment' && Auth::guard('customer')->check())
        <div class="w-full mb-4">
            <form action="/upload-payment-receipt/{{ $order->id }}" method="POST" 
                class="flex flex-col w-full space-y-2"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="file" name="payment_statement" class="border rounded w-full p-2">
                @error('payment_statement')
                    <span class="text-red-500 text-sm">
                        {{ $message }}
                    </span>  
                @enderror
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Upload
                    Receipt</button>
            </form>
        </div>
        @endif
    </div>

    <script>
        const status = document.getElementById('status').innerText;

        if (status === 'Pending Payment') {
            document.getElementById('status').classList.add('text-yellow-500');
        } else if (status === 'Approved') {
            document.getElementById('status').classList.add('text-green-500');
        } else if (status === 'Rejected') {
            document.getElementById('status').classList.add('text-red-500');
        }
    </script>

@endsection
