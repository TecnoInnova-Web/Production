<div class="space-y-6">
    
    <div>
        <x-input-label for="pregunta" :value="__('Pregunta')"/>
        <x-text-input id="pregunta" name="pregunta" type="text" class="mt-1 block w-full" :value="old('pregunta', $pregunta?->pregunta)" autocomplete="pregunta" placeholder="Pregunta"/>
        <x-input-error class="mt-2" :messages="$errors->get('pregunta')"/>
    </div>
    <div>
        <x-input-label for="respuesta" :value="__('Respuesta')"/>
        <x-text-input id="respuesta" name="respuesta" type="text" class="mt-1 block w-full" :value="old('respuesta', $pregunta?->respuesta)" autocomplete="respuesta" placeholder="Respuesta"/>
        <x-input-error class="mt-2" :messages="$errors->get('respuesta')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>