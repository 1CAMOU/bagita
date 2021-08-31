@props(['post'])

<a href="/post/{{ $post->slug }}">
    <article class="max-w-screen-xl mx-auto mb-10 hover:bg-gray-100 transition-colors p-3 rounded-md flex justify-between">
        {{-- TODO --}}
        <img class="" src="/images/starter-post.png" alt="Post Thumbnail">

        <div class="w-96">
            <h4 class="text-primary-dark mt-4 font-medium">{{ $post->category->name }}</h4>
            <h2 class="text-secondary font-semibold text-lg mb-6">{{ $post->title }}</h2>
            <p class="text-secondary text-sm pb-8">{{ $post->excerpt }}</p>
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