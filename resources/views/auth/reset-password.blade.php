<x-guest-layout>
    <x-form.panel>
        <x-slot name="logo">
            <a href="/">
                <a href="/"><h1 class="text-secondary font-semibold text-3xl">bagita</h1></a>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-form.label for="email" :value="__('Email')" />

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.label for="password" :value="__('Password')" />

                <x-form.input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-form.label for="password_confirmation" :value="__('Confirm Password')" />

                <x-form.input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-form.panel>
</x-guest-layout>
