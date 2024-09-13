<!-- Tabla -->
<div class="overflow-x-auto border-2 border-gray-300 rounded-b-xl dark:border-gray-600">
    <table class="w-full bg-white border border-gray-300 dark:bg-gray-800 dark:border-none">
        <thead>
            <tr class="bg-gray-100 border-b dark:bg-gray-700 dark:border-gray-600">
                <th class="py-3 px-2 border-r dark:bg-gray-900 dark:border-gray-700">
                    <input type="checkbox" class="w-4 h-4" />
                </th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">ID</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Descripción</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Categoría</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Asignado a</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Ubicación</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Marca y Modelo</th>
                <th class="py-3 px-2 text-left border-r dark:bg-gray-900 dark:border-gray-600 dark:text-white">Nro. de Serie</th>
                <th class="py-3 px-2 text-left dark:bg-gray-900 dark:text-white">Estado</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de una fila -->
            @foreach($assets as $a)
            <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:border-gray-600">
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600">
                    <input type="checkbox" class="w-4 h-4" />
                </td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['code'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white hover:text-blue-400"><a href="{{ route('assets.show', $a['id']) }}">{{ $a['description'] }}</a></td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['category'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['assigned_to'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['location'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['brand'] }} {{ $a['model'] }}</td>
                <td class="py-3 px-2 border-r dark:bg-gray-800 dark:border-gray-600 dark:text-white">{{ $a['serial_number'] }}</td>
                <td class="py-3 px-2 dark:bg-gray-800 dark:text-white">{{ substr($a['status'], 0, 10) }}</td>
            </tr>
            @endforeach
            <!-- Repite más filas según sea necesario -->
        </tbody>
    </table>
</div>