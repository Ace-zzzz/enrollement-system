/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'darkGreen': '#406843',
        'lightGreen': '#4D774E',
        'lighterGreen': '#9DC88D',
        'orangeYellow': '#F1B24A',
      }
    },
  },
  plugins: [],
}

