const elixir = require('laravel-elixir');
var gulp = require('gulp');
var googleWebFonts = require('gulp-google-webfonts');
require('laravel-elixir-vue-2');

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

var options = { };

gulp.task('fonts', function () {
    return gulp.src('./fonts.list')
        .pipe(googleWebFonts(options))
        .pipe(gulp.dest('public/assets/fonts'))
        ;
});



elixir(mix => {
    mix.sass('app.scss', 'public/assets/css/main.css')
    .task('fonts')
    .webpack('app.js', 'public/assets/js/main.js')
    .scripts(['simbrief.apiv1.js'], 'public/assets/js/simbrief.apiv1.js');
});
