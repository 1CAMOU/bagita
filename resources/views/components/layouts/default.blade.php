<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel=stylesheet>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/searchbar.js') }}" defer></script>

    <title>bagita</title>
</head>

<body class="bg-gray-50">
    <div class="bg-gradient-to-tr from-primary-light to-primary-dark w-full pb-12 shadow-md">
        <nav class="p-6 flex flex-col md:flex-row items-center">
            <a href="/"><h1 class="text-secondary font-semibold text-3xl">bagita</h1></a>
        
            <ul class="flex mt-4 md:mt-0 md:ml-24">
                <li class="text-secondary font-medium mr-2 md:mr-6"><a href="/">Home</a></li>

                @admin
                    <li class="text-secondary font-medium mr-2 md:mr-6"><a href="/admin/dashboard">Dashboard</a></li>
                @endadmin
            </ul>
        
            <div class="md:ml-auto mt-8 md:mt-0 flex flex-col md:flex-row items-center">
                @auth
                    <form method="POST" action="/logout" class="mr-2 md:mr-6">
                        @csrf
                        <button type="submit" class="text-secondary font-medium">Logout</button>
                    </form>
                @else
                    <a href="/login" class="text-secondary font-medium mr-2 md:mr-6">Login</a>
                @endauth
                
                <a class="bg-gray-50 px-6 pt-2 pb-1 rounded-md text-secondary font-semibold" href="#newsletter">SUBSCRIBE</a>
            </div>
        </nav>
        
        <h2 class="text-white font-semibold text-2xl text-center mt-4">Welcome to bagita</h2>
        <h3 class="text-white text-2xl text-center">Freedom of speech. For everyone.</h3>
    </div>

    <main class="p-6">
        {{ $slot }}
    </main>

    <div id="newsletter" class="m-6 bg-gray-100 py-14 rounded-md flex justify-center items-center w-auto mb-12 md:mb-6">
        <div class="flex flex-col justify-center items-center w-full">
            <svg class="mb-4" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M57 3.56072C56.9997 2.95368 56.8443 2.35679 56.5485 1.82669C56.2527 1.29659 55.8264 0.850862 55.31 0.531799C54.7936 0.212736 54.2042 0.0309214 53.5978 0.0036085C52.9914 -0.0237044 52.3881 0.104389 51.8451 0.375736L24.0932 14.2486H10.6875C7.853 14.2486 5.13459 15.3746 3.1303 17.379C1.126 19.3833 0 22.1018 0 24.9364C0 27.771 1.126 30.4895 3.1303 32.4939C5.13459 34.4982 7.853 35.6243 10.6875 35.6243H11.685L17.9942 54.5632C18.2306 55.2729 18.6843 55.8902 19.2911 56.3275C19.8979 56.7649 20.627 57.0002 21.375 57H24.9375C25.8823 57 26.7885 56.6247 27.4566 55.9565C28.1247 55.2884 28.5 54.3822 28.5 53.4374V37.826L51.8451 49.4971C52.3881 49.7685 52.9914 49.8966 53.5978 49.8693C54.2042 49.8419 54.7936 49.6601 55.31 49.3411C55.8264 49.022 56.2527 48.5763 56.5485 48.0462C56.8443 47.5161 56.9997 46.9192 57 46.3121V3.56072Z" fill="#31E981"/>
            </svg>
            <h3 class="text-xl md:text-2xl text-secondary font-medium text-center break-words">Stay in touch with the latest posts</h3>
            <h4 class="text-md md:text-lg text-secondary text-center">Promise to keep the inbox clean. No spam.</h4>

            <form method="POST" action="/newsletter" class="w-11/12 md:w-96 h-auto md:h-9 relative mt-6 flex flex-col md:flex-row bg-transparent md:bg-gray-200">
                @csrf
                
                <svg class="absolute left-3 top-3" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.00299072 1.884L7.99999 5.882L15.997 1.884C15.9674 1.37444 15.7441 0.895488 15.3728 0.545227C15.0015 0.194965 14.5104 -9.35847e-05 14 3.36834e-08H1.99999C1.48958 -9.35847e-05 0.998438 0.194965 0.627168 0.545227C0.255899 0.895488 0.0325948 1.37444 0.00299072 1.884Z" fill="#383E66" fill-opacity="0.6"/>
                    <path d="M16 4.11804L8 8.11804L0 4.11804V10C0 10.5305 0.210714 11.0392 0.585786 11.4143C0.960859 11.7893 1.46957 12 2 12H14C14.5304 12 15.039   1 11.7893 15.4142 11.4143C15.7893 11.0392 16 10.5305 16 10V4.11804Z" fill="#383E66" fill-opacity="0.6"/>
                </svg>
                <input class="w-full h-full pt-2 pb-1 pl-10 pr-4 bg-gray-200 md:bg-transparent focus:outline-none" type="email" name="email" placeholder="Your email address">
                <button type="submit" class="bg-primary rounded-md px-4 pt-4 pb-3 mt-4 md:mt-0 md:py-0 md:pt-1 md:pb-0 font-semibold text-secondary align-middle">SUBSCRIBE</button>
            </form>
        </div>
    </div>

    @if (session()->has('toast')) 
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="px-40 py-6 fixed text-center bottom-6 left-1/2 -translate-x-1/2 transform flex justify-center items-center bg-secondary rounded-md shadow-lg z-highest">
            <x-icon name="shield-check" class="text-primary-light mr-6" />
            <p class="text-primary-light mt-1">{!! session('toast') !!}</p>
        </div>
    @endif 
</body>

</html>