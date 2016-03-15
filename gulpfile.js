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
    mix.sass([
        'app.scss'
    ], 'public/assets/css');
});

elixir(function(mix) {
    mix.sass([
        'modules/CookieConsent/light-top.scss'
    ], 'public/assets/css/CookieConsent.css');
});

elixir(function(mix) {
    mix.version('assets/css/app.css');
});
