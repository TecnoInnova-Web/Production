<x-app-layout>
  @section('title', 'Administrador / Preguntas Frecuentes')

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $pregunta->name ?? __('Show') . " " . __('Pregunta') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
              <div class="w-full">
                  <div class="sm:flex sm:items-center justify-between">
                      <div class="sm:flex-auto">
                          <h1 class="text-base font-semibold leading-6 text-white">
                              Detalles de la {{ __('Pregunta Frecuente') }}
                          </h1>
                      </div>
                      <div class="mt-4 sm:mt-0 sm:flex-none">
                          <a type="button" href="{{ route('preguntas.index') }}" class="items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                              {{ __('Volver') }}
                          </a>
                      </div>
                  </div>

                  <div class="mt-8 px-4">
                      <div class="max-w-full mx-auto">
                          <table class="min-w-full divide-y divide-gray-200">
                              <thead class="dark:bg-gray-700 text-xs text-white uppercase tracking-wide">
                                  <tr>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                          Pregunta
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                          Respuesta
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                          Fecha Creación
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                          Última Modificación
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="dark:bg-gray-900 divide-y divide-gray-200">
                                  <tr>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                          {{ $pregunta->pregunta }}
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                          {{ $pregunta->respuesta }}
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                          {{ $pregunta->created_at->format('d/m/y') }}
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                          {{ $pregunta->updated_at->format('d/m/y') }}
                                      </td>
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
