const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: 'media',
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          blue: '#64A6BD',
          violet: '#502274',
          red: '#BF1A2F',
          yellow: '#FAA916',
          pink: '#F283B6',
          green: '#2DB43D',
          grey: colors.trueGray,
          black: '#000000',
          white: '#FFFFFF',
        },
        extend: {
            fontFamily: {
                sans: ['"Nunito Sans"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
