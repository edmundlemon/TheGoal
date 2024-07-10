@extends('layouts.app')

@section('title', 'Add Car')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Add Car</h1>
    <form action="/addcar" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('POST')
        <div>
            <label for="brand" class="block text-sm font-medium text-gray-700">Brand:</label>
            <input type="text" id="brand" name="brand" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div>
            <label for="model" class="block text-sm font-medium text-gray-700">Model:</label>
            <input type="text" id="model" name="model" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Type:</label>
            <input type="text" id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price:</label>
            <input type="number" id="price" name="price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
            ">
        </div>
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add Car
        </button>
    </form>
</div>
@endsection