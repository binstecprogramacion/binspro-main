{{-- <form class="d-flex align-items-center" x-data="{ open: true }" @click.away="open = false">
    <div class="flex-grow-1 position-relative">
        <input type="text" x-show="open" placeholder="Buscar incidencias" wire:model="input"
            class="form-control w-100 rounded-md border-0 shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 position-absolute end-0">
        <p>{{ $input }}</p>
    </div>
    <button type="submit" class="btn p-0 ms-2" @click="open = true" wire:click="add">
        <i class="fa-solid fa-magnifying-glass fa-beat fa-2xs search-icon"></i>
    </button>
</form> --}}
<div>
    <input type="text" wire:model="input" /> {{ $input }}
    <button wire:click="findValueInArray">find</button>
    <button wire:click="add">Add</button>
</div>
