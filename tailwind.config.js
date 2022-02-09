module.exports = {
  prefix: function (selector){
    if (selector === '.hidden') return 'tw-';
    return '';
  },
  content: [
    './**/*.php',
    './templates/**/*.php',
    './components/**/*.php',
    './components/animation/**/*',
  ],
  darkmode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: "#F4695B",
        secondary: "#1f5edb",
        "gray-primary": "#e6e6e6",
        "gray-secondary": "#f2f2f2",
        "dark-background": "#001d3a",
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
