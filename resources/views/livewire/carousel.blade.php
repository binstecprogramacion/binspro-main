<div x-data="{ slide: 0, images: ['img/slide/obreros_verificando.jpg', 'img/slide/obreros_supervisando.jpg', 'img/slide/obreros_observando.jpeg'].map(i => '/' + i) }" x-init="setInterval(() => slide = slide === images.length - 1 ? 0 : slide + 1, 5000)" class="relative overflow-auto">
    <template x-for="(image, index) in images" :key="index">
        <div x-show="slide === index" x-transition:enter="transition ease-in duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0" :style="`z-index: ${slide === index ? 10 : 1}`">
            <img class="w-full h-64 md:h-80 lg:h-96 object-cover" :src="image" alt="Slide">
            <div class="absolute bottom-0 w-full lg:h-96 text-center p-4 text-white"
                style="background-color: rgba(0, 0, 0, 0.5);">
                <h1 class="font-bold text-3xl mb-2">Titulo</h1>
                <h4 class="text-lg">Subtitulo</h4>
            </div>
        </div>
    </template>

    <!-- Aquí van los botones para pasar al siguiente o al anterior slide -->
    <button @click="slide = slide === 0 ? images.length - 1 : slide - 1"
        class="absolute left-0 top-1/2 text-white p-2 opacity-0 hover:opacity-100 transition-opacity duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button @click="slide = slide === images.length - 1 ? 0 : slide + 1"
        class="absolute right-0 top-1/2 text-white p-2 opacity-0 hover:opacity-100 transition-opacity duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Aquí van los botones de navegación inferiores -->
    <div class="absolute bottom-0 w-full flex justify-center space-x-2 p-4">
        <template x-for="(image, index) in images" :key="index">
            <button @click="slide = index" class="w-2 h-2 rounded-full bg-white"
                :class="{ 'opacity-50': slide !== index }"></button>
        </template>
    </div>
</div>
