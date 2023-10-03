@php
    $nav_links = [
        [
            'name'   => 'Inicio',
            'route'  => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'image' => '/sidebar/dashboard-blanco.svg',
            'can' => 'dashboard',
            'childs' => []
        ],
        [
            'name'   => 'Catalogo',
            'route'  => route('articles'),
            'active' => request()->routeIs('articles'),
            'image' => '/sidebar/catalogo-blanco.svg',
            'can' => 'articles',
            'childs' => []
        ],
        [
            'name'   => 'Solicitudes',
            'route'  => route('requests'),
            'active' => request()->routeIs('requests'),
            'image' => '/sidebar/solicitudes-blanco.svg',
            'can' => 'dashboard',
            'childs' => []
        ],
        [
            'name'   => 'Inventarios',
            'route'  => route('inventorys'),
            // 'active' => request()->routeIs('inventorys'),
            'active' => (request()->routeIs('inventorys') || request()->routeIs('muestras')),
            'image' => '/sidebar/inventario-blanco.svg',
            'can' => 'dashboard',
            'childs' => [
                ['name'   => 'Articulos',
                'route'  => route('inventorys'),
                'active' => request()->routeIs('inventorys'),
                'can' => 'inventory',           
                ],
                ['name'   => 'Muestras',
                 'route'  => route('muestras'),
                 'active' => request()->routeIs('muestras'),
                 'can' => 'muestras',         
                ],
            ]
        ],
        [
            'name'   => 'Reportes',
            'route'  => route('reports'),
            'active' => (request()->routeIs('reports') || request()->routeIs('reports-expiration') || request()->routeIs('reports-inventory')),
            'image' => '/sidebar/articles2-blanco.svg',
            'can' => 'articles',
            'childs' => [
                ['name'   => 'Solicitudes',
                'route'  => route('reports'),
                'active' => request()->routeIs('reports'),
                'can' => 'articles',                
                ],
                ['name'   => 'Caducidad',
                'route'  => route('reports-expiration'),
                'active' => request()->routeIs('reports-expiration'),
                'can' => 'articles',                
                ],
                ['name'   => 'Inventario',
                'route'  => route('reports-inventory'),
                'active' => request()->routeIs('reports-inventory'),
                'can' => 'articles',                
                ]
            ]
        ],
        [
            'name'   => 'Usuarios',
            'route'  => route('users'),
            'active' => request()->routeIs('users'),
            'image' => '/sidebar/admin-blanco.svg',
            'can' => 'users',
            'childs' => []
        ],
    ]
@endphp

<div @click.away="open = false" class="flex flex-col w-full lg:w-64 text-gray-700 side-bar-invlab dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 lg:border-r" x-data="{ open: false }">
    <div class="flex-shrink-0 px-4 lg:px-8 py-4 flex flex-row items-center border-b-2 border-white">
        <!-- App Title -->
        <img src="/sidebar/logo-invlab-blanco.svg" alt="Logo" class="h-10 w-10 mr-2">
        <a href="{{ route('dashboard') }}" class="text-lg font-semibold tracking-widest text-white text-xl uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">{{ config('app.name', 'Jetbar') }}</a>
        <!-- End App Title -->
        <button class="rounded-lg lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <!-- Sidebar Links -->
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow lg:block px-4 pb-4 lg:pb-0 lg:overflow-y-auto z-10">
        @if(Laravel\Jetstream\Jetstream::hasTeamFeatures())
            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 {{ request()->routeIs('teams.create') ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 hover:bg-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('teams.create') }}">Create Team</a>
            @endcan
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 {{ request()->routeIs('teams.show') ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">Team Settings</a>
        @endif
        @foreach ($nav_links as $nav_link)
            @if(empty($nav_link['childs']) && count($nav_link['childs']) == 0)
                @can($nav_link['can'])
                <a class="flex justify-start items-center px-4 py-2 mt-2 font-semibold text-white text-xl  {{ $nav_link['active'] ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 hover:bg-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{$nav_link['route']}}">
                    <img src="{{$nav_link['image']}}" alt="Logo" class="h-8 w-8 mr-2 mt-0">
                    {{$nav_link['name']}}
                </a>
                @endcan
            @else
                @can($nav_link['can'])
                <a class="flex justify-start items-center px-4 py-2 mt-2 font-semibold text-white text-xl  {{ $nav_link['active'] ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 hover:bg-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-controls="dropdown-example{{$nav_link['name']}}" data-collapse-toggle="dropdown-example{{$nav_link['name']}}">
                    <img src="{{$nav_link['image']}}" alt="Logo" class="h-8 w-8 mr-2 mt-0">
                    {{$nav_link['name']}}
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                
                <ul id="dropdown-example{{$nav_link['name']}}" class="hidden py-2 space-y-2 list-none">
                    @foreach ($nav_link['childs'] as $child)
                        @can($child['can'])
                        <li>
                            <a class="flex justify-center items-center px-4 py-2 mt-2 font-semibold text-white text-xl  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 hover:bg-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{$child['route']}}">{{$child['name']}}</a>
                        </li>
                        @endcan
                    @endforeach
                </ul>
                @endcan
            @endif
        @endforeach

        <x-jet-bar-responsive-links/>

    </nav>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <!-- End Sidebar Links -->
</div>
