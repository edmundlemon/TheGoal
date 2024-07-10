@extends('layouts.app')

@section('title', 'Unauthorised')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800 mb-4">403 Forbidden</h1>
        <p class="text-xl text-gray-600 mb-8">You are not forbidden to view this page.</p>
        <a href="{{ route('index') }}" class="inline-flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300 ease-in-out transform hover:scale-105">
            Back to Home
        </a>
    </div>
</div>
@endsection