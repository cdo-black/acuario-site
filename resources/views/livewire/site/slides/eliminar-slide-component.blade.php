<div>
    <button type="button" wire:click="$set('open', true)" class="cursor-pointer inline-flex items-center rounded-md border border-transparent bg-red-400 px-2 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2">
        <i class="fas fa-trash-alt"></i>
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title"  class="text-center">
            ¿Estas seguro de eliminar el slide: {{$slide->titulo}}?
        </x-slot>

        <x-slot name="content">
            <h1>Esta eliminación es de forma permanente y sin probabilidade de recuperación!!</h1>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-4 disabled:opacity-35" wire:click="deleteSlide" wire:loading.attr="disabled" wire:target="deleteSlide">
                Eliminar Slide
            </x-jet-danger-button>
            <span wire:loading wire:target="deleteSlide">procesando ...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
