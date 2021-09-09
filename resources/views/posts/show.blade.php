<x-layout>
    <article class="flex flex-col my-12 md:mx-12 lg:mx-24 relative">
        <div class="flex flex-col md:flex-row justify-between">
            <aside class="flex w-full mb-16 md:mb-0 md:w-auto flex-col items-center mr-24">
                <img class="" src="/images/content-post.png" alt="Post Thumbnail">
                <p class="text-gray-400 text-sm mt-4"><time>{{ $post->created_at->format('M d, Y') }}</time> • {{ $post->readDuration() }} min read</p>
                <a href="/?author={{ $post->author->username }}">
                    <div class="flex items-center mt-6">
                        <img class="mr-6" src="/images/author.png" alt="Author" width=50 height=50>
                        <div>
                            <h5 class="text-secondary font-medium">{{ $post->author->name }}</h5>
                            <p class="text-gray-400 text-sm">{{ $post->author->username }}</p>
                        </div>
                    </div>
                </a>
                
            </aside>
    
            <section class="w-full md:w-1/2">
                <h4 class="text-blue-700 font-medium">{{ $post->category->name }}</h4>
                <h2 class="text-secondary font-semibold text-lg mb-6">{{ $post->title }}</h2>
    
                <div class="text-secondary space-y-4">
                    {!! $post->body !!}
                </div>            
            </section>
        </div>

        <section class="mt-18 space-y-6">
            <h2 class="text-center mt-24 font-semibold text-xl text-secondary">Discuss this Topic</h2>

            <x-comment />
            <x-comment />
        </section>
        
        <a class="text-gray-400 absolute left-0 -bottom-20 hover:text-gray-600 transition-colors" href="/">⬅ Back to Posts</a>
    </article>
</x-layout>