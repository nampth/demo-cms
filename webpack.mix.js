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
let mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                query: {
                    presets: ['es2015']
                }
            }
        ],
        rules: [
            {
                use: {
                    loader: 'babel-loader',
                    options: {presets: ['es2015']}
                },
                test: /\.js$/,
                exclude: /node_modules/
            }
        ]
    }
});

mix.js([
    'resources/js/app.js',
    'resources/js/app.constants.js',
], 'public/js')
    .js('resources/js/pages/admin.users.js', 'public/js/admin.users.js')
    .js('resources/js/pages/admin.roles.js', 'public/js/admin.roles.js')
    .js('resources/js/pages/admin.permissions.js', 'public/js/admin.permissions.js')
    .js('resources/js/pages/frontend.home.js', 'public/js/frontend.home.js')
    .js('resources/js/pages/user.changepass.js', 'public/js/user.changepass.js')
    .extract(['vue']).version()
    .sass('resources/sass/app.scss', 'public/css').version();
//

