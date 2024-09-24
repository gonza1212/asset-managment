<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="history.back()" class="px-4 py-2 text-gray-500 hover:text-gray-300 hidden lg:block">
                <i class="fa-solid fa-arrow-left fa-lg text-white hover:text-gray-200"></i>
            </button>
            <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight flex-grow text-center">
                ID: {{ $project['code'] }}
            </h2>
            <div class="lg:w-16"></div> <!-- Espacio vacío para equilibrar el diseño -->
        </div>
    </x-slot>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-gray-50 shadow-inner dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- DETALLES -->
                    <p class="mb-5 text-xl">Detalles</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Nombre -->
                        <x-detail-card :attribute="'Nombre'" :data="$project['name']" />
                        
                        <!-- Descripción -->
                        <x-detail-card :attribute="'Descripción'"  :data="$project['description']" />
                        
                        <!-- ID -->
                        <x-detail-card :attribute="'ID'"  :data="$project['id']" />
                        
                        <!-- Prioridad -->
                        <x-detail-card :attribute="'Prioridad'"  :data="$project['priority']" />
                        
                        <!-- Estado -->
                        <x-detail-card :attribute="'Estado'"  :data="$project['status']" />
                        
                        <!-- Activos Asignados -->
                        <x-detail-card :attribute="'Activos Asignados'" :data="$project['assets']" />
                        
                        <!-- Fecha de Inicio -->
                        <x-detail-card :attribute="'Fecha de Inicio'" :data="$project['started_at']" />
                        
                        <!-- Fecha de Finalización -->
                        <x-detail-card :attribute="'Fecha de Finalización'" :data="$project['finished_at']" />
                    </div>
                        <x-button-light-blue class="mt-5 mb-3" id="openEditProjectModal">Editar</x-button-light-blue>
                    <!-- ASIGNACIÓN -->
                    <p class="mb-5 mt-12">Asignación</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Responsable -->
                        <x-detail-card :attribute="'Responsable'" :data="$project['project_manager']" />
                        
                        <!-- Sub-Responsable -->
                        <x-detail-card :attribute="'Sub-Responsable'"  :data="$project['deputy_manager']" />
                        
                        <!-- Equipo -->
                        <x-detail-card :attribute="'Equipo'"  :data="$project['team']" />
                        
                        <!-- Ubicación -->
                        <x-detail-card :attribute="'Ubicación'"  :data="$project['location']" />
                    </div>
                        <x-button-light-blue class="mt-5 mb-3">Ir a Asignaciones</x-button-light-blue>
                        <x-button-dark-blue class="mt-5 mb-3 ms-5">Ver Historial</x-button-dark-blue>

                    <!-- AVANCE -->
                    <p class="mb-5 mt-12">Avance</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Porcentaje de Avance -->
                        <x-detail-card :attribute="'Porcentaje de Avance'" :data="$project['progress_percentage']" />
                        
                        <!-- Fecha de último informe -->
                        <x-detail-card :attribute="'Fecha de último informe'"  :data="$project['last_report_at']" />
                    </div>
                    <x-button-dark-blue class="mt-5 mb-3">Ver informe de progreso</x-button-dark-blue>
                </div>
                <x-button-red class="mt-5 mb-20 ms-6 px-12">Finalizar Proyecto</x-button-red>
            </div>
        </div>
    </div>
    <x-edit-modal :modal_id="'edit_project_modal'" :entity="'Project'">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="sm:flex sm:items-start">
                <div class="mt-3 sm:mt-0 sm:ml-4 text-left w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-400" id="modal-title">
                        Editar Detalles del Proyecto
                    </h3>
                    <div class="mt-2">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ $project['name'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="id" class="block text-sm font-medium text-gray-700 dark:text-gray-500">ID</label>
                            <input type="text" name="id" id="id" value="{{ $project['id'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Descripción</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">{{ $project['description'] }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Estado</label>
                            <x-select :id="'status'" class="w-full">
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
                        <div class="mb-4">
                            <label for="priority" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Prioridad</label>
                            <x-select :id="'priority'" class="w-full">
                                <option value="baja" {{ $project['priority'] === 'baja' ? 'selected' : '' }}>Baja</option>
                                <option value="media" {{ $project['priority'] === 'media' ? 'selected' : '' }}>Media</option>
                                <option value="alta" {{ $project['priority'] === 'alta' ? 'selected' : '' }}>Alta</option>
                            </x-select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end px-4 py-3 xs:space-y-4 sm:px-6 xs:flex-col">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Guardar cambios
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" id="closeEditProjectModal">
                    Cancelar
                </button>
            </div>
        </form>
    </x-edit-modal>
</x-app-layout>