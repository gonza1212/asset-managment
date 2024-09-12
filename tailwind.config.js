import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xs: {'max': '640px'},
            },
            colors: {
                'custom-blue': '#79ECF3',
                'custom-dark-blue': '#4EB6BC',
                'custom-light-blue': '#B2D0DA',
                'custom-violet': '#ACCDFF',
                'custom-green': '#79F3D6',
                'custom-red': '#F37979',
                'custom-light-red': '#DAB4B4',                                         
            },
        },
    },

    plugins: [forms],
};
