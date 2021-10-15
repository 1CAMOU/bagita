<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel=stylesheet>

    <script src="//unpkg.com/alpinejs" defer></script>

    <title>bagita | Installer</title>
</head>

<body class="bg-gray-50">
    <h1 class="text-secondary font-semibold text-3xl text-center mt-12">bagita</h1>
    <p class="text-secondary text-xl text-center mt-4">Installation Wizard</p>

    <div class="flex justify-center items-center mt-6">
        <div class="bg-primary rounded-full px-6 pt-1 shadow-sm cursor-pointer transition-colors hover:bg-primary-light">
            <p class="text-sm text-secondary">Step 1</p>
        </div>

        <div class="h-1 w-8 bg-gray-100"></div>

        <div class="bg-gray-200 rounded-full px-3 pt-1 shadow-sm cursor-pointer transition-colors hover:bg-gray-100">
            <p class="text-sm text-gray-300">2</p>
        </div>

        <div class="h-1 w-8 bg-gray-100"></div>

        <div class="bg-gray-200 rounded-full px-3 pt-1 shadow-sm cursor-pointer transition-colors hover:bg-gray-100">
            <p class="text-sm text-gray-300">3</p>
        </div>
    </div>
    

    <p class="text-center text-sm p-8 pb-0 w-4/12 rounded-md mx-auto">
        Welcome to bagita! In order to start using and customizing your personal blog, we need to set everything up.
    </p>

    <x-form.panel class="mb-12">
        <!-- Title -->
        <div class="flex items-center justify-center mb-4">
            <x-icon name="collection" class="text-secondary" />
            <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Database Setup</h2>
        </div>

        <!-- Session Status -->
        <x-form.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('install') }}">
            @csrf

            <!-- Host -->
            <div>
                <x-form.label for="host" :value="__('Host')" />

                <x-form.input id="host" class="block mt-1 w-full" type="string" name="host" :value="old('host', '127.0.0.1')" required autofocus autocomplete="host" />
            </div>

            <!-- Port -->
            <div class="mt-4">
                <x-form.label for="port" :value="__('Port')" />

                <x-form.input id="port" class="block mt-1 w-full"
                                type="number"
                                name="port"
                                :value="old('port', '3306')"
                                required autocomplete="port" />
            </div>

            <!-- Database -->
            <div class="mt-4">
                <x-form.label for="database" :value="__('Database')" />

                <x-form.input id="database" class="block mt-1 w-full" type="string" name="database" :value="old('database', 'bagita')" required autocomplete="database" />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-form.label for="username" :value="__('Username')" />

                <x-form.input id="username" class="block mt-1 w-full" type="string" name="username" :value="old('uername', 'root')" required autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-form.label for="password" :value="__('Password')" />

                <x-form.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="password" />
            </div>

            <div class="flex flex-col items-center">
                <div class="mt-8 w-full">
                    <button type="submit" class="bg-secondary w-full py-4 rounded-md text-white">Continue</button>
                </div>

                @if (Route::has('password.request'))
                    <a class="mt-6 text-sm text-secondary hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __("Don't know what a database is?") }}
                    </a>
                @endif
            </div>
        </form>
    </x-form.panel>

    @if (session()->has('toast')) 
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="px-40 py-6 fixed text-center bottom-6 left-1/2 -translate-x-1/2 transform flex justify-center items-center bg-secondary rounded-md shadow-lg z-highest">
            <x-icon name="shield-check" class="text-primary-light mr-6" />
            <p class="text-primary-light mt-1">{!! session('toast') !!}</p>
        </div>
    @endif 
</body>

</html>