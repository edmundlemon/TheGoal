@extends('layouts.app')

@section('title', 'Edit Car')

@section('content')
<br><br><br><br><br>
<div class="flex flex-col">
	<h1 class="text-2xl font-bold mb-4">Edit Car</h1>
	<div class="bg-white p-4 rounded-lg shadow-lg">
		<form action="/editcar/{{ $car->id }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="flex flex-col">
				<label for="brand" class="text-sm font-bold text-gray-500">Brand</label>
				<input type="text" name="brand" id="brand" class="border border-gray-300 p-2 rounded-lg" value="{{ $car->brand }}">
			</div>
			<div class="flex flex-col mt-4">
				<label for="model" class="text-sm font-bold text-gray-500">Model</label>
				<input type="text" name="model" id="model" class="border border-gray-300 p-2 rounded-lg" value="{{ $car->model }}">
			</div>
			<div class="flex flex-col mt-4">
				<label for="type" class="text-sm font-bold text-gray-500">Type</label>
				<input type="text" name="type" id="type" class="border border-gray-300 p-2 rounded-lg" value="{{ $car->type }}">
			</div>
			<div class="flex flex-col mt-4">
				<label for="price" class="text-sm font-bold text-gray-500">Price</label>
				<input type="number" name="price" id="price" class="border border-gray-300 p-2 rounded-lg" value="{{ $car->price }}">
			</div>
			<div class="flex flex-col mt-4">
				<label for="image" class="text-sm font-bold text-gray-500">Image</label>
				<input type="file" name="image" id="image" class="border border-gray-300 p-2 rounded-lg">
			</div>
			<div class="flex flex-row mt-4">
				<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-40 h-[40px] mx-2 ">Update</button>
				<a href="/view-all-cars" class="inline-flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded w-40 h-[40px] justify-center items-center"><div>Cancel</div></a>
			</div>
		</form>
	</div>
</div>
@endsection