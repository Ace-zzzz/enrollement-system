/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'green' : '#337F3A',
        'lightGreen' : '#07BD19',
      }
    },
  },
  plugins: [],
}

