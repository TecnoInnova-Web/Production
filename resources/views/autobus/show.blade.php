<x-app-layout>
  @section('title', 'Administrador / Autobuses')

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $autobus->name ?? __('Show') . " " . __('Autobus') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
              <div class="w-full">

                  <div class="sm:flex sm:items-center justify-between mb-4">
                      <div class="sm:flex-auto">
                          <h1 class="text-base font-semibold leading-6 text-white">
                              {{__('Mostrar') }} Autobus</h1>
                          <p class="mt-2 text-sm text-white">Detalles de {{ __('Autobus') }}.</p>
                      </div>
                      <div class="mt-4 sm:mt-0 sm:flex-none">
                          <a type="button" href="{{ route('autobuses.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                              {{ __('Volver') }}
                          </a>
                      </div>
                  </div>

                  <div class="mt-8 px-4">
                      <div class="max-w-full mx-auto">
                          <table class="min-w-full divide-y divide-gray-200">
                              <thead class="dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                                  <tr>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">No</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Marca</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Placa</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Modelo</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Color</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Capacidad</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Última Actualización</th>
                                      <th scope="col" class="px-6 py-4 text-center font-semibold">Fecha Creación</th>
                                  </tr>
                              </thead>
                              <tbody class="dark:bg-gray-900 divide-y divide-gray-200">
                                  <tr>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->id }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->marca }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->placa }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->modelo }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->color }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->capacidad }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->updated_at->format('d/m/y') }}</td>
                                      <td class="px-6 py-4 text-center whitespace-nowrap text-white">{{ $autobus->created_at->format('d/m/Y') }}</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
