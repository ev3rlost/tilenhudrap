/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'concrete': "url('../images/background.jpg')",
        'tilen': "url('../images/tilen.png')"
      },
      fontFamily: {
        'prompt': ['Prompt', 'sans-serif'],
        'roboto': ['Roboto', 'sans-serif'],
        'hind': ['Hind Vadodara', 'sans-serif'],
        'rosarivo': ['Rosarivo', 'sans-serif'],
        'nunito': ['Nunito Sans', 'sans-serif'],
        'caveat': ['Caveat', 'sans-serif']
      },
      fontSize: {
        xxs: '.55rem'
      },
      colors: {
        brand: 'rgb(var(--color-brand) / <alpha-value>)'
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
