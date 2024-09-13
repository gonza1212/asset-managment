<!-- Tabla -->
<div class="overflow-x-auto border-2 border-t-0 border-gray-300 rounded-b-xl dark:border-gray-700">
    <table class="w-full bg-white dark:bg-gray-800 dark:border-gray-700">
        <thead>
            <tr class="bg-gray-100 border-b dark:bg-gray-700 dark:border-gray-600">
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Fecha @if($type == 'En mantenimiento') (desde) @endif</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Descripción</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Categoría</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Asignado a</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Ubicación</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Marca y Modelo</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Número de serie</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maintenance as $m)
            <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:border-gray-600">
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">@if(isset($m['started_at'])) {{ $m['started_at'] }} @else {{ $m['scheduled_at'] }} @endif</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['description'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['category'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['assigned_to'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['location'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['brand_model'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['serial_number'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $m['status'] }}</td>
            </tr>
            @endforeach
            <!-- Repite más filas según sea necesario -->
        </tbody>
    </table>
</div>