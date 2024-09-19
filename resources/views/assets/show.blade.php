<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="history.back()" class="px-4 py-2 text-gray-500 hover:text-gray-300 hidden lg:block">
                <i class="fa-solid fa-arrow-left fa-lg text-white hover:text-gray-200"></i>
            </button>
            <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight flex-grow text-center">
                ID: {{ $asset['code'] }}
            </h2>
            <div class="lg:w-24 w-0"></div> <!-- Espacio vacío para equilibrar el diseño -->
        </div>
    </x-slot>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-gray-50 shadow-inner dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- DETALLES -->
                    <p class="mb-5 text-xl">Detalles</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Categoría -->
                        <x-detail-card :attribute="'Categoría'"  :data="$asset['category']" />
                        
                        <!-- Descripción -->
                        <x-detail-card :attribute="'Descripción'"  :data="$asset['description']" />
                        
                        <!-- Marca y Modelo -->
                        <x-detail-card :attribute="'Marca y Modelo'" :data="$asset['brand'] . ' ' . $asset['model']" />
                        
                        <!-- Número de serie -->
                        <x-detail-card :attribute="'Número de serie'" :data="$asset['serial_number']" />
                        
                        <!-- ID -->
                        <x-detail-card :attribute="'ID'"  :data="$asset['code']" />
                        
                        <!-- Estado -->
                        <x-detail-card :attribute="'Estado'"  :data="$asset['status']" />
                    </div>
                    <div class="mt-5 mb-3">
                        <x-button-light-blue id="openEditAssetModal">Editar</x-button-light-blue>
                    </div>
                    <!-- ASIGNACIÓN -->
                    <p class="mb-5 text-xl mt-12">Asignación</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Asignado a -->
                        <x-detail-card :attribute="'Asignado a'" :data="$asset['assigned_to']" />
                        
                        <!-- Asignado a -->
                        <x-detail-card :attribute="'Asignado a'"  :data="$asset['assigned_project']" />
                        
                        <!-- Asignado a -->
                        <x-detail-card :attribute="'Asignado a'"  :data="$asset['assigned_manager']" />
                        
                        <!-- Asignado a -->
                        <x-detail-card :attribute="'Asignado a'"  :data="$asset['assigned_operator']" />
                        
                        <!-- Ubicación -->
                        <x-detail-card :attribute="'Ubicación'"  :data="$asset['location']" />
                        
                        <!-- Fecha de actualización -->
                        <x-detail-card :attribute="'Fecha de actualización'"  :data="$asset['assigment_updated_at']" />
                    </div>
                    <x-button-light-blue class="mt-5 mb-3">Ir a Asignaciones</x-button-light-blue>
                    <x-button-dark-blue class="mt-5 mb-3 ms-5">Ver Historial</x-button-dark-blue>

                    <!-- AVANCE -->
                    <p class="mb-5 text-xl mt-12">Mantenimiento</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Fecha de ingreso -->
                        <x-detail-card :attribute="'Fecha de ingreso'" :data="$asset['entered_at']" />
                        
                        <!-- Fecha de último mantenimiento -->
                        <x-detail-card :attribute="'Fecha de último mantenimiento'"  :data="$asset['last_maintenance_at']" />

                        <!-- Fecha de próximo mantenimiento -->
                        <x-detail-card :attribute="'Fecha de próximo mantenimiento'"  :data="$asset['next_maintenance_at']" />

                        <!-- Descripción -->
                        <x-detail-card :attribute="'Descripción'"  :data="$asset['maintenance_description']" />
                    </div>
                    <x-button-light-blue class="mt-5 mb-3">Ir a Mantenimiento</x-button-light-blue>
                </div>
                <x-button-red class="mt-5 mb-20 ms-6 px-16">Dar de baja <i class="fa-solid fa-trash-can"></i></x-button-red>
            </div>
        </div>
    </div>
    <x-edit-modal :modal_id="'edit_asset_modal'" :entity="'Asset'">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-400" id="modal-title">
                        Editar Activo
                    </h3>
                    <div class="mt-2">
                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Categoría</label>
                            <x-select :id="'category'" class="w-full">
                                <option value="Equipos">Equipos</option>
                                <option value="Herramientas">Herramientas</option>
                                <option value="Consumibles">Consumibles</option>
                            </x-select>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Descripción</label>
                            <input type="text" name="description" id="description" value="{{ $asset['description'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="brand" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Marca y Modelo</label>
                            <input type="text" name="brand" id="brand" value="{{ $asset['brand'] }} {{ $asset['model'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="serial_number" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Número de serie</label>
                            <input type="text" name="serial_number" id="serial_number" value="{{ $asset['serial_number'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="code" class="block text-sm font-medium text-gray-700 dark:text-gray-500">ID</label>
                            <input type="text" name="code" id="code" value="{{ $asset['code'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Estado</label>
                            <x-select :id="'status'" class="w-full">
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
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Guardar cambios
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" id="closeEditAssetModal">
                    Cancelar
                </button>
            </div>
        </form>
    </x-edit-modal>
</x-app-layout>