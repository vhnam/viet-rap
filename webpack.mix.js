let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory('resources/assets/img', 'public/img')

    .js('resources/assets/js/bootstrap.js', 'public/js')
    .js('resources/assets/js/pages/homepage.js', 'public/js')
    .js('resources/assets/js/pages/artists.js', 'public/js')

    .sass('resources/assets/sass/bootstrap.scss', 'public/css')
    .sass('resources/assets/sass/components.scss', 'public/css')
    .sass('resources/assets/sass/pages/homepage.scss', 'public/css')
    .sass('resources/assets/sass/pages/artists.scss', 'public/css')
;
