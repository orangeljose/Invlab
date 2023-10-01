<div>

    <a class="btn btn-green" wire:click="$set('open', true)">
        <i class="fas fa-edit"></i>
        {{-- <x-jet-bar-icon type="pencil" fill /> --}}
    </a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title"> Editar el artículo {{$article->name}} </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del artículo"/>                
                <x-custom-input :type="'text'" class="w-full" wire:model="article.name"/>
                <x-jet-input-error for="article.name"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion del artículo"/>                
                <textarea class="form-control w-full" rows="3" wire:model="article.description"></textarea>
                <x-jet-input-error for="article.description"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Fecha de vencimiento"/>
                <x-custom-input :type="'date'" class="w-full" wire:model="article.due_date"/>
                <x-jet-input-error for="article.due_date"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Lote"/>
                <x-custom-input :type="'text'" class="w-full" wire:model="article.batch"/>
                <x-jet-input-error for="article.batch"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="article.stock"/>
                <x-jet-input-error for="article.stock"/>
            </div>
        </x-slot>
            

        <x-slot name="footer">
            <x-jet-secondary-button class="btn-blue" wire:click="$set('open', false)">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>

        </x-slot>
        
    </x-jet-dialog-modal>

</div>
