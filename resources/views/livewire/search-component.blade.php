<div class="search-container items-center flex mb-5">

    <input
        wire:model.lazy='searchKey'
        type="text"
        placeholder="ketik judul sebuah movie..."
        class="mt-1 mr-2 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
    />

    {{-- Alpine Method --}}
    {{-- <button x-on:click="getMovies($wire.searchKey)" class="bg-red-500 rounded-md text-white px-5 py-2">
        <strong>Search</strong>
    </button> --}}

    {{-- Emit Method --}}
    <button wire:click='searchTrigger' class="bg-red-500 rounded-md text-white px-5 py-2">
        <strong>Search</strong>
    </button>
    
    <div x-init="$wire.on('search-trigger', params => { getMovies(params) })"></div>
</div>