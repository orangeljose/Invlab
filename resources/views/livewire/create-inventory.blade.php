<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Realizar movimiento
    </button>

    {{-- <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Egreso
    </button> --}}

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Movimiento de Inventario </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Nombre del artículo"/>
                    <select id="gender" class="block mt-1 w-full" wire:model="name">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Aguja Vacuteiner Adulto
                        </option>
                        <option value="2">
                            Glicemia Enzimatica AA
                        </option>
                        <option value="3">
                            Carpeta Manila Carta 8 1/2
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="name"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Lote"/>
                <x-custom-input :type="'text'" class="w-full" wire:model="batch"/>
                <x-jet-input-error for="batch"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Cantidad"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="quantity"/>
                <x-jet-input-error for="quantity"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha de vencimiento"/>
                <x-custom-input :type="'date'" class="w-full" wire:model="due_date"/>
                <x-jet-input-error for="due_date"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Acción"/>
                    <select id="location" class="block mt-1 w-full" wire:model="action">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Ingreso
                        </option>
                        <option value="2">
                            Egreso
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="action"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Motivo"/>
                <x-custom-input :type="'text'" class="w-full" wire:model="reason"/>
                <x-jet-input-error for="reason"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Proveedor"/>
                    <select id="provider" class="block mt-1 w-full" wire:model="provider">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Farmacias Saas
                        </option>
                        <option value="2">
                            Laboratorios Perez
                        </option>
                        <option value="3">
                            Clinica Hogar
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="provider"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Ubicación"/>
                    <select id="location" class="block mt-1 w-full" wire:model="location">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Almacén de Producción
                        </option>
                        <option value="2">
                            Almacén de Logística
                        </option>
                        <option value="3">
                            Almacén de Laboratorio
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="location"/>
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