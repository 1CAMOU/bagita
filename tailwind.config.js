module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        primary: {
          dark: '#31D076',
          DEFAULT: '#31E981',
          light: '#38FE8E',
        },
        secondary: {
          DEFAULT: '#383E66',
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
