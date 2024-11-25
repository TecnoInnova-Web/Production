<x-app-layout>
    @section('title', 'Administrador / Incio');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("") }}
                

                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                          
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gestion De Conductores</h5>
                          </a>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agrega, Edita y elimina tus Conductores.</p>
                          <a href="{{route('conductors.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dirigirse</a>
                        </div>
                      
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                          
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gestion De <br>  Horarios</h5>
                          </a>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agrega, Edita y elimina tus Horarios.</p>
                          <a href="{{route('horarios.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dirigirse</a>
                        </div>

                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                          
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gestion De Preguntas Frecuentes</h5>
                          </a>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agrega, Edita y elimina tus Preguntas Frecuentes.</p>
                          <a href="{{route('preguntas.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dirigirse</a>
                        </div>

                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                          
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gestion De Autobuses</h5>
                          </a>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agrega, Edita y elimina tus Autobuses.</p>
                          <a href="{{route('autobuses.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dirigirse</a>
                        </div>
                      
                        </div>

                </div>      
            </div>
        </div>
    </div>
</x-app-layout>
