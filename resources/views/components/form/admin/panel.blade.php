@props(['icon', 'title'])

<div {!! $attributes->merge(['class' => 'w-full mt-6 px-10 py-6 overflow-hidden border border-opacity-10 sm:rounded-md']) !!}>
    <!-- Title -->
    <div class="flex items-center mb-4">
        <x-icon name="{{ $icon }}" class="text-primary" />
        <h2 class="text-primary font-medium text-xl ml-5 mt-1">{{ $title }}</h2>
    </div>

    {{ $slot }}
</div>