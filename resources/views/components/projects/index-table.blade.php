<!-- Tabla -->
<div class="overflow-x-auto border border-gray-300 rounded-b-xl dark:border-gray-600">
    <table class="w-full bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700  xs:text-xs">
        <thead>
            <tr class="bg-gray-100 border-b dark:bg-gray-700 dark:border-gray-600">
                <th class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-900 dark:border-gray-700">
                    <input type="checkbox" class="w-4 h-4" />
                </th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">ID</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Nombre del Proyecto</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Descripción</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Estado</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Fecha de Inicio</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Fecha de Finalización</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Responsable</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Activos Asignados</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Ubicación</th>
                <th class="py-3 xs:py-1 px-2 xs:px-1 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Prioridad</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de una fila -->
            @foreach($projects as $p)
            <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:border-gray-600">
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-700">
                    <input type="checkbox" class="w-4 h-4" />
                </td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['code'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white hover:text-blue-400"><a href="{{ route('projects.show', $p['id']) }}">{{ $p['name'] }}</a></td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['description'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['status'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['started_at'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['finished_at'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['project_manager'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['assets'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['location'] }}</td>
                <td class="py-3 xs:py-1 px-2 xs:px-1 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $p['priority'] }}</td>
            </tr>
            @endforeach
            <!-- Repite más filas según sea necesario -->
        </tbody>
    </table>
</div>