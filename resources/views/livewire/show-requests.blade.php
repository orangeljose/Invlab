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
                <x-search-field :name="'Fecha fianl'" :model="'fecha_end'" :type="'date'"/>
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
                    Glicemia Enzimatica AA Liquida 250 ML
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
                    <x-jet-danger-button wire:click="$emit('deleteRequest')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  
                </x-jet-bar-table-data>
            </tr>
    {{-- </template> --}}
    </x-jet-bar-table-mod>

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