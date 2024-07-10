@extends('layouts.app')

@section('title', 'View All Customers')

@section('content')

    <br><br><br><br><br>

    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Feedbacks</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded border">
                <thead>
                    <tr>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            ID</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Customer ID</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Message</th>
                        <th
                            class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Rating</th>
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
                    @foreach ($feedbacks as $feedback)
                        <tr class="border-b">
                            <td class="py-2 px-4">{{ $feedback['id'] }}</td>
                            <td class="py-2 px-4">{{ $feedback->customer->name }}</td>
                            <td class="py-2 px-4">{{ $feedback['message'] }}</td>
                            <td class="py-2 px-4">{{ $feedback['rating'] }} / 5</td>
                            <td class="py-2 px-4">{{ $feedback['created_at'] }}</td>
                            <td class="py-2 px-4">{{ $feedback['updated_at'] }}</td>
                            <td class="py-2 px-4">
                                <a href="/delete-feedback/{{$feedback->id}}" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
