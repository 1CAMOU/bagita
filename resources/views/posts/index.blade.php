<x-layout>
    @include ('posts._header')

    @if ($posts->count())
        <x-post-featured-card :post="$posts->first()" />
            
        @if ($posts->count() > 1)
            <x-post-grid :posts="$posts" />
        @endif
    @endif
</x-layout>