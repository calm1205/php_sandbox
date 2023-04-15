/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,php}'],
  theme: {
    extend: {
      colors: {
        primary: {
          exLight: '#EDF8FF',
          light: '#29B0FC',
          default: '#0894E3',
          dark: '#003350',
        },
      },
    },
  },
  plugins: [],
};
