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

        <section class="mt-24 h-48 max-w-5xl bg-gray-150 rounded-md mx-auto w-full p-6">
            <article class="flex flex-wrap h-full relative">
                <div class="w-12 md:w-20 mr-6 md:h-full">
                    <a href="">
                        <img src="https://i.pravatar.cc/200" class="rounded-md w-full" alt="">
                    </a>
                </div>

                <header class="mt-1 md:mt-0 md:w-3/4 h-12">
                    <a href="" class="font-bold text-secondary">John Doe</a>
                    <p class="text-xs text-secondary">Posted 
                        <time>
                            8 months ago
                        </time>
                    </p>
                </header>

                <p class="text-secondary md:w-3/4 mt-2 md:mt-0 md:absolute md:top-14 md:left-27">
                    Neque dolores nesciunt qui facilis delectus natus. Asperiores doloremque fuga facilis in quos. Ipsum id qui dignissimos nihil cupiditate. Est saepe blanditiis magnam voluptatem beatae odio velit.
                </p>
            </article>
        </section>

        <a class="text-gray-400 absolute left-0 -bottom-20 hover:text-gray-600 transition-colors" href="/">⬅ Back to Posts</a>
    </article>
</x-layout>