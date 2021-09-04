<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 px-8 pr-12 w-full md:w-auto focus:outline-none font-medium">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active='! request("category")'>All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" :active='request("category") == $category->slug'>
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>