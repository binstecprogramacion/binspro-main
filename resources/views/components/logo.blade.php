@php
    $auth = auth()->check();
@endphp

<a href="{{ $auth ? route('dashboard') : '/' }}">
    <img class="h-10 w-auto block sm:hidden" src="{{ url('favicon.ico') }}" alt="{{ 'Logo' }}" />
    <img class="hidden h-8 w-auto sm:block" src="{{ url('img/logo.png') }}" alt="{{ 'Logo' }}" />
</a>
