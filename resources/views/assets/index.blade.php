<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Activos') }}
        </h2>
    </x-slot>
    <!-- Barra superior: filtros y busqueda -->
    <div class="flex items-center justify-between p-6">
        <!-- Mostrar -->
        <div class="flex items-center space-x-2 w-1/4">
            <label for="mostrar" class="text-gray-700 dark:text-gray-400">Mostrar:</label>
            <select id="mostrar" class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="Equipos">Equipos</option>
                <option value="Herramientas">Herramientas</option>
                <option value="Consumibles">Consumibles</option>
            </select>
        </div>
        <!-- Filtrar -->
        <div class="flex items-center space-x-2 w-1/4">
            <label for="filtrar" class="text-gray-700 dark:text-gray-400">Filtrar:</label>
            <select id="filtrar" class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="todos">Todos</option>
                <option value="activos">Activos</option>
                <option value="inactivos">Inactivos</option>
                <option value="other">Otros estados</option>
            </select>
        </div>
        <!-- Búsqueda -->
        <div class="flex items-center space-x-2 w-1/2">
            <div class="relative w-full">
                <input type="text" placeholder="Buscar..." class="border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-xl p-2 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                <!-- Icono de lupa -->
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 dark:bg-gray-800 p-4 mx-6 mt-6 mb-0 rounded-t-xl">
    <!-- Barra de Herramientas -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-500 dark:hover:bg-gray-400">Agregar</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:hover:bg-gray-700">Eliminar</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:hover:bg-gray-700">Asignar</button>
            </div>
            <div class="flex items-center space-x-2">
                <div class="bg-gray-100 dark:bg-gray-500 dark:hover:bg-gray-400 rounded-md flex items-center justify-between">
                    <button class="text-gray-500 dark:text-white hover:text-gray-700 border-e border-gray-600 px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <span class="text-gray-700 dark:text-white px-2 py-1">1 - 4</span>
                    <button class="text-gray-500 dark:text-white hover:text-gray-700 border-s border-gray-600 px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5L15.75 12l-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-6 mb-[50px]">
        <!-- Tabla -->
        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700">
                <thead>
                    <tr class="bg-gray-100 border-b dark:bg-gray-700 dark:border-gray-600">
                        <th class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700">
                            <input type="checkbox" class="w-4 h-4" />
                        </th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">ID</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Descripción</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Categoría</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Asignado a</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Ubicación</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Marca y Modelo</th>
                        <th class="py-3 px-2 text-left border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">Nro. de Serie</th>
                        <th class="py-3 px-2 text-left dark:bg-gray-800 dark:text-white">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de una fila -->
                    @foreach($assets as $a)
                    <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700">
                            <input type="checkbox" class="w-4 h-4" />
                        </td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['code'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['description'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['category'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['assigned_to'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['location'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['brand'] }} {{ $a['model'] }}</td>
                        <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700 dark:text-white">{{ $a['serial_number'] }}</td>
                        <td class="py-3 px-2 dark:bg-gray-800 dark:text-white">{{ substr($a['status'], 0, 10) }}</td>
                    </tr>
                    @endforeach
                    <!-- Repite más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>