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
                    <th class="px-6 py-3">
                        <button wire:click="sortBy('updated_at')" type="button" class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 cursor-pointer ...">
                            Fecha
                        </button>
                    </th>
                    <th class="px-6 py-3">acciones</th>
                </tr>
            </thead>
            <tbody class=" text-center">
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
                        <span class="bg-yellow-500 shadow-lg shadow-yellow-500/50 px-4 py-2 rounded-lg">{{ $slide->estado }}</span>
                        @else
                        <span class="bg-green-500 shadow-lg shadow-green-500/50 px-4 py-2 rounded-lg">{{ $slide->estado }}</span>
                        @endif
                        
                    </td>
                    <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white whitespace-nowrap  uppercase">
                        @if($slide->pretitulo) <span class="bg-red-500 shadow-lg shadow-red-500/50 px-4">{{ $slide->pretitulo }}</span> <br> @endif
                        {{ $slide->titulo }}  <br>
                        {{ $slide->subtitulo }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        {{ Carbon\Carbon::parse($slide->created_at)->format('d-m-Y') }} <br>
                        <small>({{ $slide->created_at->diffForHumans() }})</small>
                    </td>
                    <td>
                        edit
                    </td>
                </tr>
                @empty
                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 justify-center">
                    <td colspan="6" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap text-center">
                        No se encontraron usuarios...
                    </td>
                </tr> --}}
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{ $slides->links() }}
        </div>

    </div>
</div>
