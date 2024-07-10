@extends('layouts.app')
@include('header')

@section('title', 'Book')

<div class="flex justify-center w-full mt-32">
    <div class="w-9/12 flex flex-col items-center m-5 border">
        {{-- {"id":1,"brand":"Toyota","model":"Corolla","type":"Sedan","image":"https:\/\/via.placeholder.com\/150","price":200,"created_at":"2024-07-10T08:39:54.000000Z","updated_at":"2024-07-10T08:39:54.000000Z"} --}}
        <img src="{{ $car->image }}" alt="{{ $car->brand }} {{ $car->model }}">
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $car->type }}</div>
            <h2 class="block mt-1 text-lg leading-tight font-medium text-black">
                {{ $car->brand }} {{ $car->model }}
            </h2>
            <p class="mt-2 text-gray-500">Price: MYR {{ $car->price }}</p>
        </div>
    </div>
</div>
