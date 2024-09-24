<button {{ $attributes->merge(['class' => 'bg-custom-violet text-white shadow-md px-4 py-2 rounded hover:shadow-inner hover:bg-custom-light-violet focus:outline-none focus:ring-2 focus:ring-dark-blue dark:bg-custom-violet dark:hover:bg-custom-light-violet hover:dark:text-gray-800']) }}>
    {{ $slot }}
</button>