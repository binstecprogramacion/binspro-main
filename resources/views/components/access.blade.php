<div x-data="{ open: false }" class="md:hidden">
    <button @click="open = !open"
        class="flex items-center px-4 py-2 text-gray-800 bg-white border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
        <svg x-show="!open" class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </svg>
        <svg x-show="open" class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </svg>
    </button>
    <div x-show="open" class="absolute z-10 top-0 left-0 w-full">
        <div class="flex flex-col items-center justify-center w-full h-screen bg-white">
            <x-button type="submit" style="access" text="Iniciar Sesión" to="/login" />
            <x-button type="submit" style="request" text="Registrate" to="/register" />
        </div>
    </div>
</div>

<div class="hidden md:flex justify-end items-center">
    <ul class="flex space-x-4">

        <x-button type="submit" style="access" text="Iniciar Sesión" to="/login" />
        <x-button type="submit" style="request" text="Registrate" to="/register" />
        {{-- <a href="{{ route('login') }}">
            <li
                class="px-3 py-2 rounded-md text-gray-800 bg-white shadow-md hover:bg-blue-600 hover:text-white transition duration-200">
                Sign in
            </li>
        </a>
        <a href="{{ route('register') }}">
            <li
                class="flex items-center px-3 py-2 rounded-md text-gray-800 bg-white shadow-md hover:bg-red-500 hover:text-white transition duration-200">
                <span>Sign up</span>
                <svg class="w-3 h-3 fill-current text-gray-400 shrink-0 ml-2 -mr-1" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                        fill-rule="nonzero" />
                </svg>
            </li>
        </a> --}}
    </ul>
</div>
