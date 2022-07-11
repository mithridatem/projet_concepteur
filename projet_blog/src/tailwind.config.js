/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}",
  "./*/*.{php,html,js}"],

  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
