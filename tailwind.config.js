/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontSize: {
                big: "clamp(2rem, 5vw, 7rem)",
                small: "clamp(1rem, 5vw, 2rem)",
            },
            fontFamily: {
                ArchivoBlack: ["Archivo Black"],
                Revalia: ["Revalia"],
            },
            backgroundSize: {
                auto: "auto 100%",
            },
            boxShadow: {
                "3xl": "rgb(0, 0, 0) 0px 20px 30px -10px",
            },
        },
    },
    plugins: [],
};
