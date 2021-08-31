<x-layout>
    <x-post-featured-card :post="$posts->first()" />
        
    <div class="lg:grid lg:grid-cols-3 lg:gap-20 lg:gap-y-10 max-w-screen-xl mx-auto">
        @foreach ($posts->skip(1) as $post)
            <x-post-card :post="$post" />
        @endforeach  
    </div>
</x-layout>