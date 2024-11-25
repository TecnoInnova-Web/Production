<x-app-layout>
  @section('title', 'Administrador / Horarios');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $horario->name ?? __('Show') . " " . __('Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white ">{{ __('Mostar') }} Horario</h1>
                            <p class="mt-2 text-sm text-white">Detalles del {{ __('Horario') }} seleccionado.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('horarios.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500"> 
                                {{ __('Volver') }}</a>
                        </div>
                    </div><br><br>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class= "dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                              Hora de salida de la canada
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                              Hora de llegada al centro
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Hora de salida del centro

                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Hora de llegada de la canada

                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Marca del Autobus
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Nombre del Conductor
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Fecha creacion
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Fecha Ultima Modificacion
                              </th>
                          </tr>
                        </thead>
                        <tbody class="dark:bg-gray-900 divide-y divide-gray-200">
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                              {{$horario->hora_salida_canada }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                              {{ $horario->hora_llegada_centro }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                              {{$horario->hora_salida_centro }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                {{$horario->hora_llegada_canada }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $horario->autobus->marca }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $horario->conductor->nombreCompleto }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $horario->created_at->format('d/m/y') }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $horario->updated_at->format('d/m/y') }}
                              </td>
                              
                          </tr>
                        </tbody>
                      </table>
                    {{-- <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
                                        
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Hora Salida Canada</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->hora_salida_canada }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Hora Llegada Centro</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->hora_llegada_centro }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Hora Salida Centro</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->hora_salida_centro }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Hora Llegada Canada</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->hora_llegada_canada }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Autobus Id</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->autobus->marca }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Conductor Id</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $horario->conductor->nombreCompleto }}</dd>
                                </div>

                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
