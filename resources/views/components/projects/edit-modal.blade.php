@props(['project'])

<div id="edit_project_modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex justify-center items-center">
    <div class="flex justify-center items center w-full">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-8 w-1/2 fade-in modal-content z-50">
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-400" id="modal-title">
                            Editar Proyecto
                        </h3>
                        <div class="mt-2">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ $project['name'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                            </div>
                            <div class="mb-4">
                                <label for="id" class="block text-sm font-medium text-gray-700 dark:text-gray-500">ID</label>
                                <input type="text" name="id" id="id" value="{{ $project['id'] }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Descripción</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700">{{ $project['description'] }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Estado</label>
                                <x-select :id="'status'" class="w-full">
                                    <option value="todos">Todos</option>
                                    <option value="En Planificación">En Planificación</option>
                                    <option value="En Ejecución">En Ejecución</option>
                                    <option value="Pausado">Pausado</option>
                                    <option value="En Espera de Aprobación">En Espera de Aprobación</option>
                                    <option value="En Revisión">En Revisión</option>
                                    <option value="Retrasado">Retrasado</option>
                                    <option value="Cerrado">Cerrado</option>
                                    <option value="Cancelado">Cancelado</option>
                                    <option value="Completado">Completado</option>
                                </x-select>
                            </div>
                            <div class="mb-4">
                                <label for="priority" class="block text-sm font-medium text-gray-700 dark:text-gray-500">Prioridad</label>
                                <x-select :id="'priority'" class="w-full">
                                    <option value="baja" {{ $project['priority'] === 'baja' ? 'selected' : '' }}>Baja</option>
                                    <option value="media" {{ $project['priority'] === 'media' ? 'selected' : '' }}>Media</option>
                                    <option value="alta" {{ $project['priority'] === 'alta' ? 'selected' : '' }}>Alta</option>
                                </x-select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Guardar cambios
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" id="closeEditProjectModal">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openModalBtn = document.getElementById('openEditProjectModal');
        const closeModalBtn = document.getElementById('closeEditProjectModal');
        const modal = document.getElementById('edit_project_modal');
        const modalContent = modal.querySelector('.modal-content');

        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden'); // Mostrar el fondo del modal
            setTimeout(() => {
                modalContent.classList.add('show'); // Activar la animación
            }, 10); // Pequeño retraso para asegurar que la transición se aplique
        });

        closeModalBtn.addEventListener('click', () => {
            modalContent.classList.remove('show'); // Ocultar con animación
            setTimeout(() => {
                modal.classList.add('hidden'); // Esconder el fondo del modal después de la animación
            }, 500); // Tiempo coincide con la duración de la transición
        });
    });
</script>

