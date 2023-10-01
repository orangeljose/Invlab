<x-jet-bar-container>

    <x-jet-bar-table-mod :headers="['Busqueda Artículo','','','']"
    :sort="['', '', '', '']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Código'" :model="'code'" :type="'text'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre'" :model="'name'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Lote'" :model="'batch'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Fecha de vencimiento'" :model="'due_date'" :type="'date'"/>
            </x-jet-bar-table-data>
        </tr>

        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-500">
                @livewire('create-article')
            </td>   
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    @if($articles->count())
        <x-jet-bar-table-mod :headers="['Código', 'Nombre', 'Fecha de vencimiento', 'Lote', 'Stock', '']"
            :sort="['id', 'name', 'due_date', 'batch', 'stock', '']">
            
                @foreach ($articles as $item)
                    <tr class="hover:bg-gray-50">
                        <x-jet-bar-table-data>
                            {{$item->id}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            <div class="text-sm text-gray-900">{{$item->name}}</div>
                            {{-- <div class="text-sm text-gray-500">{{$item->description}}</div> --}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->due_date}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->batch}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->stock}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>

                            <button wire:click="$set('open', false)" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                                <x-jet-bar-icon type="pencil" fill />
                            </button>

                            <x-jet-danger-button wire:click="$emit('deleteArticle', {{$item->id}})">
                                <x-jet-bar-icon type="trash" fill />
                            </x-jet-danger-button>
                            
                        </x-jet-bar-table-data>

                    </tr>
                @endforeach
            {{-- </template> --}}
        </x-jet-bar-table-mod>
        @if($articles->hasPages())
            <div class="px-6 py-3">
                {{$articles->links()}}
            </div>
        @endif
    @else    
        <x-jet-bar-table :headers="['']">
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    <div class="text-sm text-gray-900">No existe ningun registros que coincida</div>                
                </x-jet-bar-table-data>
            </tr>
        </x-jet-bar-table> 
    @endif

    <x-jet-dialog-modal wire:model="open_edit">

        <x-slot name="title"> Editar el artículo </x-slot>
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

            <div>

                <x-jet-secondary-button wire:click="$set('open_edit', false)">
                    Cancel
                </x-jet-secondary-button>
    
                <x-jet-secondary-button wire:click="update" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                    Actualizar
                </x-jet-secondary-button>

            </div>

        </x-slot>
        
    </x-jet-dialog-modal>

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>

            Livewire.on('deleteArticle', articleId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Este cambio no es reversible!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                    }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('show-articles','delete', articleId);

                        Swal.fire(
                        'Borrado!',
                        'El artículo ha sido eliminado.',
                        'success'
                        )
                    }
                })

            });

        </script>
    @endpush

</x-jet-bar-container>
