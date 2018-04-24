let mix = require('laravel-mix');

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
    .sourceMaps()
}

mix.js('assets/js/custom.js', 'assets/public/scripts.js')
	.sass('assets/css/custom.scss', 'assets/public/style.css')
	.setPublicPath('assets/public')
	.options({
		processCssUrls: false
	});