<a {{ $attributes->merge(['class' => 'bg-custom-dark-blue shadow-md text-white px-4 py-2 rounded hover:shadow-inner hover:bg-custom-light-blue focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-500 dark:hover:bg-gray-400']) }}>
    {{ $slot }}
</a>