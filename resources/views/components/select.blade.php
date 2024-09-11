<select id="{{ $id }}" {{ $attributes->merge(['class' => 'border border-gray-300 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500']) }}>
    {{ $slot }}
</select>