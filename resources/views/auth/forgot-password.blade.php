<x-layout>
    <x-auth-card>
        <!-- Title -->
        <div class="flex items-center justify-center mb-4">
            <x-icon name="key" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Password Reset</h2>
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Send me an Email</button>
            </div>
        </form>
    </x-auth-card>
</x-layout>
