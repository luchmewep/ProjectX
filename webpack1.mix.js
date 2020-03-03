const mix = require('laravel-mix');

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

mix.js([
   'resources/vendors/mdbootstrap/js/jquery-3.4.1.min.js',
   // 'resources/vendors/mdbootstrap/js/popper.min.js',
	// 'resources/vendors/mdbootstrap/js/bootstrap.js',
	'resources/vendors/mdbootstrap/js/mdb.js',
	'resources/vendors/fontawesome/js/all.js',
   'resources/js/app.js'
	], 'public/js')
   .autoload({
        jquery: ['jquery', 'jQuery', '$', 'window.jQuery'],
        Popper: ['popper', 'Popper', 'popper.js'],
        popper: ['Popper', 'popper.js'],
   })
   // .extract(['resources/js/app.js'])
   .styles([
   	'resources/sass/app.scss',
   	'resources/vendors/mdbootstrap/css/bootstrap.css',
   	'resources/vendors/mdbootstrap/css/mdb.css',
   	'resources/vendors/fontawesome/css/all.css'
   ]
   , 'public/css');
