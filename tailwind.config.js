/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './app/View/Components/**/*.php',
        './resources/**/*.blade.php',
    ],
    darkMode: ['variant', [
        '@media (prefers-color-scheme: dark) { &:not(.light *) }',
        '&:is(.dark *)',
    ]],
    theme: {
        extend: {
            textUnderlineOffset: {
                '6': '6px',
            },
        },
    },
    plugins: [],
}

