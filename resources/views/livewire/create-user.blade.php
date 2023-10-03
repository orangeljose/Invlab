<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Registrar
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Usuario </x-slot>
        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="name"/>
                <x-jet-input-error for="name"/>
            </div>

            <div class="mb-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model="email"/>
                <x-jet-input-error for="email"/>
            </div>

            <div class="mb-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" wire:model="password"/>
                <x-jet-input-error for="password"/>
            </div>

            <div class="mb-4">
                <x-jet-label for="password" value="{{ __('Rol') }}"/>
                    <select id="role" class="block mt-1 w-full" wire:model="role">
                        <option value="">
                            
                        </option>
                        @foreach ($roles as $role)
                            <option value={{$role->id}}>
                                {{$role->name}}
                            </option>
                        @endforeach
                    </select>
                <x-jet-input-error for="role"/>
            </div>

        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Cancelar
            </button>

            <button wire:click="save" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Guardar
            </button>
        </x-slot>
        
    </x-jet-dialog-modal>

</div>