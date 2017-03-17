const { mix } = require('laravel-mix');

mix
    .copy('node_modules/admin-lte/dist/img/boxed-bg.jpg', 'node_modules/admin-lte/build/img/boxed-bg.jpg')
    .copy('node_modules/font-awesome/fonts', 'public/assets/fonts')

    // In first time
    .less('resources/assets/less/basic-template.less', 'public/assets/css/theme.css')

    .sass('resources/assets/sass/app.scss', 'public/assets/css')
    .styles([
        'node_modules/font-awesome/css/font-awesome.css',
        'node_modules/select2/dist/css/select2.css',
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
        'resources/assets/vendors/form.css',
    ], 'public/assets/css/core.css')

    .scripts([
        'node_modules/admin-lte/dist/js/app.js',
        'node_modules/select2/dist/js/select2.min.js',
        'node_modules/select2/dist/js/i18n/pt-BR.js',
        'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
        'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
        'resources/assets/js/app.js'
    ], 'public/assets/js/app.js');


