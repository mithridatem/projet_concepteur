/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}",
  "./*/*.{php,html,js}"],

  theme: {
    extend: {
      fontFamily:{
        caviar: ["caviar_dreamsregular"],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
