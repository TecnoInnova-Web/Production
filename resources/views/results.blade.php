<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">    <title>@yield('title', 'Inicio')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
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
    <!-- ENCABEZADO -->
    @include('layouts.public')

    <div class="flex-grow mb-20">
        <div class="bg-white py-10">
            <div class="container mx-auto flex justify-center text-center">
                <div>
                    <h1 class="text-2xl font-bold ">Resultados de la Busqueda</h1>
                    
                </div>
                {{-- <img src="/path/to/your/image.svg" alt="" class="h-8 w-8"> --}}
            </div>
        </div>
        <div class="container mx-auto p-4 br wh">
            
            @if(isset($mensaje))
                <div class="bg-red-100 border-4 border-dashed border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                    <span class="font-bold">¡Atención!</span>
                    <p>{{ $mensaje }}</p>
                </div><br><br><br>
            @elseif($horarios->isEmpty() && $conductores->isEmpty() && $autobuses->isEmpty())
                <div class="bg-red-100 border-4 border-dashed border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                    <span class="font-bold">¡Atención!</span>
                    <p>No se encontraron resultados.</p>
                </div>
            @else
                @if(!$horarios->isEmpty())
                    <h2 class="text-xl font-bold mb-4 text-center">Horarios Disponibles</h2>
                    @foreach ($horarios as $horario)
                        <div class="w-full bg-white shadow-xl rounded-lg overflow-hidden hover:shadow-xl transition duration-300 mb-4 text">
                            <div class="flex flex-col md:flex-row">
                                <div class="w-full md:w-1/2 p-6 border-b md:border-r border-gray-300">
                                    <h3 class="text-2xl font-bold mb-4">Cañada Urdaneta - Maracaibo   Ruta #{{++$i}}</h3>
                                   
                                    <p class="">
                                        <span class="font-bold">Hora de Salida:</span> {{ $horario->hora_salida_canada }} 
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Hora de Llegada:</span> {{ $horario->hora_llegada_centro }} 
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Conductor:</span> {{ $horario->conductor->nombreCompleto }}
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Autobús:</span> {{ $horario->autobus->marca }}
                                    </p>
                                    
                                </div>
                                <div class="w-full md:w-1/2 p-6 border-b md:border-l border-gray-300">
                                    <h3 class="text-2xl font-bold mb-4">Maracaibo - Cañada Urdaneta</h3>
                                    <p class="">
                                        <span class="font-bold">Hora de Salida:</span> {{ $horario->hora_salida_centro }} Am
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Hora de Llegada:</span> {{ $horario->hora_llegada_canada }} Am
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Conductor:</span> {{ $horario->conductor->nombreCompleto }}
                                    </p>
                                    <p class="">
                                        <span class="font-bold">Autobús:</span> {{ $horario->autobus->marca }}
                                    </p>
                                    
                                </div>
                            </div>
                        </div><br><br><br>
                    @endforeach
                @endif
        
                @if(!$conductores->isEmpty())
                    <h2 class="text-xl font-bold mb-4 text-center">Conductores Disponibles</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-center">
                        @foreach ($conductores as $conductor)
                            <div class="bg-white rounded-lg shadow-xl p-4">
                                <div class="bg-gray-200 h-32 flex items-center justify-center">
                                    <i class="fa-solid fa-user" style="font-size: 50px"></i>
                                </div><br><br>
                                <h1 class=" text-black font-semibold"> {{ $conductor->nombreCompleto }}</h1>
                            </div>
                        @endforeach
                    </div><br><br><br><br>
                @endif
        
                @if(!$autobuses->isEmpty())
                    <h2 class="text-xl font-bold mb-4 text-center">Autobuses Disponibles</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($autobuses as $autobus)
                            <div class="bg-white rounded-lg shadow-xl p-4 text-center">
                                <div class="bg-gray-200 h-32 flex items-center justify-center">
                                    <i class="fa-solid fa-bus" style="font-size: 50px"></i>
                                </div>
                                <h1 class="mt-4 text-black font-semibold">Marca: {{ $autobus->marca }}</h1>
                                <h2 class="font-semibold">Modelo: {{ $autobus->modelo }}</h2>
                                <p class="text-black font-semibold">Placa N#: {{ $autobus->placa }}</p>
                                <p class="text-black font-semibold">Color: {{ $autobus->color }}</p>
                                <p class="text-black font-semibold">Capacidad MAX: {{ $autobus->capacidad }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>
    </div>
 
    @include('layouts.footer')

</body>

</html>
