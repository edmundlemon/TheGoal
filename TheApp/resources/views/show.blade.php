@extends('layouts.app')
@include('header')

@section('title', 'Book')

<div class="flex justify-center w-full mt-32">
    <div class="w-9/12 flex flex-col items-center m-5 border p-5 rounded shadow-md">
        {{-- {"id":1,"brand":"Toyota","model":"Corolla","type":"Sedan","image":"https:\/\/via.placeholder.com\/150","price":200,"created_at":"2024-07-10T08:39:54.000000Z","updated_at":"2024-07-10T08:39:54.000000Z"} --}}
        <h1 class="text-3xl font-bold text-gray-800">Car Info</h1>

        <div class="flex flex-row items-center space-x-5">
            <div class="p-5 flex flex-row space-x-5">
                <img class="rounded" src="{{ $car->image }}" alt="{{ $car->brand }} {{ $car->model }}">
                <div class="flex flex-col justify-center">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $car->type }}</div>
                    <h2 class="block mt-1 text-lg leading-tight font-medium text-black">
                        {{ $car->brand }} {{ $car->model }}
                    </h2>
                    <p class="mt-2 text-gray-500">Price: MYR {{ $car->price }} <b>/ Days</b></p>
                </div>
            </div>
        </div>
        <form>
            <div class="flex flex-row space-x-5">
                <div class="flex flex-col">
                    <label for="pickup_date" class="text-gray-600">Pickup Date</label>
                    <input type="date" name="pickup_date" class="border border-gray-300 rounded-md p-2 mt-1 w-72"
                        min="{{ date('Y-m-d') }}">
                </div>

                <div class="flex flex-col">
                    <label for="return_date" class="text-gray-600">Return Date</label>
                    <input type="date" name="return_date" class="border border-gray-300 rounded-md p-2 mt-1 w-72"
                        min="{{ date('Y-m-d') }}">
                </div>
            </div>

            <div class="flex flex-row space-x-5 mt-5">
                <div class="flex flex-col">
                    <label for="pickup_location" class="text-gray-600">Pickup Location</label>
                    <select type="text" name="pickup_location"
                        class="border border-gray-300 rounded-md p-2 mt-1 w-72">
                        <option value="" disabled selected>Select a Pickup Location</option>
                        <option value="KL">KL</option>
                        <option value="KLIA">KLIA</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Penang">Penang</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Johor">Johor</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="return_location" class="text-gray-600">Return Location</label>
                    <select type="text" name="return_location"
                        class="border border-gray-300 rounded-md p-2 mt-1 w-72">
                        <option value="" disabled selected>Select a Return Location</option>
                        <option value="KL">KL</option>
                        <option value="KLIA">KLIA</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Penang">Penang</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Johor">Johor</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Make Booking</button>
            </div>
        </form>
    </div>
</div>
