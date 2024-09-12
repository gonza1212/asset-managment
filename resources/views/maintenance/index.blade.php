<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight text-center">
            {{ __('Mantenimientos') }}
        </h2>
    </x-slot>
    <div class="bg-gray-100 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
    <!-- Barra de Herramientas -->
        <div class="flex items-center justify-between">
            <h3 class="dark:text-white text-lg font-bold">En mantenimiento</h3>
        </div>
    </div>
    <div class="mx-6 mb-6">
        <x-maintenance.index-table :maintenance="$maintenance" />
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
</x-app-layout>