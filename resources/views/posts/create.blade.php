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
            

            <div class="mt-8 w-full">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Publish</button>
            </div>
        </form>
    </x-auth-card>
</x-layout>