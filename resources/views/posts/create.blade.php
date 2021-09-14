<x-layout>
    <x-form.panel>
        <!-- Title -->
        <div class="flex items-center mb-4">
            <x-icon name="click" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Create Blog Post</h2>
        </div>

        <!-- Session Status -->
        <x-form.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/admin/post" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-form.label for="title" :value="__('Title')" />

                <x-form.input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Excerpt -->
            <div class="mt-4">
                <x-form.label for="excerpt" :value="__('Excerpt')" />

                <x-form.textarea id="excerpt" class="block mt-1 w-full" name="excerpt" :value="old('excerpt')" required />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-form.label for="body" :value="__('Body')" />

                <x-form.textarea id="body" class="block mt-1 w-full" name="body" :value="old('body')" required />
            </div>

            <!-- Category -->
            <div class="mt-4">
                <x-form.label for="category_id" :value="__('Category')" />

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
                <x-form.label for="slug" :value="__('Slug')" />

                <x-form.input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required />
            </div>

            <!-- Thumbnail -->
            <div class="mt-4">
                <x-form.label for="thumbnail" :value="__('Thumbnail')" />

                <x-form.input id="thumbnail" class="block mt-1 w-full bg-white" type="file" name="thumbnail" :value="old('thumbnail')" required />
            </div>

            <div class="mt-8 w-full">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Publish</button>
            </div>
        </form>
    </x-form.panel>
</x-layout>