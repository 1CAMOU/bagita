@props(['post'])

<a href="/post/{{ $post->slug }}">
    <article class="max-w-screen-xl mx-auto mb-10 hover:bg-gray-150 transition-colors p-3 rounded-md flex flex-col md:flex-row justify-between">
        {{-- TODO --}}
        <img class="object-cover w-full md:w-3/5 mr-4 lg:w-4/5" src="/images/starter-post.png" alt="Post Thumbnail" width=800 height=370>

        <div class="min-w-96">
            <h4 class="text-primary-dark mt-4 font-medium">{{ $post->category->name }}</h4>
            <h2 class="text-secondary font-semibold text-lg mb-6">{{ $post->title }}</h2>
            <div class="text-secondary text-sm md:pb-6 space-y-4">{!! $post->excerpt !!}</div>
            <div class="flex items-center mt-6">
                <img class="mr-6" src="/images/author.png" alt="Author">
                <div class="">
                    <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                    <p class="text-gray-400 text-sm"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
                </div>
            </div>
        </div>
    </article>
</a>