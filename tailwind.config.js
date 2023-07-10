/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primaryBlu: '#0182F9',
                secondaryBlack: '#1C1C1C',
                tertiaryGrey: '#303030',
            }
        },
    },
    plugins: []
}
