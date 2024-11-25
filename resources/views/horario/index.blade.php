<x-app-layout>
    @section('title', 'Administrador / Horarios');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Horarios') }}</h1>
                            <p class="mt-2 text-sm text-white">Lista de los {{ __('Horarios') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('horarios.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                                {{ __('Agregar ') }}
                            </a>
                            <a type="button" href="{{ route('horario.report') }}" targe="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-green-800 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-green-500">
                                {{ __('Report pdf') }}
                              </a>
                        </div>
                    </div>
                    <div class="mt-4 px-4">
                        {!! $horarios->withQueryString()->links() !!}
                    </div>
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="flex text-center min-w-full py-2 align-middle">
                                <table class="w-full table-auto divide-y divide-gray-200 dark:bg-gray-800">
                                    <thead class="dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                                        <tr>
                                        <th scope="col" class="px-3 py-4 text-center font-semibold">No</th>
                                        
									<th scope="col" class="px-3 py-4 text-center font-semibold">Hora Salida Canada</th>
									<th scope="col" class="px-3 py-4 text-center font-semibold">Hora Llegada Centro</th>
									<th scope="col" class="px-3 py-4 text-center font-semibold">Hora Salida Centro</th>
									<th scope="col" class="px-3 py-4 text-center font-semibold">Hora Llegada Canada</th>
									<th scope="col" class="px-3 py-4 text-center font-semibold">Autobus Id</th>
									<th scope="col" class="px-3 py-4 text-center font-semibold">Conductor Id</th><th scope="col" class="px-3 py-4 text-center font-semibold">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-grey-600">
                                    @foreach ($horarios as $horario)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ ++$i }}</td>
                                            
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->hora_salida_canada }}</td>
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->hora_llegada_centro }}</td>
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->hora_salida_centro }}</td>
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->hora_llegada_canada }}</td>
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->autobus->marca }}</td>
										<td class="px-3 py-4 text-center whitespace-nowrap  text-white">{{ $horario->conductor->nombreCompleto }}</td>

                                            <td class="px-3 py-4 text-center whitespace-nowrap  text-white">
                                                <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST">
                                                    <a href="{{ route('horarios.show', $horario->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">{{ __('Mostrar') }}</a>
                                                    <a href="{{ route('horarios.edit', $horario->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">{{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('horarios.destroy', $horario->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Estas seguro de eliminar este horario?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
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