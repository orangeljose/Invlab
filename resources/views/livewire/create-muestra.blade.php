<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Registrar
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Muestra </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Tipo Muestra"/>
                    <select id="type" class="block mt-1 w-full" wire:model="type">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Sangre
                        </option>
                        <option value="2">
                            Eses
                        </option>
                        <option value="3">
                            Plasma
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="type"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Análisis"/>
                <x-custom-input :type="'text'" class="w-full" wire:model="analysis"/>
                <x-jet-input-error for="analysis"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha de Recepcion"/>
                <x-custom-input :type="'date'" class="w-full" wire:model="date_taken"/>
                <x-jet-input-error for="date_taken"/>
            </div>


            <div class="mb-4">
                <x-jet-label value="Hora Toma"/>
                <x-custom-input :type="'time'" class="w-full" wire:model="time"/>
                <x-jet-input-error for="time"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Paciente"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="patient"/>
                <x-jet-input-error for="patient"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Ubicación"/>
                    <select id="location" class="block mt-1 w-full" wire:model="location">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Estante 1
                        </option>
                        <option value="2">
                            Estante 2
                        </option>
                        <option value="3">
                            Nevera 1
                        </option>
                        <option value="4">
                            Nevera 2
                        </option>
                        <option value="5">
                            Nevera 3
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="location"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Estado"/>
                    <select id="state" class="block mt-1 w-full" wire:model="state">
                        <option value="">
                            
                        </option>
                        <option value="1">
                            Pendiente
                        </option>
                        <option value="2">
                            Lista
                        </option>
                        <option value="3">
                            Analizando
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="state"/>
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

    {{-- <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Nueva Solicitud de Artículo </x-slot>
        <x-slot name="content">
            <div class="mb-4">
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
                <x-jet-input-error for="name"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Cantidad"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="quantity"/>
                <x-jet-input-error for="quantity"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Departamento"/>
                <select id="department" class="block mt-1 w-full" wire:model="department">
                    <option value="">
                            
                    </option>
                    <option value="1">
                        Producción
                    </option>
                    <option value="2">
                        Mercadeo
                    </option>
                    <option value="2">
                        Finanzas
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
        
    </x-jet-dialog-modal> --}}

</div>