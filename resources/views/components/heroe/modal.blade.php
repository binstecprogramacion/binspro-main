{{-- containar imgs flex w h img w-0 flex-grow 1 object-fit cover opacity .8 transition .5s ease img :hover cursor crosshair opacity 1 w filter contrast (120%) --}}

<div class="flex w-96 h-96 overflow-visible relative" x-data="{ selected: 1 }" x-init="setInterval(() => selected = selected % 3 + 1, 3000)">
    <img src="{{ asset('img/slide/obreros_observando.jpeg') }}" alt="Cualquier cosa"
        class="absolute w-full h-full object-cover transition-all ease-in-out duration-1000 cursor-crosshair transform hover:scale-105"
        @mouseover="selected = 1"
        :class="{
            'opacity-100 translate-x-0 translate-y-0 z-10': selected ===
                1,
            'opacity-80 translate-x-8 translate-y-8': selected !== 1
        }" />
    <img src="{{ asset('img/slide/obreros_supervisando.jpg') }}" alt="Cualquier cosa"
        class="absolute w-full h-full object-cover transition-all ease-in-out duration-1000 cursor-crosshair transform hover:scale-105"
        @mouseover="selected = 2"
        :class="{
            'opacity-100 translate-x-0 translate-y-0 z-10': selected ===
                2,
            'opacity-80 translate-x-16 translate-y-16': selected !== 2
        }" />
    <img src="{{ asset('img/slide/obreros_verificando.jpg') }}" alt="Cualquier cosa"
        class="absolute w-full h-full object-cover transition-all ease-in-out duration-1000 cursor-crosshair transform hover:scale-105"
        @mouseover="selected = 3"
        :class="{
            'opacity-100 translate-x-0 translate-y-0 z-10': selected ===
                3,
            'opacity-80 translate-x-24 translate-y-24': selected !== 3
        }" />
</div>
