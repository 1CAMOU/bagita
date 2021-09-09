<x-layout>
    <x-auth-card>
        <!-- Title -->
        <div class="flex items-center justify-center mb-4">
            <x-icon name="locked" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Log In</h2>
            <a href="/register" class="text-secondary text-lg ml-auto mt-1 hidden sm:block">or <span class="underline">sign up</span></a>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded-md text-primary checked:bg-primary checked:border-pink-900" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center">
                <div class="mt-8 w-full">
                    <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Sign Up</button>
                </div>
    
                <div class="mt-4 sm:hidden block">
                    <a href="/login" class="w-full py-4 rounded-md text-secondary">or <span class="underline">log in</span></a>
                </div>

                @if (Route::has('password.request'))
                    <a class="mt-6 text-sm text-secondary hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-layout>