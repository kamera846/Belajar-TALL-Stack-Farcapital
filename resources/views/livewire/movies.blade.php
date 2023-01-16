<div x-data="movies" class="py-3">

    <div x-init="getMovies()"></div>

    {{-- Grid Wrapper --}}
    <div class="grid grid-cols-4 gap-3">

        <template x-for="(item, index) in listMovie">

            {{-- Grid Item --}}
            <livewire:movies-item />

        </template>

    </div>
</div>