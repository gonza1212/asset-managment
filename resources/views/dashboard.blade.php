<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-4xl mb-5"><i class="fas fa-home mr-3"></i>Inicio</h2>
                    <p>Panel de Inicio de demo de software de gestión de activos.</p>
                    <p>Todos los datos son de muestra y ninguna acción es permanente.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
