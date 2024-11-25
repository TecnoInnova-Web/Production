<x-app-layout>
    @section('title', 'Administrador / Conductores');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conductors') }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Conductores') }}</h1>
                            <p class="mt-2 text-sm text-white">Listado de todos los {{ __('Conductores') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('conductors.create') }}"
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                                {{ __('Agregar ') }}
                            </a>
                            <a type="button" href="{{ route('conductor.report') }}" targe="_blank"  class="inline-flex items-center px-4 py-2 bg-green-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-green-800 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-green-500">
                                {{ __('Report pdf') }}
                              </a>
                        </div>
                    </div>
                    <div class="mt-4 px-4">
                        {!! $conductors->withQueryString()->links() !!}
                    </div>
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="flex text-center min-w-full py-2 align-middle">
                                <table class="w-full table-auto divide-y divide-gray-200 dark:bg-gray-800">
                                    <thead class="dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                                        <tr>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold">No</th>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold"> Nombrecompleto</th>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold">Cedula</th>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold"> Telefono</th>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold">Direccion</th>
                                            <th scope="col" class="px-3 py-4 text-center font-semibold">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-grey-600">
                                        @foreach ($conductors as $conductor)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ ++$i }}</td>
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $conductor->nombreCompleto }}</td>
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $conductor->cedula }}</td>
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $conductor->telefono }}</td>
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $conductor->direccion }}</td>
                                                <td class="px-3 py-4 text-center whitespace-nowrap  text-white">
                                                    <form action="{{ route('conductors.destroy', $conductor->id) }}" method="POST">
                                                        <a href="{{ route('conductors.show', $conductor->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">
                                                            {{ __('Mostar') }}</a>
                                                        <a href="{{ route('conductors.edit', $conductor->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">
                                                            {{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('conductors.destroy', $conductor->id) }}" class="text-red-600 hover:text-red-900" onclick="event.preventDefault(); confirm('Estas Seguro de eliminar este Conductor?') ? this.closest('form').submit() : false;">
                                                            {{ __('Eliminar') }}</a>
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
