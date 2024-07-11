@extends('layouts.app')

@section('title', 'View All Customers')

@section('content')

    <br><br><br><br><br>

    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Customers</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded border">
                <thead>
                    <tr>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            ID</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Name</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Email</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Birth Date</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Gender</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Created At</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Updated At</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $customer['id'] }}</td>
                            <td class="py-2 px-4">{{ $customer['name'] }}</td>
                            <td class="py-2 px-4">{{ $customer['email'] }}</td>
                            <td class="py-2 px-4">{{ $customer['birth_date'] }}</td>
                            <td class="py-2 px-4">{{ $customer['gender'] }}</td>
                            <td class="py-2 px-4">{{ $customer['created_at'] }}</td>
                            <td class="py-2 px-4">{{ $customer['updated_at'] }}</td>
                            <td class="py-2 px-4">
                                <a href="/edit/customer/{{$customer->id}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <a href="/delete-customer/{{ $customer->id }}"
                                    class="ml-2 text-red-600 hover:text-red-900">Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
