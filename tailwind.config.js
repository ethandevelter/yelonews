import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: {
                'g-blue': '#001D45',
                'gd-blue': '#00060E',
            },
            backgroundImage: {
                /*'gradient-darkest-to-darker': 'linear-gradient(to top, #00060E, #001D45)',*/
                'gradient-darkest-to-darker': 'linear-gradient(to top, #000, #001D45)',

            },
            height: {
                '12%': '12%',
                '30pr': '30pr',
            },
        },
    },

    plugins: [forms, typography],
};
