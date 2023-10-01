<x-jet-bar-container>

    <x-jet-bar-table-mod :headers="['Buscar Usuario','','']"
    :sort="['', '', '', '']">
        <tr class="hover:bg-gray-50">
            <x-jet-bar-table-data>
                <x-search-field :name="'Código'" :model="'code'" :type="'number'"/>                                
            </x-jet-bar-table-data>
            <x-jet-bar-table-data>
                <x-search-field :name="'Nombre Usuario'" :model="'name'" :type="'text'"/>
            </x-jet-bar-table-data>
            <x-jet-bar-table-data/>

        </tr>

        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-500">
                @livewire('create-user')
            </td>               
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    <x-jet-bar-table-mod :headers="['Código', 'Nombre', 'email', 'Role', '']"
    :sort="['', '', '', '', '' ]">
        @foreach ($users as $user)
            <tr class="hover:bg-gray-50">
                <x-jet-bar-table-data>
                    {{$user->id}}
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    {{$user->name}}
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    {{$user->email}}
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    {{$user->id}}
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <x-jet-danger-button wire:click="$emit('deleteUser', {{$user->id}})">
                        <x-jet-bar-icon type="trash" fill />
                    </x-jet-danger-button>
                </x-jet-bar-table-data>

            </tr>
        @endforeach

    {{-- </template> --}}
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