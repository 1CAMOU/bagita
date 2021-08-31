<x-layout>
    <article class="flex flex-col md:flex-row justify-center my-12">
        <aside class="flex w-full mb-16 md:mb-0 md:w-auto flex-col items-center mr-24">
            <img class="" src="/images/content-post.png" alt="Post Thumbnail">
            <p class="text-gray-400 text-sm mt-4"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
            <div class="flex items-center mt-6">
                <img class="mr-6" src="/images/author.png" alt="Author" width=50 height=50>
                <div>
                    <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                    <p class="text-gray-400 text-sm">{{ $post->author->username }}</p>
                </div>
            </div>
        </aside>

        <section class="w-full md:w-1/2">
            <h4 class="text-blue-700 font-medium">{{ $post->category->name }}</h4>
            <h2 class="text-secondary font-semibold text-lg mb-6">{{ $post->title }}</h2>

            <p class="text-secondary">
                {{ $post->body }}
            </p>
        </section>
    </article>
    {{-- <article>
        <h1>{{ $post->title }}</h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            <p>{!! $post->body !!}</p>
        </div>
    </article>

    <a href="/"><- Go Back</a> --}}
</x-layout>