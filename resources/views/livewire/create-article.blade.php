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
                <x-jet-label value="Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="stock"/>
                <x-jet-input-error for="stock"/>
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
