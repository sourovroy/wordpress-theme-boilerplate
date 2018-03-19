let mix = require('laravel-mix');

mix.js('assets/js/custom.js', 'assets/public/scripts.js')
	.sass('assets/css/custom.scss', 'assets/public/style.css')
	.setPublicPath('assets/public')
	.options({
		processCssUrls: false
	});