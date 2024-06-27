/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary-white": "#FAF4F4" /* main background color */,
                "primary-black": "#1A1C1E" /* Seen in authentication form*/,
                "primary-grey": "#9B9B9B" /* 10% font */,
                "primary-green": "#14A27F" /* mainly buttons */,
                "primary-yellow": "#f2ac42",
                "primary-red": "#FF6076",
                "secondary-grey": "#383838" /* mainly border */,
                "secondary-black": "#0B0A08" /* the big black circle */,
            },
        },
    },
    plugins: [],
};
