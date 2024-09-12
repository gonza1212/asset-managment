<button {{ $attributes->merge(['class' => 'bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:hover:bg-gray-700']) }}>
    {{ $slot }}
</button>