const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/views/**/*.php'
    ],

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("kutty")
    ],
};
