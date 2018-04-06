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

mix.js('resources/assets/js/app.js', 'public/js')
   .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')
   .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css')
   .copy('node_modules/normalize.css/normalize.css', 'public/css')
   .copy('node_modules/swiper/dist/css/swiper.min.css', 'public/css')
   .copy('node_modules/swiper/dist/js/swiper.min.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
