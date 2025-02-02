/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.antlers.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
    ],

    theme: {
        extend: {
            fontFamily: {
                inter: ["InterVariable", "sans-serif"],
            },
        },
    },

    plugins: [require("@tailwindcss/typography")],
};
