{{-- El controlador es Sede Input --}}

<div x-data="{ sede: '', sedes: [] }">
    <div class="flex flex-row items-center p-1 gap-1">
        <x-input x-model="sede" @keydown.enter.prevent="sede && sedes.push(sede) && (sede = '')" id="sede"
            class="block mt-1 w-full" type="text" name="sede" required />
        <button @click="sede && sedes.push(sede) && (sede = '')"
            class="px-3 py-1 bg-blue-600 text-white rounded">Agregar</button>

    </div>
    <div class="flex flex-wrap mt-2">
        <template x-for="(sede, index) in sedes" :key="index">
            <span class="bg-blue-200 text-blue-700 px-2 py-1 rounded mr-1 mt-1 flex items-center">
                <span x-text="sede"></span>
                <button @click="sedes.splice(index, 1)"
                    class="ml-1 text-blue-700 hover:text-blue-900 cursor-pointer">&times;</button>
            </span>
        </template>
    </div>
</div>
