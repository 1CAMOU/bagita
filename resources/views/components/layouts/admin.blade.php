<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel=stylesheet>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/admin.js') }}" async></script>

    <title>bagita | Dashboard</title>
</head>

<body class="bg-gray-900 w-screen min-h-screen flex">
    <div class="h-full w-64 border-r border-opacity-10 fixed">
        <nav class="p-6 flex flex-col">
            <a href="/"><h1 class="text-primary font-semibold text-3xl">bagita</h1></a>
        
            <ul class="flex flex-col space-y-2 mt-6 w-full">
                <li class="{{ request()->is('admin/dashboard') ? 'text-gray-200 hover:text-white' : 'text-gray-500 hover:text-gray-200' }} w-full mr-2 md:mr-6 flex items-center space-x-3 transition-colors">
                    <x-icon name="home" />
                    <a href="/admin/dashboard">Dashboard</a>
                </li>

                <li class="w-full text-gray-500 mr-2 md:mr-6 flex items-center space-x-3 hover:text-gray-200 transition-colors">
                    <x-icon name="template" />
                    <a href="/" target="_blank">View the site</a>
                </li>
            </ul>

            <ul class="flex flex-col space-y-2 mt-6 w-full">
                <li class="mr-2 md:mr-6 relative w-full">
                    <span class="{{ request()->is('admin/posts') ? 'text-gray-200 hover:text-white' : 'text-gray-500 hover:text-gray-200' }} transition-colors flex items-center space-x-3">
                        <x-icon name="pencil-alt" />
                        <a href="/admin/posts">Posts</a>
                    </span>
                    
                    <a class="text-gray-500 hover:text-primary transition-colors absolute text-xl top-0 right-0" href="/admin/post/create">+</a>
                </li>
            </ul>
        </nav>
    </div>

    <main class="ml-72 px-12 py-8 w-full">
        {{ $slot }}
    </main>

    @if (session()->has('toast')) 
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="px-40 py-6 fixed text-center bottom-6 left-1/2 -translate-x-1/2 transform flex justify-center items-center bg-secondary rounded-md shadow-lg z-highest">
            <x-icon name="shield-check" class="text-primary-light mr-6" />
            <p class="text-primary-light mt-1">{!! session('toast') !!}</p>
        </div>
    @endif 
</body>

</html>