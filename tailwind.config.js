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
          colors: {
            'blue': '#22303F',
            'teal': '#56678c',
            'beige': '#f5efeb',
            'sky-blue': '#c8d9e6',
            'white': '#ffffff',
          },
        },
      },
    plugins: [forms],
};
