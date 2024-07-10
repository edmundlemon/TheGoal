@extends('layouts.app')

@section('title', 'View All Customers')

@section('content')

    <br><br><br><br><br>

    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Inquiries</h1>
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
                            Phone</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Date</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Time</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Message</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Services</th>
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
                    @foreach ($inquiries as $inquiry)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $inquiry['id'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['name'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['email'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['phone'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['date'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['time'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['message'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['services'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['created_at'] }}</td>
                            <td class="py-2 px-4">{{ $inquiry['updated_at'] }}</td>
                            <td class="py-2 px-4 whitespace-nowrap">
                                <a href="/delete-inquiry/{{ $inquiry->id }}"
                                    class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
