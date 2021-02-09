const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts(['resources/js/jquery-2.1.4.min.js','resources/js/bootstrap.min.js','resources/js/move-top.js','resources/js/easing.js'], 'public/js/all.js');
mix.styles(['public/css/style.css','public/css/swipebox.css','public/css/bootstrap.min.css',], 'public/css/all.css');
