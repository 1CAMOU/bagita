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
        },
        gray: {
          '150': '#F2F2F2',
        }
      },
      width: {
        '95': '23rem',
        '100': '48.5rem',
        '95%': '96%',
      },
      height: {
        '100': '30rem',
      },
      zIndex: {
        'highest': '99999',
      },
      inset: {
        '27': '6.5rem',
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['checked'],
      borderColor: ['checked'],
    },
  },
  plugins: [],
}
