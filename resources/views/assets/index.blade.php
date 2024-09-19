<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight text-center">
            {{ __('Activos') }}
        </h2>
    </x-slot>
    <!-- Barra superior: filtros y busqueda -->
    <div class="flex flex-wrap flex-start xl:justify-between ps-6 pe-6 pt-6">
        <!-- Mostrar -->
        <div class="mr-4 mb-4">
            <label for="mostrar" class="text-gray-700 dark:text-gray-400">Mostrar:</label>
            <x-select class="pr-10" :id="'mostrar'">
                <option value="Seleccionar categoría">Seleccionar categoría</option>
                <option value="Equipos">Equipos</option>
                <option value="Herramientas">Herramientas</option>
                <option value="Consumibles">Consumibles</option>
            </x-select>
        </div>
        <!-- Filtrar -->
        <div class="mr-4 mb-4 xs:mr-0">
            <label for="filtrar" class="text-gray-700 dark:text-gray-400">Filtrar:</label>
            <x-select class="pr-10" :id="'filtrar'">
                <option value="Seleccionar estado">Seleccionar estado</option>
                <option value="Disponible">Disponible</option>
                <option value="En uso">En uso</option>
                <option value="En mantenimiento">En mantenimiento</option>
                <option value="En reparación">En reparación</option>
                <option value="En almacenamiento">En almacenamiento</option>
                <option value="Dado de baja / Retirado">Dado de baja / Retirado</option>
                <option value="Asignado">Asignado</option>
            </x-select>
        </div>
        <!-- Búsqueda -->
        <div class="md:w-1/2 xs:w-full xs:order-first lg:w-fill mb-4">
            <div class="relative w-full">
                <input type="text" placeholder="Buscar..." class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-xl p-2 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                <!-- Icono de lupa -->
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>

    <div class="bg-gray-300 dark:bg-gray-600 xs:pt-2 xs:pb-0 xs:px-0 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
    <!-- Barra de Herramientas -->
        <div class="flex sm:justify-between xs:justify-end xs:flex-wrap">
            <div class="flex xs:justify-center space-x-4 xs:w-full xs:scale-75 xs:mb-2">
                <x-button-light-blue href="{{ route('assets.create') }}">Agregar</x-button-light-blue>
                <x-button-red>Eliminar</x-button-red>
                <x-button-red id="openEditAssetModal">Asignar</x-button-red>
            </div>
            <div class="flex items-center space-x-2">
                <div class="xs:scale-75 bg-white dark:bg-gray-500 dark:hover:bg-gray-400 rounded-md flex items-center justify-between">
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
    <div class="mx-6 mb-[50px]">
        <x-assets.index-table :assets="$assets" />
    </div>

    <x-edit-modal :modal_id="'assign_assets_modal'" :entity="'Asset'">
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- DETALLES -->
                    <p class="mb-5">Asignar Activo/s</p>
                    <div class="flex flex-col space-y-16">
                        <!-- Equipo -->
                        <div class="flex flex-col">
                            <label for="team" class="mb-2">Equipo</label>
                            <x-select :id="'team'">
                                <option value="Seleccionar estado">Seleccione un equipo</option>
                            </x-select>
                        </div>

                        <!-- Proyecto -->
                        <div class="flex flex-col">
                            <label for="project" class="mb-2">Proyecto</label>
                            <x-select :id="'project'">
                                <option value="Seleccionar estado">Seleccione un proyecto</option>
                            </x-select>
                        </div>
                    </div>
                    
                </div>
                <div class="w-full text-center">
                    <x-gray-button class="mt-5 mb-20 ms-6 px-12" id="closeEditAssetModal">Cancelar</x-gray-button>
                    <x-gray-button class="mt-5 mb-20 ms-6 px-12">Continuar</x-gray-button>
                </div>
            </div>
        </div>
    </div>
    </x-edit-modal>
</x-app-layout>