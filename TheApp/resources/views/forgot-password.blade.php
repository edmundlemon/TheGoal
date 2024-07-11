<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <form action="/forgot-password" method="post" class="space-y-6">
            <h1 class="text-xl font-semibold text-gray-700">Please type your email</h1>
            @csrf
            @method('POST')
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" required name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('error')
                <p class="text-red-500 text-xs mt-1">
                    {{ $message }}
                </p>
            @enderror
            </div>
            {{-- <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Submit</button>
        </form>

        <form action="/forgot-password" method="post" class="space-y-6 mt-6">
            <h1 class="text-xl font-semibold text-gray-700">Account Found please select and answer the security answer</h1>
            @csrf
            @method('POST') --}}
            <div>
                <label for="security_question" class="block text-sm font-medium text-gray-700">Security Question</label>
                <select name="security_question" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="What is your pet's name?">What is your pet's name?</option>
                    <option value="When is your parent's birthday?">When is your parent's birthday?</option>
                    <option value="What is your favorite celebrity?">What is your favorite celebrity?</option>
                </select>
            </div>
            <div>
                <label for="security_answer" class="block text-sm font-medium text-gray-700">Security Answer</label>
                <input type="text" required name="security_answer" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" required name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmation Password</label>
                <input type="password" required name="password_confirmation" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Submit</button>
        </form>

        <button type="button" onclick="window.location.href='/login'" class="mt-6 w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-blue-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Back to login</button>
    </div>
</body>

</html>
