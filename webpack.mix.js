let mix = require('laravel-mix');

require('vuetifyjs-mix-extension');

mix.js('resources/js/app.js', 'js/').vuetify();
mix.sass('resources/scss/app.scss', 'css/');
