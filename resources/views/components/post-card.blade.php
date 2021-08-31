@props(['post'])

<a href="/post/{{ $post->slug }}">
    <article class="w-full md:w-95 hover:bg-gray-100 transition-colors p-3 rounded-md flex flex-col justify-center">
        {{-- TODO --}}
        <img class="" src="/images/content-post.png" alt="Post Thumbnail">
        <div>
            <h4 class="text-blue-700 mt-3 font-medium">{{ $post->category->name }}</h4>
            <h2 class="text-secondary font-semibold text-lg mb-3">{{ $post->title }}</h2>
            <p class="text-secondary text-sm pb-5">{{ $post->excerpt }}</p>
            <div class="flex items-center">
                <img class="mr-6" src="/images/author.png" alt="Author">
                <div class="">
                    <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                    <p class="text-gray-400 text-sm"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
                </div>
            </div>
        </div>
    </article>
</a>