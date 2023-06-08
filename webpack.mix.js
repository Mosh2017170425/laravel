let mix = require('laravel-mix');

mix.js('resource/js/app.js', 'public/js').react().sass("resource/sass/app.scss","public/css");

