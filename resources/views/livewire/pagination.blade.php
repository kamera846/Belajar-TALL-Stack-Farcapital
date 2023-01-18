<div class="w-full flex justify-between items-center p-5 rounded overflow-hidden shadow-lg">
    <span>Halaman <strong class="text-red-500">{{ $currentPage }}/{{ $totalPage }}</strong></span>
    <div class="text-white">
        <button class="py-2 px-4 bg-red-500 rounded" wire:click='prevPage'><strong>Prev</strong></button>
        <button class="py-2 px-4 bg-red-500 rounded" wire:click='nextPage'><strong>Next</strong></button>
        
        <div x-init="$wire.on('onPageChange', page => { getMovies(page) })"></div>
    </div>
</div>