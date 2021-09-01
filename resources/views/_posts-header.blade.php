<div class="my-4 flex flex-col md:flex-row justify-center">
    {{-- Categories --}}
    <div class="relative flex lg:inline-flex w-full md:w-auto items-center bg-gray-150 rounded-md m-2 text-center text-sm font-medium text-secondary ">
        <x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 px-8 pr-12 w-full md:w-auto focus:outline-none font-medium">
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                </button>
            </x-slot>

            <x-dropdown-item href="/">All</x-dropdown-item>

            @foreach ($categories as $category)
                <x-dropdown-item href="/categories/{{ $category->slug }}" :active='request()->is("categories/{$category->slug}")'>
                    {{ ucwords($category->name) }}
                </x-dropdown-item>
            @endforeach
        </x-dropdown>
    </div>

    {{-- Other Filters --}}
    {{-- <div class="relative flex lg:inline-flex items-center w-full md:w-auto bg-gray-150 rounded-md m-2">
        <select class="flex-1 appearance-none bg-transparent py-2 px-8 pr-12 text-sm font-medium text-secondary cursor-pointer focus:outline-none"><a href="/" class="block text-left leading-6 px-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none transition-colors">All</a>

        @foreach ($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="block text-left leading-6 px-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none transition-colors {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-primary text-white' : '' }}">
                {{ ucwords($category->name) }}
            </a>
        @endforeach
    </div>

            <x-icon name="arrow-down" class="absolute right-6 pointer-events-none" />

            <option value="category" disabled selected>Other Filters</option>

            <option value="personal">Unknown</option>
            <option value="business">Unknown</option>
        </select>

        <x-icon name="arrow-down" class="absolute right-6 pointer-events-none" />
    </div> --}}

    {{-- Search Bar --}}
    <div id="searchbar" class="relative flex lg:inline-flex w-full md:w-auto items-center bg-gray-150 rounded-md m-2">
        <input class="flex-1 appearance-none bg-transparent text-center w-72 pt-3 pb-2 px-16 pl-18 text-sm font-medium text-secondary placeholder-secondary focus:outline-none" type="text" placeholder="Search for a post" onkeyup="searchBarTyping()">

        <x-icon name="search" class="absolute pointer-events-none transform translate-x-12 transition-transform" />
    </div>
</div>