<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'La Cañada !! Admin') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-t4yDGIgoO8ZO//kB3ar/Zns+gP+nqq7/K/hrGoj/3Hjlbt9qD659Cod4/0+EOeye5hHjJSC3noN80AHjZkf+1Z+dT" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
   
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-lg font-bold">LOGO</div>
            <div class="flex items-center space-x-8">
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-500">INICIO</a>
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-500">ABOUT</a>
                </nav>
            <div class="relative">
                <form action="{{ route('search.results') }}" method="POST" class="flex items-center">
                    @csrf
                <input type="text" placeholder="Buscar.." name="query" class="border rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.5 10.5A6 6 0 1110.5 4.5 6 6 0 0116.5 10.5z" />
                    </svg>
                </button>
                </form>
            </div>
            <button class="md:hidden text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>
</body>
</html>