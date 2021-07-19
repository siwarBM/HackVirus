var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/olympos/assets/';
elixir.config.publicPath = 'themes/olympos/assets/compiled/';

elixir(function(mix){

    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/training/assets/compiled/css/style.css',
        'themes/training/**/*.htm',
        'themes/training/assets/compiled/js/*.js'
    ]);

});
