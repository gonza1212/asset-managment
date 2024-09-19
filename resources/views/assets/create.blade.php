<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="history.back()" class="px-4 py-2 text-gray-500 hover:text-gray-300 hidden lg:block">
                <i class="fa-solid fa-arrow-left fa-lg text-white hover:text-gray-200"></i>
            </button>
            <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight flex-grow text-center">
                Activos - Nuevo
            </h2>
            <div class="lg:w-24"></div> <!-- Espacio vacío para equilibrar el diseño -->
        </div>
    </x-slot>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- DETALLES -->
                    <p class="mb-5">Detalles</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Categoría -->
                        <div class="flex flex-col">
                            <label for="category" class="mb-2">Categoría</label>
                            <x-select :id="'category'">
                                <option value="Seleccionar categoría">Seleccionar categoría</option>
                                <option value="Equipos">Equipos</option>
                                <option value="Herramientas">Herramientas</option>
                                <option value="Consumibles">Consumibles</option>
                            </x-select>
                        </div>

                        <!-- Descripción -->
                        <div class="flex flex-col">
                            <label for="description" class="mb-2">Descripción</label>
                            <input id="description" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" />
                        </div>

                        <!-- Marca y Modelo -->
                        <div class="flex flex-col">
                            <label for="brand_model" class="mb-2">Marca y Modelo</label>
                            <input id="brand_model" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" />
                        </div>
                        
                        <!-- Número de serie -->
                        <div class="flex flex-col">
                            <label for="serial_number" class="mb-2">Número de serie</label>
                            <input id="serial_number" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" />
                        </div>

                        <!-- ID -->
                        <div class="flex flex-col">
                            <label for="code" class="mb-2">ID</label>
                            <input id="code" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" />
                        </div>

                        <!-- Estado -->
                        <div class="flex flex-col">
                            <label for="status" class="mb-2">Estado</label>
                            <x-select :id="'status'">
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

                    <!-- ASIGNACIÓN -->
                    <p class="mb-5 mt-12">Asignación</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Equipo -->
                        <div class="flex flex-col">
                            <label for="team">Equipo</label>
                            <p class="mb-2"><small class="text-gray-100 dark:text-gray-500">(opcional)</small></p>
                            <x-select :id="'team'">
                                <option value="Seleccionar estado">Seleccione un equipo</option>
                            </x-select>
                        </div>

                        <!-- Proyecto -->
                        <div class="flex flex-col">
                            <label for="project">Proyecto</label>
                            <p class="mb-2"><small class="text-gray-100 dark:text-gray-500">(opcional)</small></p>
                            <x-select :id="'project'">
                                <option value="Seleccionar estado">Seleccione un proyecto</option>
                            </x-select>
                        </div>

                        <!-- Personal -->
                        <div class="flex flex-col">
                            <label for="operator">Personal</label>
                            <p class="mb-2"><small class="text-gray-100 dark:text-gray-500">(opcional)</small></p>
                            <x-select :id="'operator'">
                                <option value="Seleccionar estado">Seleccione una persona</option>
                            </x-select>
                        </div>

                        <!-- Ubicación -->
                        <div class="flex flex-col">
                            <label for="location">Ubicación</label>
                            <p class="mb-2"><small class="text-gray-100 dark:text-gray-500">(pañol por defecto)</small></p>
                            <x-select :id="'location'">
                                <option value="Seleccionar estado">Depósito A</option>
                            </x-select>
                        </div>
                    </div>

                    <!-- AVANCE -->
                    <p class="mb-5 mt-12">Datos de Mantenimiento</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Tipo de mantenimiento -->
                        <div class="flex flex-col">
                            <label for="maintenance_type" class="mb-2">Tipo de mantenimiento</label>
                            <input id="maintenance_type" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" placeholder="Preventivo (por defecto)"/>
                        </div>

                        <!-- Período -->
                        <div class="flex flex-col">
                            <label for="maintenance_period" class="mb-2">Período</label>
                            <x-select :id="'maintenance_period'">
                                <option value="Seleccionar estado">Seleccione un período</option>
                            </x-select>
                        </div>

                        <!-- Descripción -->
                        <div class="flex flex-col">
                            <label for="maintenance_description" class="mb-2">Descripción</label>
                            <input id="maintenance_description" type="text" class="w-full bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 focus:border-gray-500 focus:outline-none py-2 px-1 transition duration-300" />
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                    <x-gray-button class="mt-5 mb-20 ms-6 px-20">Cancelar</x-gray-button>
                    <x-gray-button class="mt-5 mb-20 ms-6 px-20">Guardar</x-gray-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>