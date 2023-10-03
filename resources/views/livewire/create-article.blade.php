<div>
    <button wire:click="$set('open', true)" class='button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
        Registrar
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Registrar Nuevo Artículo </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del artículo"/>                
                <x-custom-input :type="'text'" class="w-full" wire:model="name"/>
                <x-jet-input-error for="name"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion del artículo"/>                
                <textarea class="form-control w-full" rows="3" wire:model="description"></textarea>
                <x-jet-input-error for="description"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Fecha de vencimiento"/>
                <x-custom-input :type="'date'" class="w-full" wire:model="due_date"/>
                <x-jet-input-error for="due_date"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Lote"/>
                <x-custom-input :type="'text'" class="w-full" wire:model="batch"/>
                <x-jet-input-error for="batch"/>
            </div>
            <div class="mb-4">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Tipo del artículo"/>
                    <select id="type" class="block mt-1 w-full" wire:model="type">
                        <option value="">
                            
                        </option>
                        <option value="Insumo">
                            Insumo
                        </option>
                        <option value="Material">
                            Material
                        </option>
                        <option value="Reactivo">
                            Reactivo
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="type"/>
            </div>
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Marca del artículo"/>
                    <select id="brand" class="block mt-1 w-full" wire:model="brand">
                        <option value="">
                            
                        </option>
                        <option value="Labtest">
                            Labtest
                        </option>
                        <option value="Egens">
                            Egens
                        </option>
                        <option value="Jaffer">
                            Jaffer
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="brand"/>
            </div>
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Unidad de Presentación"/>
                    <select id="unit" class="block mt-1 w-full" wire:model="unit">
                        <option value="">
                            
                        </option>
                        <option value="Pieza">
                            Pieza
                        </option>
                        <option value="Caja">
                            Caja
                        </option>
                        <option value="Botella">
                            Botella
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="unit"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Min Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="min_stock"/>
                <x-jet-input-error for="min_stock"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Max Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="max_stock"/>
                <x-jet-input-error for="max_stock"/>
            </div>
        </x-slot>
            

        <x-slot name="footer">
            <button wire:click="$set('open', false)" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Cancelar
            </button>

            <button wire:click="saveArticle" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Guardar
            </button>

        </x-slot>
        
    </x-jet-dialog-modal>
</div>
