<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre_completo" :value="__('Nombrecompleto')"/>
        <x-text-input id="nombre_completo" name="nombreCompleto" type="text" class="mt-1 block w-full" :value="old('nombreCompleto', $conductor?->nombreCompleto)" autocomplete="nombreCompleto" placeholder="Nombrecompleto"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombreCompleto')"/>
    </div>
    <div>
        <x-input-label for="cedula" :value="__('Cedula')"/>
        <x-text-input id="cedula" name="cedula" type="text" class="mt-1 block w-full" :value="old('cedula', $conductor?->cedula)" autocomplete="cedula" placeholder="Cedula"/>
        <x-input-error class="mt-2" :messages="$errors->get('cedula')"/>
    </div>
    <div>
        <x-input-label for="telefono" :value="__('Telefono')"/>
        <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full" :value="old('telefono', $conductor?->telefono)" autocomplete="telefono" placeholder="Telefono"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefono')"/>
    </div>
    <div>
        <x-input-label for="direccion" :value="__('Direccion')"/>
        <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', $conductor?->direccion)" autocomplete="direccion" placeholder="Direccion"/>
        <x-input-error class="mt-2" :messages="$errors->get('direccion')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>