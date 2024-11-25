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

<header class="shadow-xl bg-gray-800">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-lg font-bold">
            <x-application-logo class="block h-9 w-auto fill-current text-white" />
        </div>
        <div class="flex items-center">
            <nav class="hidden md:flex space-x-10 mr-8" id="nav-menu">
                <a href="{{ url('/') }}" class="text-white hover:text-sky-blue">INICIO</a>
                <a href="{{ route('about.about') }}" class="text-white hover:text-sky-blue">ACERCA DE</a>
                {{-- <a href="{{ route('descargar.pdf') }}" class="text-white hover:text-sky-blue">AYUDA</a> --}}
            </nav>

            <div class="relative">
                <form action="{{ route('search.results') }}" method="POST" class="flex items-center">
                    @csrf
                    <input type="text" placeholder="Buscar.." name="query"
                        class="border rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-sky-blue text-gray-900">
                    <button type="submit"
                        class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M16.5 10.5A6 6 0 1110.5 4.5 6 6 0 0116.5 10.5z" />
                        </svg>
                    </button>
                </form>
            </div>

            <button id="theme-toggle" class="ml-4 text-white focus:outline-none">
                <i class="fas fa-moon"></i>
            </button>

            <div class="relative md:hidden ml-5">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div class="absolute right-0 z-10 hidden bg-white shadow-md mt-2 rounded" id="dropdown-menu">
                    <nav class="flex flex-col p-2">
                        <a href="{{ url('/') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200">INICIO</a>
                        <a href="{{ route('about.about') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200">ABOUT</a>
                           
                            {{-- <a href="{{ route('descargar.pdf') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200">AYUDA</a> --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // Verifica si hay un tema guardado en localStorage
    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
    }

    themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        // Guarda el estado en localStorage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            localStorage.removeItem('dark-mode');
        }
    });
</script>
