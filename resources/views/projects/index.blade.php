<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>
    <!-- Barra superior: filtros y busqueda -->
    <div class="flex items-center justify-between p-6">
        <!-- Mostrar -->
        <div class="flex items-center space-x-1 w-1/4">
            <label for="mostrar" class="text-gray-700 dark:text-gray-400">Mostrar:</label>
            <x-select :id="'mostrar'">
                <option value="Todos">Todos</option>
                <option value="Actuales">Actuales</option>
                <option value="Finalizados">Finalizados</option>
            </x-select>
        </div>
        <!-- Filtrar -->
        <div class="flex items-center space-x-1 w-1/4">
            <label for="filtrar" class="text-gray-700 dark:text-gray-400">Filtrar:</label>
            <x-select :id="'filtrar'">
                <option value="todos">Todos</option>
                <option value="En Planificación">En Planificación</option>
                <option value="En Ejecución">En Ejecución</option>
                <option value="Pausado">Pausado</option>
                <option value="En Espera de Aprobación">En Espera de Aprobación</option>
                <option value="En Revisión">En Revisión</option>
                <option value="Retrasado">Retrasado</option>
                <option value="Cerrado">Cerrado</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Completado">Completado</option>
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

    <div class="bg-gray-300 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
    <!-- Barra de Herramientas -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex space-x-4">
                <x-custom-dark-blue-button>Agregar</x-custom-dark-blue-button>
                <x-custom-red-button>Finalizar</x-custom-red-button>
            </div>
            <div class="flex items-center space-x-2">
                <div class="bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-400 rounded-md flex items-center justify-between">
                    <button class="text-gray-500 dark:text-white hover:text-gray-700 border-e border-gray-300 px-2 py-1">
                        <i class="fa-solid fa-chevron-left px-2"></i>
                    </button>
                    <span class="text-gray-700 dark:text-white px-2 py-1">1 - 4</span>
                    <button class="text-gray-500 dark:text-white hover:text-gray-700 border-s border-gray-300 px-2 py-1">
                        <i class="fa-solid fa-chevron-right px-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-6 mb-[50px]">
        <x-projects.index-table :projects="$projects" />
    </div>
</x-app-layout>