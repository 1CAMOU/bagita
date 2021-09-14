<x-layouts.default>
    <x-form.panel>
        <!-- Title -->
        <div class="flex items-center justify-center mb-4">
            <x-icon name="locked" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Sign Up</h2>
            <a href="/login" class="text-secondary text-lg ml-auto mt-1 hidden sm:block">or <span class="underline">log in</span></a>
        </div>

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-form.label for="name" :value="__('Name')" />

                <x-form.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            
            <!-- Username -->
            <div class="mt-4">
                <x-form.label for="username" :value="__('Username')" />

                <x-form.input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-form.label for="email" :value="__('Email')" />

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.label for="password" :value="__('Password')" />

                <x-form.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-form.label for="password_confirmation" :value="__('Confirm Password')" />

                <x-form.input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Sign Up</button>
            </div>

            <div class="mt-4 sm:hidden block">
                <a href="/login" class="w-full py-4 rounded-md text-secondary">or <span class="underline">log in</span></a>
            </div>
        </form>
    </x-form.panel>
</x-layouts.default>
