import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    purge: {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
        options: {
            safelist: [
                'md:grid-cols-1', 'md:grid-cols-2', 'md:grid-cols-3', 'md:grid-cols-4',
                'md:grid-cols-5', 'md:grid-cols-6', 'md:grid-cols-7', 'md:grid-cols-8'
            ]
        },
    },

    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        colors: {
            current: 'currentColor',
            transparent: 'transparent',
            white: '#FFFFFF',
            black: '#090E34',
            dark: '#1D2144',
            primary: '#4A6CF7',
            yellow: '#FBB040',
            'body-color': '#848b9d',
            ...require('tailwindcss/colors')
        },
        screens: {
            sm: '540px',
            // => @media (min-width: 576px) { ... }

            md: '720px',
            // => @media (min-width: 768px) { ... }

            lg: '960px',
            // => @media (min-width: 992px) { ... }

            xl: '1140px',
            // => @media (min-width: 1200px) { ... }

            '2xl': '1320px',
            // => @media (min-width: 1400px) { ... }

            '3xl': '1400px',
        },
        extend: {
            fontFamily: {
                boxShadow: {
                    signUp: "0px 5px 10px rgba(4, 10, 34, 0.2)",
                    image: "0px 3px 30px rgba(9, 14, 52, 0.1)",
                    pricing: "0px 34px 68px rgba(0, 0, 0, 0.06)",
                    testimonial: "0px 8px 40px -10px rgba(9, 14, 52, 0.1)",
                    service: "0px 11px 41px -11px rgba(9, 14, 52, 0.1)",
                    blog: "0px 40px 150px -35px rgba(0, 0, 0, 0.05)",
                },
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
