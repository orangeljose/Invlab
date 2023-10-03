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
                @livewire('create-user', ['roles' => $roles])
            </td>               
            <x-jet-bar-table-data/>
            <x-jet-bar-table-data/>
        </tr>
    </x-jet-bar-table-mod>

    @if($users->count())

        <x-jet-bar-table-mod :headers="['Código', 'Nombre', 'email', 'Role', '']"
        :sort="['id', 'name', 'email', '', '' ]">
            @foreach ($users as $item)
                <tr class="hover:bg-gray-50">
                    <x-jet-bar-table-data>
                        {{$item->id}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{$item->name}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{$item->email}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        @forelse ($item->roles as $role)
                            {{$role->name}}
                        @empty
                            Sin rol
                        @endforelse
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>

                        <button wire:click="edit({{$item}})" class='mx-2 button-invlab-edit inline-flex items-center px-4 py-2 btn-blue border border-gray-300 rounded-md font-semibold text-xm text-white tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'>
                            <x-jet-bar-icon type="pencil" fill />
                        </button>

                        <x-jet-danger-button wire:click="$emit('deleteUser', {{$item->id}})">
                            <x-jet-bar-icon type="trash" fill />
                        </x-jet-danger-button>

                    </x-jet-bar-table-data>

                </tr>
            @endforeach

        {{-- </template> --}}
        </x-jet-bar-table-mod>
        @if($users->hasPages())
        <div class="px-6 py-3">
            {{$users->links()}}
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

        <x-slot name="title"> Editar Usuario </x-slot>
        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="user.name"/>
                <x-jet-input-error for="user.name"/>
            </div>

            <div class="mb-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model="user.email" disabled/>
                <x-jet-input-error for="user.email"/>
            </div>

            <div class="mb-4">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label value="Rol de Usuario"/>
                    <select id="role" class="block mt-1 w-full" wire:model="user.role">
                        <option value="">
                            
                        </option>
                        @foreach ($roles as $role)
                            <option value={{$role->id}}>
                                {{$role->name}}
                            </option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="user.role"/>
                </div>
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

        Livewire.on('deleteUser', userId => {
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

                    Livewire.emitTo('show-users','delete', userId);

                    Swal.fire(
                    'Borrado!',
                    'El usuario ha sido eliminado.',
                    'success'
                    )
                }
            })

        });

    </script>
    @endpush

</x-jet-bar-container>