<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
	@yield('styles')
    <style>
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
        0% { opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { opacity: 0; }
    }
</style>
    </style>
</head>
<body>

    @if (session('success'))
    <div id="flash-message" class="flash-card flash-success">
        {{ session('success') }}
    </div>
    @endif
    <main>
        @yield('content')
    </main>

</body>
</html>
