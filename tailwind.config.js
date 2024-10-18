/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      perspective: {
        '400': '400px',
      },
      transformOrigin: {
        'top': '50% 0%',
      },

    },
  },
  plugins: [],
}

