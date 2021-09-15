@props(['trigger'])

<div x-data="{ show: false }" {{ $attributes(['class' => "w-full relative md:w-auto"]) }} @click.away="show = false">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 md:absolute bg-gray-700 w-full mt-2 -ml-2 rounded-b-md shadow-lg max-h-52" style="display: none;">
        {{ $slot }}        
    </div>

    <x-icon name="arrow-down" class="absolute top-4 right-6 pointer-events-none" />
</div>