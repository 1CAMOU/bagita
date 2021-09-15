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
                    <aside x-data="imageViewer()" class="flex w-full mb-16 md:mb-0 md:w-auto flex-col items-center mr-24">
                        <input id="thumbnail" class="absolute w-96 h-3/4 cursor-pointer opacity-0" type="file" name="thumbnail" :value="old('thumnbail')" accept="image/*" @change="fileChosen">

                        <template x-if="imageUrl">
                            <img class="w-96 h-40 rounded-md object-cover" :src="imageUrl" alt="Post Thumbnail">
                        </template>

                        <template x-if="!imageUrl">
                            <img class="w-96 h-40 rounded-md object-cover" src="/images/unknown-thumbnail.png" alt="Post Thumbnail">
                        </template>

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
                        <x-admin.dropdown class="hover:bg-gray-800 transition-colors cursor-pointer rounded-t-md p-2 -ml-2"> 
                            <x-slot name="trigger">
                                <button class="focus:outline-none font-medium text-primary-dark pointer-events-none">
                                    Category
                                </button>
                            </x-slot>

                            <div x-data="{ currentCategory: '' }">
                                @foreach (\App\Models\Category::all() as $category)
                                    <x-dropdown-item class="text-white hover:bg-gray-800">
                                        <div @click="currentCategory = {{ $category->id }}">
                                            <template x-if="currentCategory == {{ $category->id }}">
                                                Easy working
                                            </template>

                                            <template x-if="currentCategory != {{ $category->id }}">
                                                Easy lol
                                            </template>
                                            {{ ucwords($category->name) }}
                                        </div>
                                    </x-dropdown-item>
                                @endforeach
                            </div>
                        </x-admin.dropdown>
                        
                        {{-- <select id="category_id" class="block w-full rounded-md focus:outline-none py-3 px-4 text-secondary font-medium" name="category_id" required>
                                    @foreach (\App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ ucwords($category->name) }}
                                        </option>
                                    @endforeach
                        </select> --}}

                        <h2 class="text-gray-200 font-medium text-lg mb-6">Example Post Title</h2>
            
                        <div class="text-gray-200 space-y-4">
                            Example Post Body
                        </div>
                    </section>
                </div>
            </article>

            <div class="mt-12 w-full">
                <button type="submit" class="bg-gray-800 hover:bg-gray-700 hover:text-gray-200 transition-colors w-full py-2 rounded-md text-gray-600 font-medium">Cancel</button>
            </div>

            <div class="mt-3 w-full">
                <button type="submit" class="bg-primary-dark hover:bg-primary-light transition-colors w-full py-2 rounded-md text-secondary font-medium">Publish</button>
            </div>
        </form>
    </x-form.admin.panel>
</x-layouts.admin>