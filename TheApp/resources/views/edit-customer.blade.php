@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <br><br><br><br><br>

    <div class="max-w-md mx-auto mt-5">
        <form action="{{ route('update.customer', $customer->id) }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Name" name="name" value="{{ $customer->name }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="email" name="email" value="{{ $customer->email }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="birth_date">
                    Birth Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="birth_date" type="date" placeholder="Birth Date" name="birth_date"
                    value="{{ $customer->birth_date }}">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                    Gender
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500"
                        id="gender" name="gender">
                        <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 12.59l-4.3 4.3a1 1 0 01-1.4-1.42l5-5a1 1 0 011.4 0l5 5a1 1 0 01-1.4 1.42l-4.3-4.3v8.3a1 1 0 11-2 0v-8.3z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
