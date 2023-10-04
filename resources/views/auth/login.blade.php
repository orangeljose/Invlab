<x-guest-layout>
    <div class="bg-cover login-background">
        <x-authentication-invlab-card>
            {{-- <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot> --}}

            <div class="mt-10">
                <h1 class="text-center text-xl font-semibold px-6 pt-3">INVLAB</h1>
                <h2 class="text-center text-xm pb-2 border-b-2 border-black">Sistema de gestion de inventario</h2>
                <div class="flex justify-center py-4">
                    <img src="/sidebar/login-icon.svg" alt="Logo" class="h-20 w-20 mt-2">
                </div>
                <h6 class="text-center mb-8">Por favor ingrese sus datos.</h6>

            </div>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                    </label>
                </div>

                <div class="flex flex-col items-center mb-2">

                    <x-jet-button class="mb-8">
                        {{ __('Iniciar sesión') }}
                    </x-jet-button>

                    {{-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                    @endif --}}

                </div>
            </form>
        </x-authentication-invlab-card>
    </div>
</x-guest-layout>
