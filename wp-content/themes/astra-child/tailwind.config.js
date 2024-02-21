/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: { colors: {
      'i-primary': '#262424',
      'dark-grey': '#EBEBEB',
      'i-grey': '#505050',
      'bg-grey': '#1F2024',
      'light-grey': '#6D6D6D',
    },

    
    container: {
      screens: {
        'xl': '1320px',
        'lg': '1024px',
        'lg-mini': '1080px',
        'md': '768px',
        'sm': '640px',

      },
    },

    padding: {
      '100': '3rem',
      '60': '2rem',
    },



    fontSize: {
      '4xl': '1.875rem',
      '17': '1rem',
    },

   
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
    },

    
  },
},
plugins: [],
}

