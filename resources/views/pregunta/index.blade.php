<x-app-layout>
    @section('title', 'Administrador / Preguntas Frecuentes');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Preguntas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Preguntas') }}</h1>
                            <p class="mt-2 text-sm text-white">Listado de todas las {{ __('Preguntas Frecuentes') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('preguntas.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">                    {{ __('Agregar ') }}
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 px-4">
                        {!! $preguntas->withQueryString()->links() !!}
                    </div>
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="flex text-center min-w-full py-2 align-middle">
                                <table class="w-full table-auto divide-y divide-gray-200 dark:bg-gray-800">
                                    <thead class="dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                                    <tr>
                                        <th scope="col" class="px-3 py-4 text-center font-semibold">No</th>
                                        <th scope="col" class="px-3 py-4 text-center font-semibold">Pregunta</th>
									    <th scope="col" class="px-3 py-4 text-center font-semibold">Respuesta</th>
                                        <th scope="col" class="px-3 py-4 text-center font-semibold">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-20">
                                    @foreach ($preguntas as $pregunta)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ ++$i }}</td>
									        <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $pregunta->pregunta }}</td>
									        <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $pregunta->respuesta }}</td>
                                            <td class="px-3 py-4 text-center whitespace-nowrap  text-white">
                                                <form action="{{ route('preguntas.destroy', $pregunta->id) }}" method="POST">
                                                    <a href="{{ route('preguntas.show', $pregunta->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">{{ __('Mostar') }}</a>
                                                    <a href="{{ route('preguntas.edit', $pregunta->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">{{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('preguntas.destroy', $pregunta->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>