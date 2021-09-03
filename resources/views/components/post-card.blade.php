@props(['post'])

<div class="hover:bg-gray-150 transition-colors rounded-md flex flex-col justify-center">
    <a href="/post/{{ $post->slug }}">
        <article class="md:w-95 p-3">
            {{-- TODO --}}
            <img class="" src="/images/content-post.png" alt="Post Thumbnail">
            <div>
                <h4 class="text-blue-700 mt-3 font-medium">{{ $post->category->name }}</h4>
                <h2 class="text-secondary font-semibold text-lg mb-3">{{ $post->title }}</h2>
                <div class="text-secondary text-sm pb-5 space-y-4">{!! $post->excerpt !!}</div>
            </div>
        </article>
    </a>
    
    <a href="/author/{{ $post->author->username }}">
        <div class="flex items-center p-3">
            <img class="mr-6" src="/images/author.png" alt="Author">
            <div class="">
                <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                <p class="text-gray-400 text-sm"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
            </div>
        </div>
    </a>
</div>
