const { mix } = require('laravel-mix');

mix
    .copy('node_modules/admin-lte/dist/img/boxed-bg.jpg', 'node_modules/admin-lte/build/img/boxed-bg.jpg')
    .less('resources/assets/less/basic-template.less', 'public/css/core.css')

    .sass('resources/assets/sass/app.scss', 'public/css')

    .scripts([
        'node_modules/admin-lte/dist/js/app.js',
        'resources/assets/js/app.js'
    ], 'public/js/app.js');


