<button {{ $attributes->merge(['class' => 'bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-500 dark:hover:bg-gray-400']) }}>
    {{ $slot }}
</button>