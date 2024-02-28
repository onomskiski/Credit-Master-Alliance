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
                worksans: ['Work Sans', 'sans-serif'],  
            },
            colors: {
                btn: {
                    100: '#38a',
                    200: '#49c',
                    // overlay color for btn
                    300: '#49c4',
                },
                btntext: {
                    100: '#eee',
                    200: '#222',
                    
                    // colors for overlay button
                    300: '#15a',
                    400: '#335'
                },
                secondary: {
                    100: '#eee',
                    200: '#ddd',

                    //  bg for nav links
                    300: '#379a'
                },
                primary: {
                    100: '#555',
                    200: '#777',

                    // bg for transparent block
                    300: '#5552',
                    400: '#379'
                },
                accent: {
                    100: '#0AB'
                }
            }
        },
    },

    plugins: [forms, typography],
};
