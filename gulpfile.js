'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
const babel = require('gulp-babel');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

var scss_folder = './resources/assets/sass/'
var js_folder = './resources/assets/js/';

var js_list = [
    'jquery.min.js',
    'bootstrap.min.js',
    'app.js'
].map(function (js) {
    return js_folder + js;
});

gulp.task('app.js', function () {
    return gulp
        .src(js_folder + 'main.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(rename("app.js"))
        .pipe(gulp.dest(js_folder));
});

gulp.task('js', ['app.js'], function () {
    return gulp
        .src(js_list)
        .pipe(concat('app.min.js'))
        .pipe(gulp.dest('./public/js'));
});

Elixir.extend('watchjs', function() {
    new Elixir.Task('watchjs', function(){
        return gulp
            .src(js_folder + 'main.js')
            .pipe(babel({
                presets: ['es2015']
            }))
            .pipe(rename("app.js"))
            .pipe(gulp.dest(js_folder));
    })
        .watch('./resources/assets/js/*.js');
});
gulp.task('watch', function () {
    gulp.watch(js_folder + 'main.js', ['js']);
});

elixir(function (mix) {

    mix.browserSync({
        proxy: 'shop.app'
    });

    mix.sass(scss_folder + 'app.scss', './public/css/app.css');
    //mix.sass(scss_folder + 'devices.scss', 'public/css/media.css');
    //mix.sass(scss_folder + 'app_simple.scss', 'public/css/app_s.css');

    mix.version([
        './public/css/app.css',
        //'./public/css/media.css'
    ]);

    mix.task('js',js_folder+'main.js');
    mix.watchjs();
});