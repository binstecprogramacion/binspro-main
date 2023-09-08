<aside class="flex flex-col  p-4 transition-all duration-500 ease-in-out">
    <div class="relative h-16 border-b mb-6">
        <x-logo />
    </div>
    <!-- El resto del código del side bar aquí -->

    <ul class="p-2">
        <li class="flex flex-row items-center h-8 mb-2">
            <span class="text-sm font-light tracking-wide text-gray-500">Menu</span>
        </li>
        <li class=" pl-4 mb-4">
            <a href="/incidencias" class="nav-item">
                <i class="fa-solid fa-fire fa-flip" style="color: #ff0a0a;"></i>
                <span class="ml-2 text-sm tracking-wide truncate text-cta">Incidencias</span>
                <span
                    class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo-500 bg-indigo-50 rounded-full">New</span>
            </a>
        </li>
        <li class=" pl-4 mb-4">
            <a href="#" class="nav-item">
                <i class="fa-solid fa-user fa-bounce" style="color: #173963;"></i>
                <span class="ml-2 text-sm tracking-wide truncate text-cta">Usuarios</span>
            </a>
        </li>
        <li class=" pl-4 mb-4">
            <a href="#" class="nav-item">
                <i class="fa-solid fa-building fa-bounce" style="color: #939496;"></i>
                <span class="ml-2 text-sm tracking-wide truncate text-cta">Cuentas</span>
            </a>
        </li>

    </ul>
</aside>
