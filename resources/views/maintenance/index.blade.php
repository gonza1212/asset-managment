<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight text-center">
            {{ __('Mantenimientos') }}
        </h2>
    </x-slot>
    <!-- En mantenimiento -->
    <div class="bg-white border-2 border-b-0 dark:border-gray-700 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
        <!-- Barra de Herramientas -->
        <div class="flex items-center justify-between">
            <h3 class="dark:text-white text-lg font-bold">En mantenimiento</h3>
        </div>
    </div>
    <div class="mx-6 mb-6">
        <x-maintenance.index-table :maintenance="$maintenance" :type="'En mantenimiento'" />
    </div>

    <!-- Barra superior: filtros y busqueda -->
    <div class="flex items-center justify-between py-6 px-12">
        <!-- Mostrar -->
        <div class="flex items-center space-x-1 w-1/2 pe-24">
            <label for="mostrar" class="text-gray-700 dark:text-gray-400">Mostrar:</label>
            <x-select :id="'mostrar'" class="w-full">
                <option value="Calendario">Calendario</option>
                <option value="Lista">Lista</option>
            </x-select>
        </div>
        <!-- Búsqueda -->
        <div class="flex items-center space-x-1 w-1/2">
            <div class="relative w-full ps-2">
                <input type="text" placeholder="Buscar..." class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-xl p-2 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                <!-- Icono de lupa -->
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>

    <div class="mx-6 mb-6 dark:bg-gray-500 dark:rounded-xl dark:p-4" id="calendar_container">
        <div id='calendar' style="max-height:480px;"></div>
    </div>

    <div class="hidden" id="list_container">
        <!-- Pendientes -->
        <div class="bg-white border-2 border-b-0 dark:border-gray-700 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
            <!-- Barra de Herramientas -->
            <div class="flex items-center justify-between">
                <h3 class="dark:text-white text-lg font-bold">Pendientes</h3>
            </div>
        </div>
        <div class="mx-6 mb-12">
            <x-maintenance.index-table :maintenance="$pending" :type="'Pendientes'" />
        </div>

        <!-- Próximos -->
        <div class="bg-gray-300 border-2 border-b-0 dark:border-gray-700 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
            <!-- Barra de Herramientas -->
            <div class="flex items-center justify-between">
                <div class="flex space-x-4">
                    <h3 class="dark:text-white text-lg font-bold">Próximos</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="bg-white dark:bg-gray-500 dark:hover:bg-gray-400 rounded-md flex items-center justify-between">
                        <button class="text-gray-500 dark:text-white hover:text-custom-dark-blue border-e border-gray-300 px-2 py-1">
                            <i class="fa-solid fa-chevron-left px-2"></i>
                        </button>
                        <span class="text-gray-700 dark:text-white px-2 py-1">1 - 4</span>
                        <button class="text-gray-500 dark:text-white hover:text-custom-dark-blue border-s border-gray-300 px-2 py-1">
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
        });

        const mostrar = document.getElementById('mostrar');
        mostrar.addEventListener('change', () => {
            if(mostrar.value == 'Lista') {
                document.getElementById('calendar_container').classList.add('hidden');
                document.getElementById('list_container').classList.remove('hidden');
            } else {
                document.getElementById('calendar_container').classList.remove('hidden');
                document.getElementById('list_container').classList.add('hidden');
            }
        })        
    </script>
</x-app-layout>