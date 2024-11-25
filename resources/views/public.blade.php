<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>@yield('title', 'Inicio')</title>
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
       .respuesta {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.3s ease, opacity 0.3s ease;
    }

    .respuesta.show {
        max-height: 200px; /* Ajusta según sea necesario */
        opacity: 1;
    }
    </style>

</head>

<body class="flex flex-col min-h-screen bg-beige transition-colors duration-300">
    <!--ENCABEZADO-->
    @include('layouts.public')

    <main class="flex-grow">
        <div class="bg-white py-10">
            <div class="container mx-auto flex flex-col items-center text-center">
                <div>
                    <h2 class="text-2xl font-bold">Bienvenidos</h2>
                    <p>Conoce los Horarios De Las rutas</p>
                </div>
                <!-- Contador de visitas -->
            </div>
        </div>
        

        <div class="container mx-auto p-8">
            <h1 class="text-3xl font-bold mb-4 text-navy">Horarios de hoy: <br>{{ $today->format('d/m/Y') }}</h1>

            @if ($horarios_hoy->isEmpty())
                <div class="bg-red-100 border-4 border-dashed border-red-400 text-red-700 px-4 py-3 rounded-lg relative"
                    role="alert">
                    <span class="font-bold">¡Atención!</span>
                    <p>No hay horarios disponibles para hoy.</p>
                </div>
            @else
            @endif
        </div>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($horarios_hoy as $horario)
                    <div class="bg-white rounded-lg shadow-xl p-4 text-center">
                        <div class="bg-gray-200 h-32 flex items-center justify-center">
                            <h5 class="text-lg font-bold mb-2 text-navy ml-5">Ruta {{ ++$i }} </h5>
                            <i class="fa-solid fa-bus" style="font-size: 50px"></i>
                        </div>
                        <h1 class="mt-4 text-black font-semibold">Salida: {{ $horario->hora_salida_canada }}</h1>
                        <h2 class="mt-2 text-black font-semibold">Llegada: {{ $horario->hora_llegada_centro }}</h2>
                        <p class="mt-1 text-black font-semibold">Autobús: {{ $horario->autobus->marca }}</p>
                        <p class="mt-1 text-black font-semibold">Conductor: {{ $horario->conductor->nombreCompleto }}
                        </p>
                    </div>
                @endforeach
            </div> <br> <br>
        </div>

        <div class="max-w-2xl mx-auto rounded-lg  p-6 mb-10">
            <h1 class="text-2xl font-bold mb-4 text-center text-navy">Preguntas frecuentes</h1>
            @foreach ($preguntas as $pregunta)
                <div class="mb-6">
                    <div class="pregunta flex items-center justify-between bg-white shadow-xl p-4 rounded-lg cursor-pointer"
                        name="pregunta">
                        <span class="text-left">{{ $pregunta->pregunta }}</span>
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15l-3-3h6l-3 3zm0 0l3-3h-6l3 3z"></path>
                        </svg>
                    </div>
                    <div class="bg-white p-4 mt-2 shadow rounded-lg hidden">
                        {{ $pregunta->respuesta }}
                    </div>
                </div>
            @endforeach
            <div class="pregunta flex items-center justify-between bg-white shadow-xl p-4 rounded-lg cursor-pointer"
                        name="pregunta">
                        <span class="text-left">Manal de Usuario</span>
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15l-3-3h6l-3 3zm0 0l3-3h-6l3 3z"></path>
                        </svg>
                    </div>
                    <div class="bg-white p-4 mt-2 shadow rounded-lg hidden">
                        <a href="{{ route('descargar.pdf') }}"
                        class="block px-4 py-2 text-gray-700 hover:text-gray-200"><i class="fa-solid fa-file-pdf" style="margin-right:8px;font-size:30px;"></i>Click aqui para DESCARGAR el Manual de usuarios </a>
                    </div>
                </div>
        </div><br>

    </main>
    
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const preguntas = document.querySelectorAll('.pregunta');
    
            preguntas.forEach(pregunta => {
                pregunta.addEventListener('click', function () {
                    const respuesta = this.nextElementSibling;
    
                    if (respuesta.classList.contains('show')) {
                        // Si está visible, oculta la respuesta
                        respuesta.classList.remove('show');
                        setTimeout(() => {
                            respuesta.style.display = 'none';
                        }, 300); // Tiempo de espera para la animación
                    } else {
                        // Si está oculta, muestra la respuesta
                        respuesta.style.display = 'block';
                        setTimeout(() => {
                            respuesta.classList.add('show');
                        }, 10); // Tiempo para permitir que el display: block tome efecto
                    }
                });
            });
        });
    </script>
    
</body>

</html>
