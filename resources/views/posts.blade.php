<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{ $post->id }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
</x-layout>