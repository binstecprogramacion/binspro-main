@php
    $auth = auth()->check();
@endphp


<div class="row">

    <div class="flex justify-between h-20">
        <h2 class="pl-8 flex items-center">
            {{ $title }}
        </h2>

        <div class="col-2 d-flex align-items-center">

            @if ($auth)
                @include('components.setting')
            @else
                @include('components.access')
            @endif
        </div>
    </div>
</div>
