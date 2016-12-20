var elixir = require('laravel-elixir');
// TODO add versioning
// TODO use .min files for production

elixir(function(mix) {
    mix.sass('app.scss')
    .copy("vendor/bower_components/bootstrap/dist/css/bootstrap.css", "resources/assets/css/bootstrap.css")
    .copy("vendor/bower_components/jquery/dist/jquery.js", "resources/js/jquery.js")
    .copy("vendor/bower_components/bootstrap/dist/js/bootstrap.js", "resources/js/bootstrap.js")
    ;
    mix.styles([
        'bootstrap.css',
        'style.css'
    ]);
    mix.scripts(
        ['jquery.js', 'bootstrap.js'],
        'public/js/script.js',
        'resources/js'
    );
});
