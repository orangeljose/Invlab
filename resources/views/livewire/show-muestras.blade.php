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

    <x-jet-bar-table-mod :headers="['Nro', 'Tipo Muestra', 'Análisis', 'Fecha recepción', 'Hora toma', 'Paciente','Ubicación', 'Estado', '']"
    :sort="['', '', '', '', '', '', '', '', '']">
    
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
                    08:20
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

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>
                    
                    <x-jet-danger-button wire:click="$emit('deleteMuestra')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  

                </x-jet-bar-table-data>

            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Heces
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Coprocultivo 
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    28-09-23
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    09:30
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    11110000
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Estante 2
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Analizado
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>
                    
                    <x-jet-danger-button wire:click="$emit('deleteMuestra')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  

                </x-jet-bar-table-data>

            </tr>

            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    3
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Orina
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Urocultivo
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    27-09-23
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    08:02
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    22333000
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Estante 1
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Pendiente
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>

                    <button wire:click="edit()" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                        <x-jet-bar-icon type="pencil" fill />
                    </button>
                    
                    <x-jet-danger-button wire:click="$emit('deleteMuestra')">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>  

                </x-jet-bar-table-data>

            </tr>

    </x-jet-bar-table-mod>

    <x-jet-dialog-modal wire:model="open_edit">

        <x-slot name="title"> Editar Estatus de Muestra </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Tipo Muestra"/>
                    <select id="type" class="block mt-1 w-full" wire:model="type">
                        <option value="Sangre">
                            Sangre
                        </option>
                        <option value="1">
                            Sangre
                        </option>
                        <option value="2">
                            Heses
                        </option>
                        <option value="3">
                            Orina
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="type"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Análisis"/>
                <x-custom-input :type="'text'" class="w-full" value="Hematología completa"/>
                <x-jet-input-error for="analysis"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha de Recepcion"/>
                <x-custom-input :type="'date'" class="w-full" value="2023-09-29"/>
                <x-jet-input-error for="date_taken"/>
            </div>


            <div class="mb-4">
                <x-jet-label value="Hora Toma"/>
                <x-custom-input :type="'time'" class="w-full" value="08:20"/>
                <x-jet-input-error for="time"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Paciente"/>
                <x-custom-input :type="'number'" class="w-full" value="23300330"/>
                <x-jet-input-error for="patient"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Ubicación"/>
                    <select id="location" class="block mt-1 w-full" wire:model="location">
                        <option value="Nevera 1">
                            Nevera 1
                        </option>
                        <option value="1">
                            Estante 1
                        </option>
                        <option value="2">
                            Estante 2
                        </option>
                        <option value="3">
                            Nevera 1
                        </option>
                        <option value="4">
                            Nevera 2
                        </option>
                        <option value="5">
                            Nevera 3
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="location"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Estado"/>
                    <select id="state" class="block mt-1 w-full" wire:model="state">
                        <option value="Pendiente">
                            Pendiente
                        </option>
                        <option value="2">
                            Analizado
                        </option>
                    </select>
                </div>
                <x-jet-input-error for="state"/>
            </div>
        </x-slot>
            

        <x-slot name="footer">
            <button wire:click="$set('open_edit', false)" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Cancelar
            </button>

            <button wire:click="update" class='mx-2 button-invlab inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                Guardar
            </button>

        </x-slot>
        
    </x-jet-dialog-modal>

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        Livewire.on('deleteMuestra', () => {
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
                    'La muestra ha sido eliminada.',
                    'success'
                    )
                }
            })

        });

    </script>
    @endpush
</x-jet-bar-container>
