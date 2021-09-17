<x-layouts.admin>
    <h1 class="text-2xl font-medium text-white">Posts</h1>

    <x-form.admin.panel icon="pencil-alt" title="Edit Blog Post">
        <!-- Session Status -->
        <x-form.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/admin/post/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <!-- Title -->
            <div>
                <x-form.admin.label for="title" :value="__('Title')" />

                <x-form.input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $post->title)" required autofocus />
            </div>

            <!-- Excerpt -->
            <div class="mt-4">
                <x-form.admin.label for="excerpt" :value="__('Excerpt')" />

                <x-form.textarea id="excerpt" class="block mt-1 w-full" name="excerpt" :value="old('excerpt', $post->excerpt)" required />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-form.admin.label for="body" :value="__('Body')" />

                <x-form.textarea id="body" class="block mt-1 w-full" name="body" :value="old('body', $post->body)" required />
            </div>

            <!-- Category -->
            <div class="mt-4">
                <x-form.admin.label for="category_id" :value="__('Category')" />

                <select id="category_id" class="block mt-1 w-full rounded-md focus:outline-none py-3 px-4 text-secondary font-medium" name="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category->id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Slug -->
            <div class="mt-4">
                <x-form.admin.label for="slug" :value="__('Slug')" />

                <x-form.input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug', $post->slug)" required />
            </div>

            <!-- Thumbnail -->
            <div class="mt-4">
                <x-form.admin.label for="thumbnail" :value="__('Thumbnail')" />

                <div class="flex">
                    <div class="flex-1">
                        <x-form.input id="thumbnail" class="block mt-1 w-full bg-white" type="file" name="thumbnail" :value="old('thumbnail', $post->thumbnail)" accept="image/*" />
                    </div>
                    
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Post Thumbnail" class="rounded-xl ml-6" width="100">
                </div>
            </div>

            <div class="mt-8 w-full">
                <button type="submit" class="bg-primary-dark hover:bg-primary-light transition-colors w-full py-4 rounded-md text-secondary font-medium">Update</button>
            </div>
        </form>
    </x-form.admin.panel>
</x-layouts.admin>