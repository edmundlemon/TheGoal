@extends('layouts.app')

@section('title', 'View All Cars')

@section('content')

<br><br><br><br><br>


<div class="flex flex-col">
	<h1 class="text-2xl font-bold mb-4">View All Cars</h1>
	<div class="flex flex-col">
		<div class="grid grid-cols-3 gap-4">
			@foreach($cars as $car)
			<div class="bg-white p-4 rounded-lg shadow-lg">
				<img src="{{ asset($car->image) }}" alt="{{ $car->brand }} {{ $car->model }}" class="w-full h-48 object-cover rounded-lg">
				<div class="flex flex-row">
					<div class="mt-4 flex-1">
						<h2 class="text-xl font-bold">{{ $car->brand }} {{ $car->model }}</h2>
						<p class="text-sm text-gray-500">{{ $car->type }}</p>
						<p class="text-sm text-gray-500">Price: RM{{ $car->price }}</p>
					</div>
					<div class="flex-1">
						<a href="/editcar/{{ $car->id }}" class="inline-flex mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-40 justify-center items-center"><div>Edit</div></a>
						<form action="/deletecar/{{ $car->id }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="inline-block mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-40">Delete</button>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>