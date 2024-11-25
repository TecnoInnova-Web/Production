<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>@yield('title', 'Acerca de ')</title>
    <link rel="preconnect" href="">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-t4yDGIgoO8ZO//kB3ar/Zns+gP+nqq7v/K/hrGoj3Hjlbt9qD659Cod4/0+EOeye5hHjJSC3noN8AHjZkf+1Z+dT"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .dark-mode {
            background-color: #1a202c;
            /* Fondo oscuro */
            color: #f7fafc;
            /* Texto claro */
        }

        .dark-mode a {
            color: #63b3ed;
            /* Enlaces claros */
        }

        .dark-mode .bg-white {
            background-color: #2d3748;
            /* Fondo gris oscuro */
        }

        .dark-mode .text-black {
            color: #e2e8f0;
            /* Texto claro en lugar de negro */
        }

        .dark-mode .bg-gray-200 {
            background-color: #4a5568;
            /* Fondo gris más oscuro */
        }

        .dark-mode .pregunta {
            background-color: #2d3748;
            color: #f7fafc;
        }

        .dark-mode .pregunta .bg-white {
            background-color: #2d3748;
        }

        .dark-mode .pregunta .text-black {
            color: #f7fafc;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-beige">
    <!--ENCABEZADO-->
    @include('layouts.public')

    <main class="flex-grow">
        <div class="bg-white py-10">
            <div class="container mx-auto flex justify-center text-center">
                <div>
                    <h2 class="text-2xl font-bold ">Conoce los Colectivos del Municipio</h2>
                    <p></p>
                </div>
                {{-- <img src="/path/to/your/image.svg" alt="" class="h-8 w-8"> --}}
            </div>
        </div>

       
        <div class="max-w-7xl mx-auto mt-3 text-center">
            <h1 class="text-3xl font-bold mb-6">Autobuses</h1>
        
            @if ($autobuses->isEmpty())
            <div class="bg-red-100 border-4 border-dashed border-red-400 text-red-700 px-4 py-3 rounded-lg relative"
            role="alert">
            <span class="font-bold">¡Atención!</span>
            <p>No hay Autobuses disponibles</p>
        </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($autobuses as $autobus)
                    <div class="bg-white rounded-lg shadow-xl p-4">
                        <div class="bg-gray-200 h-32 flex items-center justify-center">
                            <i class="fa-solid fa-bus" style="font-size: 50px"></i>
                            
                        </div>
                        <h1 class="mt-4 text-black font-semibold">Marca: {{ $autobus->marca }}</h1>
                        <h2 class=" font-semibold">Modelo: {{ $autobus->modelo }}</h2>
                        <p class="text-black font-semibold">Placa N#: {{ $autobus->placa }}</p>
                        <p class="text-black font-semibold">Color: {{ $autobus->color }}</p>
                        <p class="text-black font-semibold">Capacidad MAX: {{ $autobus->capacidad }}</p>

                    </div>
                    @endforeach
                </div>
            @endif
        </div><br><br><br>
        
        <div class="max-w-7xl mx-auto mt-3 ">
            <h1 class="text-3xl font-bold mb-6 text-center">Conductores</h1>
        
            @if ($conductores->isEmpty())
            <div class="bg-red-100 border-4 border-dashed border-red-400 text-red-700 px-4 py-3 rounded-lg relative"
            role="alert">
            <span class="font-bold">¡Atención!</span>
            <p>No hay Conductores disponibles</p>
        </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($conductores as $conductor)
                    <div class="bg-white rounded-lg shadow-xl p-4">
                        <div class="bg-gray-200 h-32 flex items-center justify-center">
                            <i class="fa-solid fa-user" style="font-size: 50px"></i>

                        </div><br>
                        <h1 class=" text-black font-semibold text-center" >{{ $conductor->nombreCompleto }}</h1>
                        

                    </div>
                    @endforeach
                </div>
            @endif
        </div><br><br><br><br>

      
        <div class="max-w-7xl mx-auto mt-9 ">
            <h1 class="text-3xl font-bold mb-6 text-center">Ruta De Viaje</h1>
            <div class="flex justify-center mt-8">
                <div class="bg-white shadow-lg rounded-lg p-10 max-w-3xl text-center">
                    <img src="{{ asset('img/ruta.webp') }}" alt="Descripción de la imagen" class="w-full h-120 object-cover rounded-lg mb-4">
                    <p class="mt-4">Este es la ruta desde La Cañada de Urdaneta hacia Maracaibo.</p>
                </div>
            </div>
        </div><br><br><br>

        <div class="max-w-7xl mx-auto mt-9 ">
        <h1 class="text-3xl font-bold mb-6 text-center">Anexos</h1>
        <div class="flex justify-center mt-8">
            <div class="bg-white shadow-lg rounded-lg p-10 text-center">
            @include('components.carrusel')
        </div>

        </div>
    </div><br><br><br>
 
        
    </main>

    @include('layouts.footer')

</body>

</html>
