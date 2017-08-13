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

    //mix.task('js',js_folder+'main.js');
    //mix.watchjs();
});