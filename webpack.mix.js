const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('node_modules/bootstrap/scss/bootstrap.scss','public/assets/css/bootstrap.css')
    .scripts('node_modules/jquery/dist/jquery.js','public/assets/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/assets/js/bootstrap.bundle.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js','public/assets/js/bootstrap.bundle.min.js')
    .sourceMaps();
