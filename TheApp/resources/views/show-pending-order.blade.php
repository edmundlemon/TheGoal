@extends('layouts.app')

@section('title', 'Approve Order')

@section('content')
    <br><br><br><br><br>
    <div class="container flex justify-center">
        <div class="flex flex-col w-full ml-[350px]">
            <table class="min-w-full divide-y divide-gray-200 border">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Payment Statement
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($orders as $order)
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $order->customer->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($order->payment)
                                    <a href="{{ asset($order->payment->payment_statement) }}" target="_blank"
                                        class="text-blue-500 hover:underline">View PDF</a>
                                @else
                                    <span class="text-red-500">No payment statement</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex flex-row space-x-5">
                                @if ($order->payment)
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
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
