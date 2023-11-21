<x-guest-layout>
    {{-- <x-authentication-card> --}}
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <x-validation-errors class="mb-4" />

        {{-- <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form> --}}
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="/dist/output.css" rel="stylesheet" />
            <title>Register Page</title>
        </head>
        <body>
            <div class="max-w-sm mx-auto bg-slate-50 min-h-screen px-4">
                <div class="flex justify-center pt-20">
                    <img src="logo.png" alt="" width="150" />
                </div>
                <div class="pt-10">
                    <h1 class="text-[26px] text-slate-800 font-medium">Selamat datang</h1>
                    <p class="text-sm text-slate-600">Silahkan Masuk dengan akun Amikom</p>
                </div>
                <form class="pt-10" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <x-label for="name" />
                        <x-input id="name" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-" type="text" name="name" :value="old('name')"  required autofocus autocomplete="name" placeholder="Nama Mahasiswa" />
                    </div>
                    <div class="mb-3">
                        <x-label for="nim" />
                        <x-input id="nim" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="text" name="nim" :value="old('nim')" required autocomplete="nim" placeholder="Nomor Induk Mahasiswa / Nomor Induk Karyawan" />
                    </div>
                    
                    <div class="mb-3">
                        <x-label for="email" />
                        <x-input id="email" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Mahasiswa" />
                    </div>
                    <div class="mb-3">
                        <x-label for="password"/>
                        <x-input id="password" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    </div>
                    <div class="mb-3">
                        <x-label for="password_confirmation"/>
                        <x-input id="password_confirmation" class="bg-gray-50 border-2 border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                    
                    <button type="submit"
                    class="bg-[#4c17a7] text-white text-xs font-bold rounded-lg w-full py-4 uppercase">
                    Daftar
                    </button>
                </form>
            </div>
        </body>
    </html>
    {{-- </x-authentication-card> --}}
</x-guest-layout>
