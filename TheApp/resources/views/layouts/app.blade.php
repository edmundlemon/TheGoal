<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    {{-- @vite('resources/css/app.css') --}}
    @yield('styles')
    <style>
        <style>.flash-card {
            position: absolute;
            top: 100px;
            /* Adjust this value to move the flash card further down */
            right: 20px;
            padding: 15px 25px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            z-index: 1000;
            animation: fadeInOut 5s ease-in-out;
        }


        .flash-success {
            background-color: #4CAF50;
        }

        .flash-error {
            background-color: #e72f2f;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
    </style>
</head>

<body class="">
    @if (session('success'))
        <div id="flash-message" class="flash-card flash-success mt-16">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="flash-message" class="flash-card flash-error mt-16">
            {{ session('error') }}
        </div>
    @endif

    @include('header')

    <main>
        @yield('content')
        @if (!Auth::guard('admin')->check())
            @include('footer')
        @endif
    </main>


</body>
<style>
    .flash-card {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 25px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        z-index: 1000;
        animation: fadeInOut 5s ease-in-out;
    }

    .flash-success {
        background-color: #4CAF50;
    }

    @keyframes fadeInOut {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 5000); // Disappear after 5 seconds
        }
    });
</script>

</html>
