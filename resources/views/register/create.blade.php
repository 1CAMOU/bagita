<x-layout>
    <div class="max-w-md mx-auto bg-primary rounded-md shadow-xl py-8 mt-8">
        <form method="POST" action="/register">
            @csrf

            <div class="flex items-center px-4 sm:px-10 justify-center">
                <x-icon name="locked" class="text-secondary"></x-icon>
                <h2 class="text-secondary font-semibold text-xl ml-5 mt-1">Sign Up</h2>
                <a href="/register" class="text-secondary text-lg ml-auto mt-1 hidden sm:block">or <span class="underline">log in</span></a>
            </div>

            <div class="mt-6 flex flex-col px-4 sm:px-10">
                <label class="text-secondary text-lg" for="name">Name</label>
                <input class="w-full rounded-md p-3 pt-4 mt-2 focus:outline-none text-secondary text-sm" type="text" name="name" id="name" placeholder="John Doe" value="{{ old('name') }}" required>
            </div>

            @error('name')
                <p class="text-xs text-red-500 mt-1 sm:px-10">{{ $message }}</p>
            @enderror

            <div class="mt-6 flex flex-col px-4 sm:px-10">
                <label class="text-secondary text-lg" for="username">Username</label>
                <input class="w-full rounded-md p-3 pt-4 mt-2 focus:outline-none text-secondary text-sm" type="text" name="username" id="username" placeholder="johndoe123" value="{{ old('username') }}" required>
            </div>

            @error('username')
                <p class="text-xs text-red-500 mt-1 sm:px-10">{{ $message }}</p>
            @enderror

            <div class="mt-6 flex flex-col px-4 sm:px-10">
                <label class="text-secondary text-lg" for="email">Email</label>
                <input class="w-full rounded-md p-3 pt-4 mt-2 focus:outline-none text-secondary text-sm" type="email" name="email" id="email" placeholder="name@company.com" value="{{ old('email') }}" required>
            </div>

            @error('email')
                <p class="text-xs text-red-500 mt-1 sm:px-10">{{ $message }}</p>
            @enderror

            <div class="mt-6 flex flex-col px-4 sm:px-10">
                <label class="text-secondary text-lg" for="password">Password</label>
                <input class="w-full rounded-md p-3 pt-4 mt-2 focus:outline-none text-secondary text-sm" type="password" name="password" id="password" placeholder="************" required>
            </div>

            @error('password')
                <p class="text-xs text-red-500 mt-1 sm:px-10">{{ $message }}</p>
            @enderror

            <div class="mt-8 px-4 sm:px-10">
                <button class="bg-secondary w-full py-4 rounded-md text-white">Sign Up</button>
            </div>

            <div class="mt-4 px-4 sm:px-10 sm:hidden block">
                <button type="submit" class="w-full py-4 rounded-md text-secondary">or <span class="underline">log in</span></button>
            </div>
        </form>
    </div>
</x-layout>