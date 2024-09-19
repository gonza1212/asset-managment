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
                xss: {'460': '640px'},
            },
            colors: {
                'custom-dark-blue': '#316176',
                'custom-blue': '#79ECF3',
                'custom-gray-blue': '#4EB6BC',
                'custom-light-blue': '#B2D0DA',
                'custom-light-violet': '#ACCDFF',
                'custom-violet': '#4E59BE',
                'custom-green': '#79F3D6',
                'custom-red': '#F37979',
                'custom-light-red': '#DAB4B4',
                'custom-dark-red': '#CB5959',                                         
            },
            boxShadow: {
                'inner-lg': 'inset 0 4px 6px rgba(0, 0, 0, 0.1), inset 0 10px 15px rgba(0, 0, 0, 0.05)',
                'inner-md': 'inset 0 2px 4px rgba(0, 0, 0, 0.1), inset 0 6px 8px rgba(0, 0, 0, 0.05)',
            },
        },
    },

    plugins: [forms],
};
