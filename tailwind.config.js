/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: ["Rubik", "sans-serif"],
                text: ["'Neue Machina'", "sans-serif"],
                heading: ["'Neue Montreal'", "sans-serif"],
            },
            colors: {
                primary: {
                    red: "#f4032b",
                    black: "#111111",
                },
                light: {
                    black: "#181818",
                    white: "#ffffff",
                },
                dark: {
                    black: "#000000",
                    white: "#c5c5c5",
                },
            },
        },
    },
    plugins: [],
};
