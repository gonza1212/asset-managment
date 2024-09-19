@props(['entity', 'modal_id'])

<div id="{{ $modal_id }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex justify-center items-center z-50">
    <div class="flex justify-center items center w-full xs:h-full">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-8 lg:w-1/2 xs:w-full xs:m-2 sm:w-10/12 md:w-2/3 fade-in modal-content z-50">
            {{ $slot }}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openModalBtn = document.getElementById('openEdit{{ $entity }}Modal');
        const closeModalBtn = document.getElementById('closeEdit{{ $entity }}Modal');
        const modal = document.getElementById('{{ $modal_id }}');
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

