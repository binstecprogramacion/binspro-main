<section class="relative" x-data={videoModalOpen:false}>

    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 pointer-events-none -z-1" aria-hidden="true">
        <!-- SVG -->
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <div class="pt-32 pb-12 md:pt-40 md:pb-20">

            <div class="text-center pb-12 md:pb-16">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4"
                    x-data-aos="zoom-y-out">Descrube a
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-red-600">Binspro</span>
                </h1>
                <div class="max-w-3xl mx-auto">
                    <p class="text-xl text-gray-600 mb-8" x-data-aos="zoom-y-out" x-data-aos-delay="150">Facility y
                        Property en un solo lugar.</p>
                    <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center gap-10" x-data-aos="zoom-y-out"
                        x-data-aos-delay="300">


                        <a href="{{ route('register') }}">
                            <div
                                class="flex items-center px-3 py-2 rounded-md text-gray-800 bg-white shadow-md hover:bg-red-500 hover:text-white transition duration-200">
                                Registrate Aquí
                            </div>
                        </a>
                        <a href="#0">
                            <div
                                class="px-3 py-2 rounded-md text-gray-800 bg-white shadow-md hover:bg-blue-600 hover:text-white transition duration-200">
                                Más Información
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- El video modal -->
            <div x-show="videoModalOpen" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="videoModalOpen">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <!-- Background overlay, show/hide based on modal state. -->
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                    <!-- Modal Content -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                        role="dialog" aria-modal="videoModalOpen" aria-labelledby="modal-headline">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <!-- Put your video player here -->
                            <div class="sm:flex sm:items-start">
                                <!-- Video Player -->
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                                @click="videoModalOpen = false">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resto del contenido -->
            <x-heroe.modal />
        </div>

    </div>
    </div>
</section>
