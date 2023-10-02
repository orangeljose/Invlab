<x-jet-bar-container>

    <x-jet-bar-table-mod :headers="['Busqueda Solicitud','','']"
    :sort="['', '', '', '']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Nro Solicitud'" :model="'code'" :type="'number'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Fecha inicial'" :model="'fecha_ini'" :type="'date'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Fecha final'" :model="'fecha_end'" :type="'date'"/>
            </x-jet-bar-table-data>
        </tr>

        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-500">
                @livewire('create-request')
            </td>   
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Nro Solicitud', 'Nombre Articulo', 'Marca', 'Unidad', 'Cantidad', 'Fecha realizada', 'Estado', 'Dpto', '']"
    :sort="['', '', '', '', '', '', '', '', '']">
    
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Aguja Vacuteiner Adulto 2G
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Greiner
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pieza
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Producción
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>

                    <x-jet-danger-button wire:click="$emit('deleteRequest')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0002
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Glicemia Enzimatica AA
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    weiner
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pieza
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Producción
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>

                    <x-jet-danger-button wire:click="$emit('deleteRequest')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0003
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Carpeta Manila Carta 8 1/2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pointerr
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pieza
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Producción
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>
                    
                    <x-jet-danger-button wire:click="$emit('deleteRequest')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  
                </x-jet-bar-table-data>
            </tr>
    {{-- </template> --}}
    </x-jet-bar-table-mod>

    <x-jet-dialog-modal wire:model="open_edit">

        <x-slot name="title"> Actualizar estado de Solicitud</x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Nombre del artículo"/>
                    <select id="gender" class="block mt-1 w-full" wire:model="name">
                        <option value="Aguja Vacuteiner Adulto 2G">
                            Aguja Vacuteiner Adulto 2G
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
                <x-custom-input :type="'number'" class="w-full" value=5/>
                <x-jet-input-error for="quantity"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Departamento"/>
                <select id="gender" class="block mt-1 w-full" wire:model="department">
                    <option value="Producción">
                        Producción 
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
            <div class="mb-4">
                <x-jet-label value="Estado"/>
                <select id="gender" class="block mt-1 w-full" wire:model="department">
                    <option value="Pendiente">
                        Pendiente 
                    </option>
                    <option value="1">
                        Pendiente
                    </option>
                    <option value="2">
                        Aprobado
                    </option>
                    <option value="2">
                        Rechazado
                    </option>
                </select>
                <x-jet-input-error for="department"/>
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

        Livewire.on('deleteRequest', () => {
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

                    // Livewire.emitTo('show-articles','delete', articleId);

                    Swal.fire(
                    'Borrado!',
                    'La solicitud ha sido eliminada.',
                    'success'
                    )
                }
            })

        });

    </script>
    @endpush
</x-jet-bar-container>