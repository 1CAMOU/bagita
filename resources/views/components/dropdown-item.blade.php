@props(['active' => false])

@php
    $classes = 'block text-left leading-6 px-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none transition-colors';

    if ($active) $classes .= ' bg-primary text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>