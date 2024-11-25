<x-app-layout>
    @section('title', 'Administrador / Conductores');

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Conductor
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Create') }} Conductor</h1>
                            <p class="mt-2 text-sm text-white">Agrega un Nuevo {{ __('Conductor') }}.</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('conductors.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                                {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="mt-8 px-4">
                        <div class="max-w-lg mx-auto">
                            
                                <form method="POST" action="{{ route('conductors.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    @include('conductor.form')
                                </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
