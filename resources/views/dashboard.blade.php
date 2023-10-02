<x-app-layout>
    
    {{-- <x-slot name="header">
        {{ __('Sistema de gestion de inventario para laboratorios') }}
    </x-slot> --}}

    <div class="flex justify-center mt-8 text-xl text-black font-semibold">
        <h1>Sistema de gestion de inventario para laboratorios.</h1>
    </div>

    <div class="flex justify-center mt-8">
        <img src="{{URL::asset('sidebar/invlab-azul.jpeg')}}">
    </div>

    <x-jet-bar-container>
        {{-- <x-jet-bar-alert text="This is an alert" /> --}}

        <x-jet-bar-stats-container>
            <x-jet-bar-stat-card title="Total clientes" number="234" type="warning" >
                <x-jet-bar-icon type="users" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Muestras Analizadas en el mes" number="178" type="success" >
                <x-jet-bar-icon type="money" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Insumos en stock minimo" number="15" type="info" >
                <x-jet-bar-icon type="cart" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Solicitudes Pendientes" number="35" type="danger" >
                <x-jet-bar-icon type="message" fill />
            </x-jet-bar-stat-card>
        </x-jet-bar-stats-container>

    </x-jet-bar-container>
</x-app-layout>
