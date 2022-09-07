const mix = require('laravel-mix');

var CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');
var VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');


var webpackConfig = {
    plugins: [
        new VuetifyLoaderPlugin(),
        new CaseSensitivePathsPlugin()
    ]
}

mix.webpackConfig(webpackConfig);

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
