{{-- <div class="table-responsive-sm overflow-x-auto scrollbar-hide">
    <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        {{ $captionHeader }}
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
            {{ $captionBody }}
        </p>
    </caption>
    <table class=" table-auto text-sm text-left caption-top">
        <x-navtools />
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">
                    N°
                </th>
                <th scope="col">
                    <div class="flex items-center">
                        ¿Qué pasó?
                        <a href="#"><i class="fa-solid fa-sort"></i></a>
                    </div>
                </th>
                <th scope="col">
                    <div class="flex items-center">
                        ¿Dónde ocurrio?
                        <a href="#"><i class="fa-solid fa-sort"></i></a>
                    </div>
                </th>
                <th scope="col">
                    <div class="flex items-center">
                        Estado
                        <a href="#"><i class="fa-solid fa-sort"></i></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Opciones</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incidents as $index => $incident)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $incident->location }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incident->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incident->status_id }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> <i
                                class="fa-solid fa-ellipsis-vertical"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $incidents->links('livewire.pagination', ['incidents' => $incidents]) }}

</div> --}}
<div>
    @livewire('search')

    <div>
        <ul>
            @foreach ($data as $key => $item)
                <li>
                    <span>{{ $item }}</span>
                    <button wire:click="remove({{ $key }})">Remove</button>
                </li>
            @endforeach
        </ul>
        <span>{{ $found }}</span>

    </div>


</div>
