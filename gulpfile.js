var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    .copy("vendor/bower_components/jquery/dist/jquery.js", "public/js/jquery.js")
    .copy("vendor/bower_components/bootstrap/dist/js/bootstrap.js", "public/js/bootstrap.js")

    ;
});
