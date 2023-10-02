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

    <x-jet-bar-table-mod :headers="['Indicadores de Caducidad','','','']"
    :sort="['', '', '', '','']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <a class='mx-2 bg-red-600 inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                </a>
                Caducados
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <a class='mx-2 button-invlab-orange inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                </a>
                Caducados en 15 días
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <a class='mx-2 button-invlab-yellow inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                </a>
                Caduca en 30 días
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <a class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                </a>
                Caduca despues de 30 días
            </x-jet-bar-table-data>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Código', 'Nombre Artículo', 'Lote', 'Stock', 'Fecha Vencimiento', 'Caducidad',]"
    :sort="['', '', '', '', '', '']">
    
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Aguja Vacuteiner Adulto 2G
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    TEST001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    150
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    15-11-2024
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <a class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                    </a>
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
                    TRC001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    50
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    27-08-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <a class='mx-2 bg-red-600 inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                    </a>
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
                    TRC001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    41
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    02-11-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <a class='mx-2 button-invlab-yellow inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                    </a>
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    0004
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Glizerina Enzimática
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    TRC0232
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    13
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    12-10-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <a class='mx-2 button-invlab-orange inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                    </a>
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