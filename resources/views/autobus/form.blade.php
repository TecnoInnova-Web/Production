<div class="space-y-6">
    
    <div>
        <x-input-label for="marca" :value="__('Marca')"/>
        <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full" :value="old('marca', $autobus?->marca)" autocomplete="marca" placeholder="Marca"/>
        <x-input-error class="mt-2" :messages="$errors->get('marca')"/>
    </div>
    <div>
        <x-input-label for="modelo" :value="__('Modelo')"/>
        <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full" :value="old('modelo', $autobus?->modelo)" autocomplete="modelo" placeholder="Modelo"/>
        <x-input-error class="mt-2" :messages="$errors->get('modelo')"/>
    </div>
    <div>
        <x-input-label for="placa" :value="__('Placa')"/>
        <x-text-input id="placa" name="placa" type="text" class="mt-1 block w-full" :value="old('placa', $autobus?->placa)" autocomplete="placa" placeholder="Placa"/>
        <x-input-error class="mt-2" :messages="$errors->get('placa')"/>
    </div>
    <div>
        <x-input-label for="color" :value="__('Color')"/>
        <x-text-input id="color" name="color" type="text" class="mt-1 block w-full" :value="old('color', $autobus?->color)" autocomplete="color" placeholder="Color"/>
        <x-input-error class="mt-2" :messages="$errors->get('color')"/>
    </div>
    <div>
        <x-input-label for="capacidad" :value="__('Capacidad')"/>
        <x-text-input id="capacidad" name="capacidad" type="text" class="mt-1 block w-full" :value="old('capacidad', $autobus?->capacidad)" autocomplete="capacidad" placeholder="Capacidad"/>
        <x-input-error class="mt-2" :messages="$errors->get('capacidad')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>