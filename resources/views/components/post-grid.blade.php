@props(['posts'])

<div class="md:grid md:grid-cols-2 lg:grid-cols-3 lg:gap-20 md:gap-y-10 max-w-screen-xl mx-auto">
    @foreach ($posts->skip(1) as $post)
        <x-post-card :post="$post" />
    @endforeach  
</div>