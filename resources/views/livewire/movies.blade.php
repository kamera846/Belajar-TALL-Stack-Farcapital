<div x-data="movies" class="py-3">

    <div x-init="getMovies()"></div>

    {{-- Grid Wrapper --}}
    <div class="grid grid-cols-3 gap-3">

        {{-- Grid Item --}}
        <livewire:movies-item />
        {{-- Grid Item --}}
        <livewire:movies-item />
        {{-- Grid Item --}}
        <livewire:movies-item />

    </div>
</div>