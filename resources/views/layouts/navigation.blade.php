@props(['user'])


<div x-data="{ open: false, collapsed: false }">


    <!-- Sidebar -->
    <div
        :class="{ 'translate-x-0': open, '-translate-x-full': !open, 'w-64': !collapsed, 'w-20': collapsed }"
        class="overflow-y-auto sidebar shadow-lg lg:shadow-none fixed inset-y-0 left-0 bg-white rounded-r-lg py-3 p-1 pt-6 mt-16 lg:bg-inherit dark:bg-gray-800 text-gray-800 dark:text-white dark:lg:bg-inherit transform -translate-x-full lg:translate-x-0 lg:w-64 z-40 transition-transform duration-700 ease-in-out"
        id="sidebar"
    >
        <div class="flex flex-col h-full">
        <!-- Botón de Cerrar (visible solo en móviles) -->
        <button id="closeSidebar" @click="open = false" class="absolute top-0 right-4 p-1 lg:hidden z-50">
        <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- Sección superior -->
        <div class="p-4 bg-gray-100 rounded-xl m-2 shadow-md flex items-center cursor-pointer dark:lg:bg-gray-800 dark:bg-gray-700" id="user_data" title="Ver y editar perfil de usuario">
            <img src="/images/system/empty-profile.png" alt="Foto de perfil del usuario" class="w-12 h-12 rounded-full mr-4 border border-2 border-gray-400" />
            <div>
            <h2 class="text-xl font-semibold">
                <span x-show="!collapsed">@if(isset($user)) {{ $user->name }} @else usuario @endif</span>
                <span x-show="collapsed">@if(isset($user)) {{ substr($user, 0, 1) }} @else ??? @endif</span>
            </h2>
            <p class="text-gray-500 text-sm">@if(isset($user)) {{ $user->email }} @else example@mail.com @endif</p>
            </div>
        </div>

        <!-- Sección central -->
        <nav class="flex-grow py-4 rounded-lg border-slate-200">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fas fa-home mr-3"></i>
                        <span x-show="!collapsed">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects.index') }}" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fa-solid fa-briefcase mr-3"></i>
                        <span x-show="!collapsed">Proyectos</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fa-solid fa-people-group mr-3"></i>
                        <span x-show="!collapsed">Equipos</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fa-solid fa-clipboard-user mr-3"></i>
                        <span x-show="!collapsed">Personal</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('assets.index') }}" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fa-solid fa-screwdriver-wrench mr-3"></i>
                        <span x-show="!collapsed">Activos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('maintenance.index') }}" class="flex items-center justify-between px-4 m-2 bg-gray-100 rounded-xl py-3 dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <div class="flex items-center">
                            <i class="fa-solid fa-paint-roller mr-3"></i>
                            <span x-show="!collapsed">Mantenimiento</span>
                        </div>
                        <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-custom-red rounded-full">
                            3
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 m-2 bg-gray-100 rounded-xl dark:bg-gray-800 hover:bg-custom-blue dark:hover:bg-custom-dark-blue">
                        <i class="fa-solid fa-clipboard-list mr-3"></i>
                        <span x-show="!collapsed">Parte diario</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="flex items-center justify-between p-5 border-t border-gray-700">
            <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white" title="Alternar entre tema claro y oscuro">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </a>

            <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white" title="Configuración">
                <i class="fa-solid fa-gear"></i>
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white" title="Cerrar sesión">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
            
            </div>
        </div>
    </div>

    <button id="openSidebar" class="fixed top-3 left-4 z-50 p-2 text-white lg:hidden">
        <i class="fa-solid fa-bars"></i>
    </button>

<script>
    const sidebar = document.getElementById('sidebar');
    const openButton = document.getElementById('openSidebar');
    const closeButton = document.getElementById('closeSidebar');

    function toggleSidebar() {
        sidebar.classList.toggle('translate-x-0');
        sidebar.classList.toggle('-translate-x-full');
    }

    openButton.addEventListener('click', toggleSidebar);
    closeButton.addEventListener('click', toggleSidebar);
    window.addEventListener('resize', function() {
        const newWidth = window.innerWidth;
        const newHeight = window.innerHeight;
        if(newWidth >= 1024) {
            sidebar.classList = "sidebar fixed inset-y-0 left-0 mt-20 m-2 text-black transform transition-all duration-300 ease-in-out z-50";
        }
    });

    document.getElementById("user_data").addEventListener('click', () => {
        location.href = "/profile";
    });
</script>