<div>
    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
        <div class="grid grid-cols-3 gap-4 items-center">
            <input class="bg-dark-700 focus:outline-none focus:ring-1 focus:ring-dark-100 rounded text-sm text-dark-300 placeholder-dark-400 bg-dark-100 pl-2 py-2" 
                    type="text" 
                    wire:model="search"
                    placeholder="Buscar por subtítulo..." />
                    @livewire('site.slides.crear-slide-component')
        </div>
    </div>

    <div class="flex-col space-y-4 px-4 py-5">

        <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">imagen</th>
                    <th class="px-6 py-3">estado</th>
                    <th class="px-6 py-3">detalle</th>
                    <th class="px-6 py-3">acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($slides as $slide)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        @if(strstr($slide->imagen, '/', true) == 'img')
                        <img src="{{ asset($slide->imagen) }}" alt="">
                        @else
                        <img src="{{ asset(Storage::url($slide->imagen)) }}" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        @if ($slide->estado == 'Borrador')
                        <button wire:click="statusBorrador({{$slide->id}})" type="button" class="inline-block px-6 pt-2.5 pb-2 bg-yellow-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out flex align-center">
                            {{ $slide->estado }}
                          </button>
                        @else
                        <button wire:click="statusPubicar({{$slide->id}})" type="button" class="inline-block px-6 pt-2.5 pb-2 bg-green-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out flex align-center">
                            @if ($slide->posicion == 'active')
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" class="w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                              </svg>
                            @endif
                            {{ $slide->estado }}
                          </button>
                        @endif
                        <br>
                        <small>({{ $slide->created_at->diffForHumans() }})</small>
                    </td>
                    <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white whitespace-nowrap  uppercase">
                        @if($slide->pretitulo) <span class="bg-red-500 shadow-lg shadow-red-500/50 px-4">{{ $slide->pretitulo }}</span> <br> @endif
                        {{ $slide->titulo }}  <br>
                        {{ $slide->subtitulo }}
                    </td>
                    <td>
                        <div class="flex-col space-y-4 px-4 py-5">
                            <div>
                                @livewire('site.slides.editar-slide-component', ['slide'=>$slide], key($slide->id))
                            </div>
                            <div>
                                @if($slide->estado == 'Borrador') 
                                @livewire('site.slides.eliminar-slide-component', ['slide'=>$slide], key($slide->id))
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 justify-center">
                    <td colspan="6" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap text-center">
                        No se encontraron slides que concuerden con las criterios de busqueda...
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{ $slides->links() }}
        </div>

    </div>
</div>
