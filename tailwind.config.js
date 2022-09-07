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
                heading: ["'JetBrains Mono'", "sans-serif"],
            },
            colors: {
                primary: {
                    red: "#f4032b",
                    black: "#111111",
                    background: "#1E1E1E",
                },
                light: {
                    black: "#181818",
                    white: "#ffffff",
                    red: "#EF4040",
                },
                dark: {
                    black: "#000000",
                    white: "#c5c5c5",
                    red: "#c31925",
                },
            },
            backgroundImage: {
                iconArrowRightRed: "url('/img/arrowrightred.svg')",
                iconArrowRightWhite: "url('/img/arrowrightwhite.svg')",
            },
        },
    },
    plugins: [],
};
