<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
</x-layout>