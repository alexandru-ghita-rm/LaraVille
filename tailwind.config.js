/** @type {import('tailwindcss').Config} */

module.exports = {
    purge: {
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
            "./resources/css/*.css",
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {

            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                secondary: {
                    light: '#85d7ff',
                    DEFAULT: '#1fb6ff',
                    dark: '#009eeb',
                },
                brand: {
                    light: '#fc3659',
                    DEFAULT: '#EE284B',
                    dark: '#c71e3c',
                },
                third: {
                    darkest: '#1f2d3d',
                    dark: '#3c4858',
                    DEFAULT: '#c0ccda',
                    light: '#e0e6ed',
                    lightest: '#f9fafc',
                }
            }},
    },
    plugins: [],
};
