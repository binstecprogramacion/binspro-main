{{-- Use: <x-button type="submit" style="primary"> --}}

@props(['type' => 'submit', 'style' => 'access', 'text' => 'Default Text', 'to' => '#'])
{{-- block w-full py-4 font-medium text-center text-gray-800 bg-gray-100 hover:bg-gray-200 --}}
{{-- px-3 py-2 rounded-md text-gray-800 bg-white shadow-md hover:bg-blue-600 hover:text-white transition duration-200 --}}
@php
    $styles = [
        'access' => 'bg-cta hover:bg-opacity-90 focus:bg-opacity-90 active:bg-cta focus:ring-cta text-white capitalize',
        'request' => 'bg-btn border border-gray-300 text-gray-700 hover:bg-opacity-90 focus:bg-opacity-90 focus:ring-btn capitalize',
        'just_text' => ' text-textbtn focus:ring-textbtn ',
    ];
    
    $baseClasses = 'flex items-center justify-center px-4 py-2  rounded-md  text-base focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';
    
    $class = $baseClasses . ' ' . ($styles[$style] ?? $styles['access']);
@endphp

{{-- button or type --}}
@if ($type == 'btn-icon')
    <a {{ $attributes->merge(['class' => $class]) }}" href="{{ $to }}">
        {{ $slot }}
        {{ $text }}
    </a>
@else
    <input type="{{ $type }}" href="{{ $to }}" value="{{ $text }}"
        {{ $attributes->merge(['class' => $class]) }}>
@endif
