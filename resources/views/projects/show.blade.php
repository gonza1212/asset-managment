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
                    <p class="mb-5">Detalles</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Nombre -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Nombre</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['name'] }}</h3>
        </div>
        
        <!-- Descripción -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Descripción</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['description'] }}</h3>
        </div>
        
        <!-- ID -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">ID</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['id'] }}</h3>
        </div>
        
        <!-- Prioridad -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Prioridad</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['priority'] }}</h3>
        </div>
        
        <!-- Estado -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Estado</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['status'] }}</h3>
        </div>
        
        <!-- Activos Asignados -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Activos Asignados</p>
            <p>{{ $project['assets'] }}</p>
        </div>
        
        <!-- Fecha de Inicio -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Fecha de Inicio</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['started_at'] }}</h3>
        </div>
        
        <!-- Fecha de Finalización -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
            <p class="mb-2 dark:text-gray-400">Fecha de Finalización</p>
            <h3 class="text-xl dark:text-gray-100">{{ $project['finished_at'] }}</h3>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>