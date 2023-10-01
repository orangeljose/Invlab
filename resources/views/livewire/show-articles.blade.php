<x-jet-bar-container>

    <x-jet-bar-table-mod :headers="['Busqueda Artículo','','','']"
    :sort="['', '', '', '']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Código'" :model="'code'" :type="'number'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre'" :model="'name'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
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
        <x-jet-bar-table-mod :headers="['Código', 'Nombre', 'Lote', 'Tipo', 'Unidad','Min Stock', 'Max Stock', '']"
            :sort="['id', 'name', 'batch', 'type', 'unit','min_stock', 'max_stock', '']">
            
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
                            {{$item->batch}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->type}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->unit}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->min_stock}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>
                            {{$item->max_stock}}
                        </x-jet-bar-table-data>

                        <x-jet-bar-table-data>

                            <button wire:click="edit({{$item}})" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
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
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label value="Tipo del artículo"/>
                    <select id="type" class="block mt-1 w-full" wire:model="article.type">
                        <option value="">
                            
                        </option>
                        <option value="Insumo">
                            Insumo
                        </option>
                        <option value="Material">
                            Material
                        </option>
                        <option value="Material">
                            Material
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="article.type"/>
            </div>
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Marca del artículo"/>
                    <select id="brand" class="block mt-1 w-full" wire:model="article.brand">
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
                <x-jet-input-error for="article.brand"/>
            </div>
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Unidad de Presentación"/>
                    <select id="unit" class="block mt-1 w-full" wire:model="article.unit">
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
                <x-jet-input-error for="article.unit"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Min Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="article.min_stock"/>
                <x-jet-input-error for="article.min_stock"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Max Stock"/>
                <x-custom-input :type="'number'" class="w-full" wire:model="article.max_stock"/>
                <x-jet-input-error for="article.max_stock"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open_edit', false)" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Cancelar
            </button>

            <button wire:click="update" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Actualizar
            </button>

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
