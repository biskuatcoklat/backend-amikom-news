{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Login Page</title>
    </head>
    <body>
        <div class="max-w-sm mx-auto bg-slate-50 min-h-screen px-4">
            <div class="flex justify-center pt-20">
                <img src="logo.png" alt="" width="150" />
            </div>
            <div class="pt-10">
                <h1 class="text-[26px] text-slate-800 font-medium">Selamat datang</h1>
                <p class="text-sm text-slate-600">
                Silahkan Mendaftar dengan akun Amikom
                </p>
            </div>
            <x-validation-errors class="mb-3" />

            @if (session('status'))
                <div class="mb-3 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form class="pt-10" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-label for="email" />
                    <x-input id="email" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email"/>
                </div>
                <div class="mb-3">
                    <x-label for="nim" />
                    <x-input id="nim" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="text" name="nim" :value="old('nim')" required autofocus autocomplete="username" placeholder="nim"/>
                </div>
                <div class="mb-3">
                    <x-label for="password" />
                    <x-input id="password" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <button type="submit"
                class="bg-[#4c17a7] text-white text-xs font-bold rounded-lg w-full py-4 uppercase">
                Masuk
                </button>
            </form>
        </div>
    </body>
    </html>
</x-guest-layout>