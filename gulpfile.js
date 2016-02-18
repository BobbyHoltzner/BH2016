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
    mix.styles([
      'sweetalert.css',
      'basic.css',
      'dropzone.css',
      'dashboard.css',
      'custom.css'
    ],'public/css/dashboard.css');
    mix.scripts('dashboard.js', 'public/js/dashboard.js');

    mix.styles([
      'frontend.css'
    ], 'public/frontend/css/main.css');

    mix.scripts([
      'frontend.js'
    ], 'public/frontend/js/main.js');
    mix.scriptsIn(
        'resources/assets/js/libs',
        'public/frontend/js/libs.js'
    );
    mix.browserify('app.js');
});
