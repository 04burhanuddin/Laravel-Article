const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'sans': ['Poppins', 'sans-serif'],
        },
        container: {
            center: true,
        },
        screens: {
            sm: "576px",
            "sm-max": { max: "576px" },
            md: "768px",
            "md-max": { max: "768px" },
            lg: "992px",
            "lg-max": { max: "992px" },
            xl: "1200px",
            "xl-max": { max: "1200px" },
            "2xl": "1320px",
            "2xl-max": { max: "1320px" },
        },
        extend: {},
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
