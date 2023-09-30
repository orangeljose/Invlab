<div>
    <x-jet-secondary-button wire:click="$set('open', true)">
        Registrar
    </x-jet-secondary-button>

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
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Guardar
            </x-jet-secondary-button>

        </x-slot>
        
    </x-jet-dialog-modal>
</div>
