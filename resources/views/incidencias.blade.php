@section('title', 'Incidencias')

<x-app-layout>
    <x-slot name="content">
        <div class="container-sm">
            <div class="row">
                <div class="col-3">
                    @livewire('form')
                </div>
                <div class="col-9 d-flex align-items-center px-5">
                    @livewire('table')
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>
