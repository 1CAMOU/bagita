@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-secondary']) }}>
    {{ $value ?? $slot }}
</label>
