<div class="my-4 flex flex-col md:flex-row justify-center">
    {{-- Categories --}}
    <div class="relative flex lg:inline-flex w-full md:w-auto items-center bg-gray-150 rounded-md m-2 text-center text-sm font-medium text-secondary ">
        <x-category-dropdown />
    </div>

    {{-- Search Bar --}}
    <div id="searchbar" class="relative flex lg:inline-flex w-full md:w-auto items-center bg-gray-150 rounded-md m-2">
        <form method="GET" action="/" class="w-full">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            <input class="flex-1 appearance-none bg-transparent md:text-center w-full md:w-72 pt-3 pb-2 px-16 pl-20 md:pl-18 text-sm font-medium text-secondary placeholder-secondary focus:outline-none" type="text" name="search" value="{{ request('search') }}" placeholder="Search for a post" onkeyup="searchBarTyping()">
        </form>

        <x-icon name="search" class="absolute pointer-events-none transform translate-x-12 transition-transform" />
    </div>
</div>