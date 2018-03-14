let mix = require('laravel-mix');

mix.js('assets/js/custom.js', 'assets/public/scripts.js');

mix.sass('assets/css/custom.scss', 'assets/public/style.css');