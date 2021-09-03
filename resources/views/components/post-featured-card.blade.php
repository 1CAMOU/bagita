@props(['post'])

<div class="hover:bg-gray-150 transition-colors max-w-screen-xl mx-auto mb-10 rounded-md flex flex-col md:flex-row justify-between md:items-center p-3">
    <a href="/post/{{ $post->slug }}" class="w-full mr-6">
        <img class="object-cover" src="/images/starter-post.png" alt="Post Thumbnail" width=800 height=370>
    </a>

    <div>
        <a href="/post/{{ $post->slug }}" class="w-full md:w-6/12">
            <div class="w-full md:w-95 ml-auto">
                <h4 class="text-primary-dark mt-4 font-medium">{{ $post->category->name }}</h4>
                <h2 class="text-secondary font-semibold text-lg mb-6">{{ $post->title }}</h2>
                <div class="text-secondary text-sm md:pb-6 space-y-4">{!! $post->excerpt !!}</div>
            </div>
        </a>

        <a href="/?author={{ $post->author->username }}">
            <div class="flex items-center mt-6">
                <img class="mr-6" src="/images/author.png" alt="Author">
                <div class="">
                    <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                    <p class="text-gray-400 text-sm"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
                </div>
            </div>
        </a>
    </div>
</div>
