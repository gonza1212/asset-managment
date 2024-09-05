<x-guest-layout>
    <div x-data="{ slides: ['images/web/image1.jpg', 'images/web/image2.jpg', 'images/web/image3.jpg', 'images/web/image4.jpg', 'images/web/image5.jpg'], activeSlide: 0 }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 5000)" class="h-screen w-screen">
        <template x-for="(slide, index) in slides" :key="index">
            <div
            x-show="activeSlide === index"
            x-transition:enter="transition-opacity duration-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-cover bg-center"
            :style="'background-image: url('+ slide +')'"
            ></div>
        </template>
        <div class="absolute top-5 right-5 z-50">
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Iniciar Sesión
            </a>
        </div>
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <div class="bg-white bg-opacity-80 dark:bg-slate-800 dark:bg-opacity-80 p-10 rounded shadow-lg text-center max-w-md">
                <h1 class="text-4xl font-bold mb-4 dark:text-white">Asset Management</h1>
                <p class="text-lg dark:text-slate-400">Muestra de concepto de sistema de Gestión de Activos</p>
            </div>
        </div>
    </div>
</x-guest-layout>