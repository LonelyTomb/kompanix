const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/impact/animate.scss', 'public/css')
   .sass('resources/sass/impact/pe-icons.scss', 'public/css')
   .sass('resources/sass/impact/style.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css');
