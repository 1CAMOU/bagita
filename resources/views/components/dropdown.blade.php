@props(['trigger'])

<div x-data="{ show: false }" class="w-full md:w-auto" @click.away="show = false">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 md:absolute bg-gray-150 w-full rounded-b-md shadow-lg" style="display: none;">
        {{ $slot }}        
    </div>

    <x-icon name="arrow-down" class="absolute top-4 right-6 pointer-events-none" />
</div>