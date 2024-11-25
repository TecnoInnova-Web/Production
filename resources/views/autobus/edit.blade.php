<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }} Autobus
        </h2>
    </x-slot>

    <div class="mt-8 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">{{ __('Editar') }} El Autobus</h1>
                        </div>
                        <div class="mmt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('autobuses.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-center text-sm font-semibold text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:ring-indigo-500">
                                {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="max-w-lg mx-auto">
                           
                                <form method="POST" action="{{ route('autobuses.update', $autobus->id) }}"  role="form" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    @csrf
                                    @include('autobus.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
