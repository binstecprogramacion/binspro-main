@php
    $range = 2; // Define the range of pages you want to show around the current page
    $startPages = range(1, $range);
    $endPages = range($paginator->lastPage() - $range + 1, $paginator->lastPage());
    $currentPage = $paginator->currentPage();
@endphp
<nav class="flex items-center justify-between p-4 mx-10" aria-label="Table navigation">
    <span class="text-sm font-normal text-cta dark:text-gray-400">Mostrando <span
            class="font-semibold text-cta dark:text-white">
            de {{ $incidents->firstItem() }} a {{ $incidents->lastItem() }}
        </span> de <span class="font-semibold text-cta dark:text-white">
            {{ $incidents->total() }}
        </span></span>

    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="text-tittle cursor-not-allowed">
                    <i class="fa-solid fa-angles-left fa-2xs"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="text-tittle hover:text-gray-500">
                    <i class="fa-solid fa-angles-left fa-2xs"></i>
                </a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="mx-1 text-gray-700 cursor-not-allowed">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if (in_array($page, $startPages) || in_array($page, $endPages) || abs($currentPage - $page) < $range)
                            @if ($page == $currentPage)
                                <span class="mx-1 text-gray-500 cursor-not-allowed">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="mx-1 text-gray-700 hover:text-gray-500">
                                    {{ $page }}
                                </a>
                            @endif
                        @elseif (
                            ($page == max($startPages) + 1 && $currentPage > $range + 1) ||
                                ($page == min($endPages) - 1 && $currentPage < $paginator->lastPage() - $range))
                            <span class="mx-1 text-gray-700 cursor-not-allowed">
                                ...
                            </span>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="text-gray-700 hover:text-gray-500">
                    <i class="fa-solid fa-angles-right fa-2xs"></i>
                </a>
            @else
                <span class="text-gray-500 cursor-not-allowed">
                    <i class="fa-solid fa-angles-right fa-2xs"></i>

                </span>
            @endif
        </nav>
    @endif

</nav>
