<article class="h-48 max-w-5xl bg-gray-150 rounded-md mx-auto w-full p-6">
    <div class="flex flex-wrap h-full relative">
        <div class="w-12 md:w-20 mr-6 md:h-full">
            <a href="">
                <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" class="rounded-md w-full" alt="">
            </a>
        </div>

        <header class="mt-1 md:mt-0 md:w-3/4 h-12">
            <a href="" class="font-bold text-secondary">{{ $comment->author->username }}</a>
            <p class="text-xs text-secondary">Posted 
                <time>
                    {{ $comment->created_at->format('F j, Y, g:i a') }}
                </time>
            </p>
        </header>

        <p class="text-secondary md:w-3/4 mt-2 md:mt-0 md:absolute md:top-14 md:left-27">
            {{ $comment->body }}
        </p>
    </div>
</article>