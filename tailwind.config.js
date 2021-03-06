module.exports = {
    content: [
        './**/*.php',
        './templates/**/*.php',
        './components/**/*.php',
        './components/animation/**/*',
        './components/platform/**/*',
    ],
    darkmode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: "#F4695B",
                secondary: "#1f5edb",
                "light-blue": "#8dace8",
                "gray-primary": "#e6e6e6",
                "gray-secondary": "#f2f2f2",
                "dark-background": "#001d3a",
                "dark-blue-background": "#011b3a",
                "second-blue-background": "#05133a",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}