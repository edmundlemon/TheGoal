@extends('layouts.app')

@section('title', 'Orders')

@section('content')


    <br><br><br><br><br>
    {{-- spacing because funny --}}


    <h1 class="text-3xl font-bold text-gray-800 text-center mb-10 ">Pending Payment</h1>
    <div>
        <div class="container mx-auto shadow-md">


            <div class="overflow-x-auto rounded-lg shadow-md border">
                @if ($pendingPaymentOrders->count() > 0)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Customer Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($pendingPaymentOrders as $order)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $order->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $order->customer->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->status }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        MYR {{ number_format($order->total_price, 2, '.', '') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="/view/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 mr-2 bg-indigo-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            View
                                        </a>
                                        <a href="/edit/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 mr-2 bg-green-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-green-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Edit
                                        </a>
                                        <a href="/delete/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 bg-red-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-red-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Delete
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-5 text-center">No pending orders yet so far...</div>
                @endif

            </div>

            {{-- approved orders --}}
            <h1 class="text-3xl font-bold text-gray-800 text-center my-10 ">Approved Payments</h1>

            <div class="overflow-x-auto bg-white rounded-lg shadow-md border">
                @if ($approvedOrders->count() > 0)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Customer Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($approvedOrders as $order)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $order->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $order->customer->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->status }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        MYR {{ number_format($order->total_price, 2, '.', '') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="/receipt/{{$order->id}}"
                                            class="inline-block px-4 py-2 mr-2 bg-yellow-500 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Receipt
                                        </a>
                                        {{-- <a href="/edit/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 mr-2 bg-green-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-green-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Edit
                                        </a>
                                        <a href="/delete/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 bg-red-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-red-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Delete
                                        </a> --}}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-5 text-center">No approved orders yet so far...</div>
                @endif

            </div>


            {{-- rejected orders --}}
            <h1 class="text-3xl font-bold text-gray-800 text-center my-10 ">Rejected</h1>

            <div class="overflow-x-auto bg-white rounded-lg shadow-md border">
                @if ($rejectedOrders->count() > 0)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Customer Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($rejectedOrders as $order)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $order->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $order->customer->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order->status }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        MYR {{ number_format($order->total_price, 2, '.', '') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="/view/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 mr-2 bg-indigo-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            View
                                        </a>
                                        {{-- <a href="/edit/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 mr-2 bg-green-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-green-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Edit
                                        </a>
                                        <a href="/delete/order/{{ $order->id }}"
                                            class="inline-block px-4 py-2 bg-red-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-red-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            Delete
                                        </a> --}}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-5 text-center">No rejected orders yet so far...</div>
                @endif

            </div>
        </div>
    </div>  
@endsection
