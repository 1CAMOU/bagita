<x-layout>
    <x-auth-card>
        <!-- Title -->
        <div class="flex items-center mb-4">
            <x-icon name="click" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Create Blog Post</h2>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/admin/post">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Excerpt -->
            <div class="mt-4">
                <x-label for="excerpt" :value="__('Excerpt')" />

                <x-textarea id="excerpt" class="block mt-1 w-full" name="excerpt" :value="old('excerpt')" required />
            </div>

            <!-- Body -->
            <div class="mt-4">
                <x-label for="body" :value="__('Body')" />

                <x-textarea id="body" class="block mt-1 w-full" name="body" :value="old('body')" required />
            </div>

            <!-- Category -->
            <div class="mt-4">
                <x-label for="category_id" :value="__('Category')" />

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
                <x-label for="slug" :value="__('Slug')" />

                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required />
            </div>
            
            <div class="mt-8 w-full">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Publish</button>
            </div>
        </form>
    </x-auth-card>
</x-layout>