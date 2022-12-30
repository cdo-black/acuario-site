<div>
    <button type="button" wire:click="$set('open', true)" class="cursor-pointer inline-flex items-center rounded-md border border-transparent bg-yellow-400 px-2 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
        <i class="fas fa-edit"></i>
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title"  class="text-center">
            Actualizar los datos del slide {{$slide->titulo}}
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="imagen" class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                <div>
                    <span class="font-bold">¡Cargando Imagen!</span> Espere un momento mientras se procesamos la imagen.
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4 mb-3">
                @if ($imagen)
                <img src="{{ $imagen->temporaryUrl() }}">
                @elseif(strstr($slide->imagen, '/', true) == 'img')
                <img src="{{ asset($slide->imagen) }}" alt="">
                @else
                <img src="{{ asset(Storage::url($slide->imagen)) }}" alt="">
                @endif
            </div>
            <!-- Pretítulo -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="pretitulo" value="Pretítulo" />
                <x-jet-input type="text" class="mt-1 block w-1/2" wire:model="slide.pretitulo" />
                <x-jet-input-error for="slide.pretitulo" class="mt-2" />
            </div>

            <!-- Título -->
            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="titulo" value="Título" />
                <x-jet-input type="text" class="mt-1 block w-full" wire:model="slide.titulo" />
                <x-jet-input-error for="slide.titulo" class="mt-2" />
            </div>

            <!-- Subtítulo -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="subtitulo" value="Subtítulo" />
                <x-jet-input id="subtitulo" type="text" class="mt-1 block w-full" wire:model="slide.subtitulo" />
                <x-jet-input-error for="slide.subtitulo" class="mt-2" />
            </div>

            <!-- Parrafo -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="parrafo" value="Parrafo" />
                <textarea name="parrafo" id="parrafo" rows="5" class="form-control mt-1 block w-full" wire:model="slide.parrafo"></textarea>
                <x-jet-input-error for="slide.parrafo" class="mt-2" />
            </div>

            <!-- Imagen -->
            <div class="col-span-6 sm:col-span-4 mt-3 ">
                <x-jet-label for="imagen" value="Imagen" />
                <x-jet-input id="imagen" type="file" class="form-control mt-1 block w-full" wire:model="imagen" />
                <x-jet-input-error for="slide.imagen" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-4 disabled:opacity-35" wire:click="updateSlide" wire:loading.attr="disabled" wire:target="updateSlide, imagen">
                Actualizar Slide
            </x-jet-danger-button>
            <span wire:loading wire:target="updateSlide">cargando ...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
