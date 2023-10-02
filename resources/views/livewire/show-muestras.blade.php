<x-jet-bar-container>
    <x-jet-bar-table-mod :headers="['Datos de Muestras','','','']"
    :sort="['', '', '', '','']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Nro Muestra'" :model="'code'" :type="'number'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre'" :model="'name'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Cedula paciente'" :model="'ced'" :type="'number'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data/>
        </tr>

        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-500">
                @livewire('create-muestra')
            </td>   
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Nro', 'Tipo Muestra', 'Análisis', 'Fecha recepción', 'Hora toma', 'Paciente','Ubicación', 'Estado']"
    :sort="['', '', '', '', '', '', '', '']">
    
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Sangre
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Hematología completa
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    08:20:55
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    23300330
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Nevera 1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Sangre
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Hematología completa
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    08:20:55
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    22270387
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Nevera 2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Sangre
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Hematología completa
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    08:20:55
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    10847117
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Nevera 2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Terminado
                </x-jet-bar-table-data>

            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Sangre
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Hematología completa
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    29-09-2023
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    08:20:55
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    12020768
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Nevera 2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

            </tr>

    </x-jet-bar-table-mod>

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
</x-jet-bar-container>
