<div class="space-y-6">
    
    <div>
        <x-input-label for="hora_salida_canada" :value="__('Hora Salida Canada')"/>
        <x-text-input id="hora_salida_canada" name="hora_salida_canada" type="time" class="mt-1 block w-full" :value="old('hora_salida_canada', $horario?->hora_salida_canada)" autocomplete="hora_salida_canada" placeholder="Hora Salida Canada"/>
        <x-input-error class="mt-2" :messages="$errors->get('hora_salida_canada')"/>
        
        </div>
    <div>
        <x-input-label for="hora_llegada_centro" :value="__('Hora Llegada Centro')"/>
        <x-text-input id="hora_llegada_centro" name="hora_llegada_centro" type="time" class="mt-1 block w-full" :value="old('hora_llegada_centro', $horario?->hora_llegada_centro)" autocomplete="hora_llegada_centro" placeholder="Hora Llegada Centro"/>
        <x-input-error class="mt-2" :messages="$errors->get('hora_llegada_centro')"/>
    </div>
    <div>
        <x-input-label for="hora_salida_centro" :value="__('Hora Salida Centro')"/>
        <x-text-input id="hora_salida_centro" name="hora_salida_centro" type="time" class="mt-1 block w-full" :value="old('hora_salida_centro', $horario?->hora_salida_centro)" autocomplete="hora_salida_centro" placeholder="Hora Salida Centro"/>
        <x-input-error class="mt-2" :messages="$errors->get('hora_salida_centro')"/>
    </div>
    <div>
        <x-input-label for="hora_llegada_canada" :value="__('Hora Llegada Canada')"/>
        <x-text-input id="hora_llegada_canada" name="hora_llegada_canada" type="time" class="mt-1 block w-full" :value="old('hora_llegada_canada', $horario?->hora_llegada_canada)" autocomplete="hora_llegada_canada" placeholder="Hora Llegada Canada"/>
        <x-input-error class="mt-2" :messages="$errors->get('hora_llegada_canada')"/>
    </div>
    <div>
        <x-input-label for="autobus_id" :value="__('Autobus Id')"/>
        <select id="autobus_id" name="autobus_id" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('autobus_id', $horario?->autobus_id)" autocomplete="autobus_id" placeholder="Selecciona un Autobus">
            @foreach($autobus as $id => $marca)
                {{-- <option value="null">Seleciona un Conductor</option> --}}
                <option value="{{ $id }}">{{ $marca }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('autobus_id')"/>
    </div>
    <div>
        <x-input-label for="conductor_id" :value="__('Conductor Id')"/>
        <select id="conductor_id" name="conductor_id" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('conductor_id', $horario?->conductor_id)" autocomplete="conductor_id" placeholder="Seleciona Un Conductor">
            @foreach($conductor as $id => $nombreCompleto)
                <option value="{{ $id }}">{{ $nombreCompleto }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('conductor_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>