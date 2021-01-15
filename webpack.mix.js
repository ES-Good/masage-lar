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

mix.js('resources/js/admin/app.js', 'public/js/admin-app.js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/other_script.js', 'public/js/other_script.js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/main.css', 'public/css/main.css')
    .postCss('resources/css/media.css', 'public/css/media.css');

if (mix.inProduction()) {
    mix.version().sourceMaps();
}
