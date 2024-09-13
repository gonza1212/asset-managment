<button {{ $attributes->merge(['class' => 'bg-custom-gray-blue shadow-md text-white px-4 py-2 rounded hover:shadow-inner hover:bg-custom-light-blue focus:outline-none focus:ring-2 focus:ring-dark-blue dark:bg-custom-dark-blue dark:hover:bg-custom-light-blue hover:dark:text-gray-800']) }}>
    {{ $slot }}
</button>