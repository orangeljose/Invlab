<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Registrar
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Nueva Solicitud de Artículo </x-slot>
        <x-slot name="content">
            <x-authentication-invlab-card2>
                {{-- <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot> --}}
        
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> --}}
        
                        <x-jet-button class="ml-4">
                            {{ __('Registrar') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-authentication-invlab-card2>
        </x-slot>
        <x-slot name="footer">
            {{-- <button wire:click="$set('open', false)" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Cancelar
            </button>

            <button wire:click="save" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Guardar
            </button> --}}
        </x-slot>
        
    </x-jet-dialog-modal>

</div>