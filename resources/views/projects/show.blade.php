<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="history.back()" class="px-4 py-2 text-gray-500 hover:text-gray-300">
                <i class="fa-solid fa-arrow-left fa-lg"></i>
            </button>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex-grow text-center">
                ID: {{ $project['code'] }}
            </h2>
            <div class="w-24"></div> <!-- Espacio vacío para equilibrar el diseño -->
        </div>
    </x-slot>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- DETALLES -->
                    <p class="mb-5">Detalles</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Nombre -->
                        <x-projects.detail-card :attribute="'Nombre'" :data="$project['name']" />
                        
                        <!-- Descripción -->
                        <x-projects.detail-card :attribute="'Descripción'"  :data="$project['description']" />
                        
                        <!-- ID -->
                        <x-projects.detail-card :attribute="'ID'"  :data="$project['id']" />
                        
                        <!-- Prioridad -->
                        <x-projects.detail-card :attribute="'Prioridad'"  :data="$project['priority']" />
                        
                        <!-- Estado -->
                        <x-projects.detail-card :attribute="'Estado'"  :data="$project['status']" />
                        
                        <!-- Activos Asignados -->
                        <x-projects.detail-card :attribute="'Activos Asignados'" :data="$project['assets']" />
                        
                        <!-- Fecha de Inicio -->
                        <x-projects.detail-card :attribute="'Fecha de Inicio'" :data="$project['started_at']" />
                        
                        <!-- Fecha de Finalización -->
                        <x-projects.detail-card :attribute="'Fecha de Finalización'" :data="$project['finished_at']" />
                    </div>
                    <x-gray-button class="mt-5 mb-3" id="openEditProjectModal">Editar</x-gray-button>

                    <!-- ASIGNACIÓN -->
                    <p class="mb-5 mt-12">Asignación</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Responsable -->
                        <x-projects.detail-card :attribute="'Responsable'" :data="$project['project_manager']" />
                        
                        <!-- Sub-Responsable -->
                        <x-projects.detail-card :attribute="'Sub-Responsable'"  :data="$project['deputy_manager']" />
                        
                        <!-- Equipo -->
                        <x-projects.detail-card :attribute="'Equipo'"  :data="$project['team']" />
                        
                        <!-- Ubicación -->
                        <x-projects.detail-card :attribute="'Ubicación'"  :data="$project['location']" />
                    </div>
                    <x-gray-button class="mt-5 mb-3">Ir a Asignaciones</x-gray-button>
                    <x-gray-button class="mt-5 mb-3 ms-5">Ver Historial</x-gray-button>

                    <!-- AVANCE -->
                    <p class="mb-5 mt-12">Avance</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Porcentaje de Avance -->
                        <x-projects.detail-card :attribute="'Porcentaje de Avance'" :data="$project['progress_percentage']" />
                        
                        <!-- Fecha de último informe -->
                        <x-projects.detail-card :attribute="'Fecha de último informe'"  :data="$project['last_report_at']" />
                    </div>
                    <x-gray-button class="mt-5 mb-3">Ver informe de progreso</x-gray-button>
                </div>
                <x-gray-button class="mt-5 mb-20 ms-6 px-12">Finalizar Proyecto</x-gray-button>
            </div>
        </div>
    </div>
    <x-projects.edit-modal :project="$project" />
</x-app-layout>