@props(['disabled' => false, 'value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md focus:outline-none py-3 px-4 text-secondary font-medium']) !!}>{{ $value }}</textarea>