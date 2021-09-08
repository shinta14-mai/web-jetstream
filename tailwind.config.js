const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              'blue-gray': colors.blueGray,
              'cool-gray': colors.coolGray,
              'true-gray': colors.trueGray,
              'warm-gray': colors.warmGray,
              'orange': colors.orange,
              'amber': colors.amber,
              'lime': colors.lime,
              'emerald': colors.emerald,
              'teal': colors.teal,
              'cyan': colors.cyan,
              'light-blue': colors.lightBlue,
              'indigo': colors.indigo,
              'violet': colors.violet,
              'purple': colors.purple,
              'fuchsia': colors.fuchsia,
              'pink': colors.pink,
              'rose': colors.rose,
              'gold': '#dbb043',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
