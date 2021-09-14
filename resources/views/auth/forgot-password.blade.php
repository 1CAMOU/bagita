<x-layout>
    <x-form.panel>
        <!-- Title -->
        <div class="flex items-center justify-center mb-4">
            <x-icon name="key" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Password Reset</h2>
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-form.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-form.label for="email" :value="__('Email')" />

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Send me an Email</button>
            </div>
        </form>
    </x-form.panel>
</x-layout>
