const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/views/**/*.php'
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    light: defaultTheme.colors.green[400],
                    DEFAULT: defaultTheme.colors.green[600],
                    dark: defaultTheme.colors.green[700]
                },
            },
        },
    },


    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("kutty")
    ],
};
