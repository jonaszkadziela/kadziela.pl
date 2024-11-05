/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './app/View/Components/**/*.php',
        './resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            textUnderlineOffset: {
                '6': '6px',
            },
        },
    },
    plugins: [],
}

