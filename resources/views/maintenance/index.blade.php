<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight text-center">
            {{ __('Mantenimientos') }}
        </h2>
    </x-slot>

    <!-- En mantenimiento -->
    <div class="bg-gray-300 border-2 border-b-0 border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:border-b-2 dark:border-gray-700 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
        <div class="flex items-center justify-between">
            <h3 class="dark:text-white text-lg font-bold">En mantenimiento</h3>
        </div>
    </div>
    <div class="mx-6 mb-6">
        <x-maintenance.index-table :maintenance="$maintenance" :type="'En mantenimiento'" />
    </div>

    <!-- Barra superior: filtros y búsqueda -->
    <div class="flex items-center justify-between py-6 px-6">
        <!-- Mostrar -->
        <div class="flex items-center space-x-1 w-1/2 pe-24">
            <label for="mostrar" class="text-gray-700 dark:text-gray-400">Vista:</label>
            <!-- Botones de vista -->
            <button id="calendarBtn" class="px-4 py-2 rounded-l-lg border border-gray-300 dark:border-gray-600 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 focus:bg-custom-dark-blue dark:focus:bg-custom-dark-blue dark:text-gray-900" data-view="calendar">
                <i class="fa-regular fa-calendar"></i>
            </button>
            <button id="listBtn" class="px-4 py-2 rounded-r-lg border border-gray-300 dark:border-gray-600 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 focus:bg-custom-dark-blue dark:focus:bg-custom-dark-blue dark:text-gray-900" data-view="list">
                <i class="fa-solid fa-table"></i>
            </button>
        </div>
        <!-- Búsqueda -->
        <div class="flex items-center space-x-1 w-1/2">
            <div class="relative w-full">
                <input type="text" placeholder="Buscar..." class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-xl p-2 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>

    <div class="mx-6 mb-6 rounded-xl p-3 border-2 border-gray-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:rounded-xl dark:p-4" id="calendar_container">
        <div id='calendar' style="max-height:480px;"></div>
    </div>

    <div class="hidden" id="list_container">
        <!-- Pendientes -->
        <div class="bg-gray-300 border-2 border-b-0 border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:border-b-2 dark:border-gray-700 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
            <div class="flex items-center justify-between">
                <h3 class="dark:text-white text-lg font-bold">Pendientes</h3>
            </div>
        </div>
        <div class="mx-6 mb-12">
            <x-maintenance.index-table :maintenance="$pending" :type="'Pendientes'" />
        </div>

        <!-- Próximos -->
        <div class="bg-gray-300 border-2 border-b-0 border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:border-b-2 dark:border-gray-700 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
            <div class="flex items-center justify-between">
                <div class="flex space-x-4">
                    <h3 class="dark:text-white text-lg font-bold">Próximos</h3>
                </div>
                <div class="flex items-center space-x-2 xs:scale-75">
                    <div class="bg-white dark:bg-gray-500 dark:hover:bg-gray-400 rounded-md flex items-center justify-between">
                        <button class="text-gray-500 dark:text-white hover:text-custom-gray-blue border-e border-gray-300 px-2 py-1">
                            <i class="fa-solid fa-chevron-left px-2"></i>
                        </button>
                        <span class="text-gray-700 dark:text-white px-2 py-1">1 - 4</span>
                        <button class="text-gray-500 dark:text-white hover:text-custom-gray-blue border-s border-gray-300 px-2 py-1">
                            <i class="fa-solid fa-chevron-right px-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-6 mb-6">
            <x-maintenance.index-table :maintenance="$upcoming" :type="'Próximos'" />
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'UTC',
                initialView: 'multiMonthYear',
                editable: true,
            });

            calendar.render();

            // Botones de vista
            const calendarBtn = document.getElementById('calendarBtn');
            const listBtn = document.getElementById('listBtn');
            const calendarContainer = document.getElementById('calendar_container');
            const listContainer = document.getElementById('list_container');

function showView(view) {
    if (view === 'calendar') {
        // Mostrar el calendario, ocultar la lista
        calendarContainer.classList.remove('hidden');
        listContainer.classList.add('hidden');
        
        // Activar el botón de Calendario
        calendarBtn.classList.add('bg-custom-dark-blue', 'text-white', 'dark:text-white', 'dark:bg-custom-dark-blue');
        calendarBtn.classList.remove('bg-gray-200', 'bg-gray-300', 'text-gray-700', 'dark:bg-gray-600', 'dark:text-gray-300');
        
        // Desactivar el botón de Lista
        listBtn.classList.add('bg-gray-200', 'dark:bg-gray-600', 'text-gray-700', 'dark:text-gray-300');
        listBtn.classList.remove('bg-custom-dark-blue', 'text-white', 'dark:text-white');
        
    } else {
        // Mostrar la lista, ocultar el calendario
        calendarContainer.classList.add('hidden');
        listContainer.classList.remove('hidden');
        
        // Activar el botón de Lista
        listBtn.classList.add('bg-custom-dark-blue', 'text-white', 'dark:text-white', 'dark:bg-custom-dark-blue');
        listBtn.classList.remove('bg-gray-200', 'bg-gray-300', 'text-gray-700', 'dark:bg-gray-600', 'dark:text-gray-300');
        
        // Desactivar el botón de Calendario
        calendarBtn.classList.add('bg-gray-200', 'dark:bg-gray-600', 'text-gray-700', 'dark:text-gray-300');
        calendarBtn.classList.remove('bg-custom-dark-blue', 'text-white', 'dark:text-white');
    }
}



            // Configurar estado inicial
            showView('calendar'); // Por defecto, mostramos el calendario

            calendarBtn.addEventListener('click', () => showView('calendar'));
            listBtn.addEventListener('click', () => showView('list'));
        });
    </script>
</x-app-layout>
