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
// core app resources
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// custom admin template css
mix.styles([
    'resources/assets/css/admin.css',
], 'public/css/admin.css').version();

// custom user template css
mix.styles([
    'resources/assets/css/user.css',
], 'public/css/user.css').version();

// custom admin template js
mix.scripts([
    'resources/assets/js/admin.js',
], 'public/js/admin.js').version();