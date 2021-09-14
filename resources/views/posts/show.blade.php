<x-layout>
    <article class="flex flex-col my-12 md:mx-12 lg:mx-24 relative">
        <div class="flex flex-col md:flex-row justify-between">
            <aside class="flex w-full mb-16 md:mb-0 md:w-auto flex-col items-center mr-24">
                <img class="w-96 rounded-md" src="{{ asset('storage/' . $post->thumbnail) }}" alt="Post Thumbnail">
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
            <h2 class="text-center mt-24 mb-4 font-semibold text-xl text-secondary">Discuss this Topic</h2>

            @auth
                <form method="POST" action="/post/{{ $post->slug }}/comments" class="h-18 max-w-5xl rounded-md mx-auto w-full p-6 border-2 border-gray-150">
                    @csrf

                    <header class="flex items-center">
                        <img src="https://i.pravatar.cc/80?u={{ auth()->id() }}" class="rounded-md mr-6" alt="">
                        <h2 class="text-secondary font-medium">Want to participate?</h2>
                    </header>

                    <div class="mt-4">
                        <textarea name="body" class="w-full rounded-md bg-gray-150 text-sm focus:outline-none focus:ring focus:ring-gray-200 p-6 text-secondary" cols="30" rows="6" required placeholder="What do you want to say?"></textarea>

                        @error('body')
                            <span class="text-xs text-red-500">{{ message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4 flex md:justify-end border-t-2 border-gray-200">
                        <button type="submit" class="mt-6 px-16 pt-3 pb-2 w-full md:w-auto bg-primary rounded-md text-secondary font-semibold hover:bg-primary-light transition">POST</button>
                    </div>
                </form>
            @else
                <a href="/login" class="text-gray-300 hover:text-secondary transition-colors">
                    <div class="h-18 max-w-5xl rounded-md mx-auto w-full p-6 border-2 border-dashed border-gray-150 hover:border-secondary ">
                        <header class="flex items-center">
                            <img src="/images/unknown-author.jpeg" width="80" height="80" class="rounded-md mr-6" alt="">
                            <h2 class="font-medium">Sign in to contribute to the discussion.</h2>
                        </header>
                    </div>
                </a>    
            @endauth
            
            @foreach ($post->comments as $comment)
                <x-comment :comment="$comment" />
            @endforeach
        </section>
        
        <a class="text-gray-400 absolute left-0 -bottom-16 hover:text-gray-600 transition-colors" href="/">⬅ Back to Posts</a>
    </article>
</x-layout>