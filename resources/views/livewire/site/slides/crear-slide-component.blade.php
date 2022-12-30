<div>
    <x-jet-danger-button wire:click="$set('openModal', true)">
        Crear nuevo slide
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="openModal">
        <x-slot name="title">
            Crear nuevo Slide
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="imagen" class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                <div>
                    <span class="font-bold">¡Cargando Imagen!</span> Espere un momento mientras se procesamos la imagen.
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4 mb-3">
                @if ($imagen)
                    Vista previa de la imagen:
                    <img src="{{ $imagen->temporaryUrl() }}">
                @endif
            </div>
            <!-- Pretítulo -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="pretitulo" value="Pretítulo" />
                <x-jet-input id="pretitulo" type="text" class="mt-1 block w-1/2" wire:model="pretitulo" />
                <x-jet-input-error for="pretitulo" class="mt-2" />
            </div>

            <!-- Título -->
            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="titulo" value="Título" />
                <x-jet-input id="titulo" type="text" class="mt-1 block w-full" wire:model="titulo" />
                <x-jet-input-error for="titulo" class="mt-2" />
            </div>

            <!-- Subtítulo -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="subtitulo" value="Subtítulo" />
                <x-jet-input id="subtitulo" type="text" class="mt-1 block w-full" wire:model="subtitulo" />
                <x-jet-input-error for="subtitulo" class="mt-2" />
            </div>

            <!-- Parrafo -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="parrafo" value="Parrafo" />
                <textarea name="parrafo" id="parrafo" rows="6" class="form-control mt-1 block w-full" wire:model="parrafo"></textarea>
                <x-jet-input-error for="parrafo" class="mt-2" />
            </div>

            <!-- Imagen -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="imagen" value="Imagen" />
                <x-jet-input id="imagen" type="file" class="form-control mt-1 block w-full" wire:model="imagen" />
                <x-jet-input-error for="imagen" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('openModal', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-4 disabled:opacity-35" wire:click="saveSlide" wire:loading.attr="disabled" wire:target="saveSlide, imagen">
                Crear Slide
            </x-jet-danger-button>
            <span wire:loading wire:target="saveSlide">cargando ...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
