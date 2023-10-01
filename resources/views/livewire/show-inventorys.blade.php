<x-jet-bar-container>
    <x-jet-bar-table-mod :headers="['Datos Artículo','','','']"
    :sort="['', '', '', '','']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Codigo'" :model="'code'" :type="'number'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre'" :model="'name'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'N° Lote'" :model="'batch'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Cantidad'" :model="'quantity'" :type="'number'"/>
            </x-jet-bar-table-data>
        </tr>

        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-500">
                @livewire('create-inventory')
            </td>   
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Cod', 'Nombre Articulo', 'Nro Lote', 'Cant', 'Fecha Ingreso', 'Fecha Vencimiento','Acción', 'Motivo', 'Usuario']"
    :sort="['', '', '', '', '', '', '', '', '']">
    
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Aguja Vacuteiner Adulto
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    0001
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    15-10-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Ingreso
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Activo para realizar examenes
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Yovani Nava
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Glicemia Enzimatica AA
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    0002
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    15-10-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Egreso
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Activo para realizar examenes
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Daniel Sequera
                </x-jet-bar-table-data>
            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    3
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Carpeta Manila Carta 8 1/2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    0003
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    5
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    15-10-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Ingreso
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Articulos de Oficina
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Frank Paez
                </x-jet-bar-table-data>
            </tr>

    </x-jet-bar-table-mod>

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
</x-jet-bar-container>
