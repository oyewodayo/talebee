/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js}"],
  theme: {
    screens: {
      'smd': {'max': '767px'},
      // => @media (max-width: 767px) { ... }
    },
    extend: {},
  },
  plugins: [],
}