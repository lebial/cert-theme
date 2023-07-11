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
            screens: {
                '3xl': '1700px',
            },
            colors: {
                primary: "#F4695B",
                secondary: "#1f5edb",
                "light-blue": "#8dace8",
                "gray-primary": "#e6e6e6",
                "gray-secondary": "#f2f2f2",
                "gray-header": "#7e7e7e",
                "dark-background": "#001d3a",
                // "dark-blue-background": "#000f3a",
                "dark-blue-background": "#180f36",
                "light-blue-background": "#e8effb",
                "second-blue-background": "#05133a",
                "black-background": "#0b0d14",
                "secondary-black-background": "#121621",

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