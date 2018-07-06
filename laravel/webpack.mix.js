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

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
                Popper: ['popper.js', 'default'],
            })
        ]
    };
});


mix.js('laravel/resources/assets/js/app.js', '/js')
    .sass('laravel/resources/assets/sass/app.scss', '/css')
    .copyDirectory('laravel/resources/assets/static/images','/images')
    .browserSync('laradminator.local')
    .version()
    .sourceMaps();
