<x-app-layout>
  @section('title', 'Administrador / Conductores');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $conductor->name ?? __('Show') . " " . __('Conductor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white ">
                                {{ __('Mostrar') }} Conductor</h1>
                            <p class="mt-2 mb-6 text-sm text-white">Detalles del {{ __('Conductor') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('conductors.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500"> 
                                {{ __('Volver') }}</a>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class= "dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                              Nombre Completo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                              Cedula
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                              Telefono
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Direccion
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Creado
                              </th>
                          </tr>
                        </thead>
                        <tbody class="dark:bg-gray-900 divide-y divide-gray-200">
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                              {{ $conductor->nombreCompleto }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                              {{ $conductor->cedula }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                              {{ $conductor->telefono }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                {{ $conductor->direccion->format('d/m/y') }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $conductor->created_at->format('d/m/y') }}
                              </td>
                              
                          </tr>
                        </tbody>
                      </table>
                    {{-- <div class="mt-8 px-4">
                        <div class="max-w-lg mx-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
                                        
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Nombrecompleto</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $conductor->nombreCompleto }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Cedula</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $conductor->cedula }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Telefono</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $conductor->telefono }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Direccion</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $conductor->direccion }}</dd>
                                </div>

                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
