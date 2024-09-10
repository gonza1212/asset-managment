<x-app-layout>
<x-slot name="header">
    <div class="flex items-center justify-between">
        <button onclick="history.back()" class="px-4 py-2 text-gray-500 hover:text-gray-300">
            <i class="fa-solid fa-arrow-left fa-lg"></i>
        </button>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex-grow text-center">
            ID: {{ $asset['code'] }}
        </h2>
        <div class="w-24"></div> <!-- Espacio vacío para equilibrar el diseño -->
    </div>
</x-slot>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-5">Detalles</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>