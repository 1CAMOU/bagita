<x-layouts.admin>
    <h1 class="text-2xl font-medium text-white">Posts</h1>

    <x-form.admin.panel>
        <!-- Title -->
        <div class="flex items-center mb-4">
            <x-icon name="click" class="text-primary" />
            <h2 class="text-primary font-medium text-xl ml-5 mt-1">Create Blog Post</h2>
        </div>

        <!-- Session Status -->
        <x-form.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        {{-- <form method="POST" action="/admin/post" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-form.admin.label for="title" :value="__('Title')" />

                <x-form.input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Excerpt -->
            <div class="mt-4">
                <x-form.admin.label for="excerpt" :value="__('Excerpt')" />

                <x-form.textarea id="excerpt" class="block mt-1 w-full" name="excerpt" :value="old('excerpt')" required />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-form.admin.label for="body" :value="__('Body')" />

                <x-form.textarea id="body" class="block mt-1 w-full" name="body" :value="old('body')" required />
            </div>

            <!-- Category -->
            <div class="mt-4">
                <x-form.admin.label for="category_id" :value="__('Category')" />

                <select id="category_id" class="block mt-1 w-full rounded-md focus:outline-none py-3 px-4 text-secondary font-medium" name="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Slug -->
            <div class="mt-4">
                <x-form.admin.label for="slug" :value="__('Slug')" />

                <x-form.input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required />
            </div>

            <!-- Thumbnail -->
            <div class="mt-4">
                <x-form.admin.label for="thumbnail" :value="__('Thumbnail')" />

                <x-form.input id="thumbnail" class="block mt-1 w-full bg-white" type="file" name="thumbnail" :value="old('thumbnail')" required />
            </div>

            <div class="mt-8 w-full">
                <button type="submit" class="bg-primary-dark hover:bg-primary-light transition-colors w-full py-4 rounded-md text-secondary font-medium">Publish</button>
            </div>
        </form> --}}

        <form method="POST" action="/admin/post" enctype="multipart/form-data">
            @csrf

            <article class="flex flex-col my-8 relative">
                <div class="flex flex-col md:flex-row justify-between">
                    <aside class="flex w-full mb-16 md:mb-0 md:w-auto flex-col items-center mr-24">
                        <img class="w-96 rounded-md" src="/images/unknown-thumbnail.png" alt="Post Thumbnail">
                        <p class="text-gray-300 text-sm mt-4"><time>{{ date('M d, Y') }}</time> • 1 min read</p>
                        <a href="/?author={{ auth()->user()->username }}">
                            <div class="flex items-center mt-6">
                                <img class="mr-6 rounded-md" src="/images/unknown-author.jpeg" alt="Author" width=50 height=50>
                                <div>
                                    <h5 class="text-gray-200 font-medium">{{ auth()->user()->name }}</h5>
                                    <p class="text-gray-400 text-sm">{{ auth()->user()->username }}</p>
                                </div>
                            </div>
                        </a>
                    </aside>
            
                    <section class="w-full md:w-1/2">
                        <h4 class="text-blue-700 font-medium">category</h4>
                        <h2 class="text-gray-200 font-semibold text-lg mb-6">post title</h2>
            
                        <div class="text-gray-200 space-y-4">
                            post body haha
                        </div>            
                    </section>
                </div>
            </article>
        </form>
    </x-form.admin.panel>
</x-layouts.admin>