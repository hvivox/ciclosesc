const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |mix.disableNotifications();
 mix.disableSuccessNotifications();
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.disableSuccessNotifications();
    //utilizado para acrescentar os arquivos na compilação / sourceMaps
    // mix.js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
    //mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    // mix.js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();

