@props(['post'])

<div class="hover:bg-gray-150 transition-colors rounded-md flex flex-col justify-between p-3 md:h-100">
    <a href="/post/{{ $post->slug }}">
        <article class="">
            <img class="w-full h-52 rounded-sm object-cover mb-4" src="{{ asset('storage/' . $post->thumbnail) }}" alt="Post Thumbnail">
            <div>
                <a href="/?category={{ $post->category->slug }}" class="text-blue-700 mt-3 font-medium break">{{ $post->category->name }}</a>
                <h2 class="text-secondary font-semibold text-lg mb-3 h-12">{{ $post->title }}</h2>
                <div class="text-secondary text-sm pb-5 space-y-4 h-16">{{ substr($post->excerpt, 0, 100) . '...' }}</div>
            </div>
        </article>
    </a>

    <a href="/?author={{ $post->author->username }}">
        <div class="flex items-center p-3">
            <img class="mr-6 rounded-sm" src="/images/unknown-author.jpeg" alt="Author" width=50 height=50>
            <div class="">
                <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                <p class="text-gray-400 text-sm"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
            </div>
        </div>
    </a>
</div>
