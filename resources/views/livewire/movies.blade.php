<div x-data="movies">

    {{-- First Fetch Data --}}
    <div x-init="getMovies($wire.searchKey)"></div>

    {{-- Search Component --}}
    <livewire:search-component :params1="$searchKey"/>

    {{-- Loading State --}}
    <div x-show="isLoading" class="w-full bg-red-500 p-5 rounded overflow-hidden shadow-lg">
        <strong class="text-white">Loading...</strong>
    </div>

    {{-- Grid Wrapper --}}
    <div x-show="!isLoading" class="grid grid-cols-4 gap-3 mb-4">

        <template x-for="(item, index) in listMovie">

            {{-- Grid Item --}}
            <livewire:movies-item />

        </template>

    </div>
</div>