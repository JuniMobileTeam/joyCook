let mix = require('laravel-mix');
let ImageminPlugin = require('imagemin-webpack-plugin').default;

/*
  Config
*/
mix.webpackConfig({
  plugins: [
    new ImageminPlugin({
      pngquant: {
        quality: '95-100',
      },
      test: /\.(jpe?g|png|gif|svg)$/i,
    }),
  ],
})

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/all.scss', 'public/css')
   .copy('resources/assets/images', 'public/images', false);
