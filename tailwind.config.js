const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js'),
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['PT Sans', 'sans-serif'],
            },
            colors: {
                btn: '#EA1D2C', // rojo (binswanger)
                tittle: '#545557', // gris oscuro
                subtittle: '#6D6E70', // gris 
                advice: '#939496', // gris claro
                textbtn: '#378AF0', // celeste (facility management)
                cta: '#173963', // azul (gpyc)
            },
            screens: {
                sm: '640px',   // Corresponde a smartphones en modo vertical
                md: '768px',   // Corresponde a smartphones en modo horizontal y algunas tabletas pequeñas
                lg: '1024px',  // Corresponde a tabletas y laptops pequeñas
                xl: '1280px',  // Corresponde a laptops grandes y algunos escritorios
                '2xl': '1536px' // Corresponde a escritorios grandes y pantallas de alta resolución
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('tailwind-scrollbar-hide'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    ]
};
