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


require('laravel-mix-tailwind');
mix.js("resources/js/app.js", "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/dt.css")
    .tailwind("./tailwind.config.js")
    .sourceMaps()
    .browserSync({
        proxy: 'https://demo-livewire-datatables.test',
        https: true,
    });
if (mix.inProduction()) {
    mix.version();
}
