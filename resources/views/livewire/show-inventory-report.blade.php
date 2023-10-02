<x-jet-bar-container>

    <x-jet-bar-table-mod :headers="['Filtro de Busqueda','','','']"
    :sort="['', '', '', '','']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Código'" :model="'code'" :type="'number'"/>    
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre del artículo'" :model="'name'" :type="'text'"/>  
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
                @livewire('create-report')
            </td>   
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Código', 'Nombre Artículo', 'Unidad', 'Ingresos', 'Egresos', 'Stock Final',]"
    :sort="['', '', '', '', '', '']">
    
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Aguja Vacuteiner Adulto 2G
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pieza
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    80
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    20
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    60
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0002
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Glizerina Enzimática
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Botella
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    50
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    20
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    30
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0003
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Carpeta Manila Carta
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Unidad
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    41
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    17
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    24
                </x-jet-bar-table-data>
            </tr>

    </x-jet-bar-table-mod>

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        Livewire.on('generateReport', () => {
            Swal.fire({
                title: 'Generar reporte con la data visualizada?',
                text: "",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, generar!'                
                }).then((result) => {
                if (result.isConfirmed) {

                    // Livewire.emitTo('show-articles','delete', articleId);

                    Swal.fire(
                    'Creado!',
                    'El reporte ha sido generado con exito.',
                    'success'
                    )
                }
            })

        });

    </script>
    @endpush

</x-jet-bar-container>