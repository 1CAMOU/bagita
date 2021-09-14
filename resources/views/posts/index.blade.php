<x-layouts.default>
    @include ('posts._header')

    @if ($posts->count())
        <x-post.featured-card :post="$posts->first()" />
            
        @if ($posts->count())
            <x-post.grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No Posts found! Please try again later.</p>
        @endif
    @endif
</x-layouts.default>