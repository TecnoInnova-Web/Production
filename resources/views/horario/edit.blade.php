<x-app-layout>
    @section('title', 'Administrador / Horarios');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }} Horario
        </h2>
    </x-slot>

    <div class="mt-8 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Editar') }} el Horario</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('horarios.index') }}" class="items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                                {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                                <form method="POST" action="{{ route('horarios.update', $horario->id) }}"  role="form" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    @csrf
                                    @include('horario.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
