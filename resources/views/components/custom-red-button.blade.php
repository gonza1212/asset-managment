<button {{ $attributes->merge(['class' => 'bg-custom-red text-white shadow-md px-4 py-2 rounded hover:shadow-inner hover:bg-custom-light-red focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:hover:bg-gray-700']) }}>
    {{ $slot }}
</button>