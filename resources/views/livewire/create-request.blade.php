<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Registrar
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Nueva Solicitud de Artículo </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Nombre del artículo"/>
                    <select id="gender" class="block mt-1 w-full" wire:model="name">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Aguja Vacuteiner Adulto 2G
                        </option>
                        <option value="2">
                            Glicemia Enzimatica AA Liquida 250 ML
                        </option>
                        <option value="3">
                            Carpeta Manila Carta 8 1/2
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="name"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Cantidad"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="quantity"/>
                <x-jet-input-error for="quantity"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Departamento"/>
                <select id="gender" class="block mt-1 w-full" wire:model="department">
                    <option value="">
                            
                    </option>
                    <option value="1">
                        Producción
                    </option>
                    <option value="2">
                        Logistica
                    </option>
                </select>
                <x-jet-input-error for="department"/>
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