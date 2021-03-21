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

mix.js("resources/js/app.js", "public/js").version();

mix.copyDirectory("node_modules/bootstrap/dist", "public/vendor/bootstrap");
mix.copyDirectory("node_modules/@fortawesome/fontawesome-free", "public/vendor/fontawesome-free");
mix.copyDirectory("node_modules/jquery/dist", "public/vendor/jquery");

mix.copyDirectory("node_modules/startbootstrap-sb-admin-2/css", "public/vendor/startbootstrap-sb-admin-2/css");
mix.copyDirectory("node_modules/startbootstrap-sb-admin-2/img", "public/vendor/startbootstrap-sb-admin-2/img");
mix.copyDirectory("node_modules/startbootstrap-sb-admin-2/js", "public/vendor/startbootstrap-sb-admin-2/js");

mix.sass("resources/sass/style.scss", "public/css").version();
