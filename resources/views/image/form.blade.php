<div class="space-y-6">
    <div>
        <x-input-label for="filename" :value="__('Filename')"/>
        <x-text-input id="filename" name="image" type="file" class="mt-1 block w-full" :value="old('filename', $image?->filename)" autocomplete="filename" placeholder="Filename"/>
        <x-input-error class="mt-2" :messages="$errors->get('filename')"/>
    </div>
    <div>
        <x-input-label for="path" :value="__('Path')"/>
        <x-text-input id="path" name="path" type="text" class="mt-1 block w-full" :value="old('path', $image?->path)" autocomplete="path" placeholder="Path" readonly/>
        <x-input-error class="mt-2" :messages="$errors->get('path')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
