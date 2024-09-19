<x-guest-layout>
    <div x-data="{ slides: ['images/web/image1.jpg', 'images/web/image2.jpg', 'images/web/image3.jpg', 'images/web/image4.jpg', 'images/web/image5.jpg'], activeSlide: 0 }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 10000)" class="h-screen w-screen relative">
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
        <div class="absolute bottom-20 inset-x-0 z-50 flex justify-center">
            <a href="https://latinidesign.com/#inicio" target="_blank" class="text-sm text-white text-opacity-70 text-xl [text-shadow:_1px_1px_3px_rgb(0_0_0_/_50%)]">Powered by <span class="font-bold hover:text-cyan-300">LatiniDesign</span></a>
        </div>
    </div>
</x-guest-layout>