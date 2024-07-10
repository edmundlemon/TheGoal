@extends('layouts.app')

@section('title', 'View All Orders')

@section('content')

    <br><br><br><br><br>


    <h1 class="text-3xl font-bold text-gray-800 text-center mb-10 ">Pending Payments</h1>

    <div class="flex justify-center">
        <div class="overflow-x-auto rounded-lg shadow-md border w-9/12">
            @if ($pendingOrders->count() > 0)
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
                        @foreach ($pendingOrders as $order)
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex flex-row space-x-3">
                                    <form action="/approve-order/{{ $order->id }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approve</button>
                                    </form>
                                    <form action="/reject-order/{{ $order->id }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Reject</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-5 text-center">No pending orders yet so far...</div>
            @endif

        </div>
    </div>

    {{-- Approved Orders --}}
    <h1 class="text-3xl font-bold text-gray-800 text-center my-10 ">Approved Payments</h1>

    <div class="flex justify-center">
        <div class="overflow-x-auto rounded-lg shadow-md border w-9/12">
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex flex-row">
                                    <a href="/view/order/{{ $order->id }}"
                                        class="inline-block px-4 py-2 mr-2 bg-indigo-600 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                        View
                                    </a>
                                    <a href="/receipt/{{ $order->id }}"
                                        class="inline-block px-4 py-2 mr-2 bg-yellow-500 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 ease-in-out transform hover:-translate-y-1">
                                        Receipt
                                    </a>
                                    <form action="/return/{{ $order->id }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="inline-block px-4 py-2 mr-2 bg-purple-500 text-white font-semibold text-xs rounded-lg shadow-md hover:bg-purple-600 transition duration-300 ease-in-out transform hover:-translate-y-1">Returned</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-5 text-center">No approve orders yet so far...</div>
            @endif

        </div>
    </div>

    {{-- Rejected Orders --}}
    <h1 class="text-3xl font-bold text-gray-800 text-center my-10 ">Rejected Order</h1>

    <div class="flex justify-center">
        <div class="overflow-x-auto rounded-lg shadow-md border w-9/12">
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
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-5 text-center">No rejeted orders yet so far...</div>
            @endif

        </div>
    </div>


    {{-- Rejected Orders --}}
    <h1 class="text-3xl font-bold text-gray-800 text-center my-10 ">Returned</h1>

    <div class="flex justify-center mb-12">
        <div class="overflow-x-auto rounded-lg shadow-md border w-9/12">
            @if ($returnedOrders->count() > 0)
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
                        @foreach ($returnedOrders as $order)
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
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-5 text-center">No returnned orders yet so far...</div>
            @endif

        </div>
    </div>
