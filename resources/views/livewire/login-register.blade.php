<x-form.panel>
    <!-- Title -->
    <div class="flex items-center justify-center mb-4">
        <x-icon name="locked" class="text-secondary" />
        <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Log In</h2>
        @if($registerForm)
            <p class="text-secondary text-lg ml-auto mt-1 hidden sm:block">or <span class="underline cursor-pointer" wire:click="register">log in</span></p>
        @else
            <p class="text-secondary text-lg ml-auto mt-1 hidden sm:block">or <span class="underline cursor-pointer" wire:click="register">sign up</span></p>
        @endif
    </div>

    @if (session()->has('message'))
        <div class="mb-4">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div wire:offline>
        <div class="fixed left-0 bottom-0 p-6 bg-primary rounded-md drop-shadow-xl flex text-secondary">
            <x-icon name="sad" class="mr-4" />
            Connection to bagita failed!
        </div>
    </div>

    @if($registerForm)
        <!-- Name -->
        <div>
            <x-form.label for="name" :value="__('Name')" />
            <x-form.input type="text" wire:model="name" maxlength="35" class="block mt-1 w-full" />
            @error('name') <span class="">{{ $message }}</span>@enderror
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-form.label for="username" :value="__('Username')" />
            <x-form.input type="text" wire:model="username" maxlength="35" class="block mt-1 w-full" />
            @error('username') <span class="">{{ $message }}</span>@enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-form.label for="email" :value="__('Email')" />
            <x-form.input type="email" wire:model="email" maxlength="255" class="block mt-1 w-full" />
            @error('email') <span class="">{{ $message }}</span>@enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-form.label for="password" :value="__('Password')" />
            <x-form.input type="password" wire:model="password" class="block mt-1 w-full" />
            @error('password') <span class="">{{ $message }}</span>@enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-form.label for="password_confirmation" :value="__('Confirm Password')" />
            <x-form.input type="password" wire:model="password_confirmation" class="block mt-1 w-full" />
            @error('password_confirmation') <span class="">{{ $message }}</span>@enderror
        </div>

        <div class="flex flex-col items-center">
            <div class="mt-8 w-full">
                <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white" wire:click.prevent="registerStore">Sign up</button>
            </div>

            <div class="mt-4 sm:hidden block">
                <p class="w-full py-4 rounded-md text-secondary">or <span class="underline cursor-pointer" wire:click.prevent="register">log in</span></p>
            </div>
        </div>
    @else
        <form>
            <!-- Email Address -->
            <div class="mt-4">
                <x-form.label for="email" :value="__('Email')" />
                <x-form.input type="email" wire:model="email" maxlength="255" class="block mt-1 w-full" />
                @error('email') <span class="">{{ $message }}</span>@enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.label for="password" :value="__('Password')" />
                <x-form.input type="password" wire:model="password" class="block mt-1 w-full" />
                @error('password') <span class="">{{ $message }}</span>@enderror
            </div>

            <div class="flex flex-col items-center">
                <div class="mt-8 w-full">
                    <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white" wire:click.prevent="login">Sign in</button>
                </div>

                <div class="mt-4 sm:hidden block">
                    <p class="w-full py-4 rounded-md text-secondary">or <span class="underline cursor-pointer" wire:click.prevent="register">sign in</span></p>
                </div>

                @if (Route::has('password.request'))
                    <a class="mt-6 text-sm text-secondary hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    @endif
</x-form.panel>
