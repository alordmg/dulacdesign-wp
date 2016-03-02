// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
//var php = require('gulp-connect-php');
//var browserSync = require('browser-sync').create();

// Serveur PHP
gulp.task('php', function(callback) {
    php.server({
      port: 8888
    }, callback);
});

// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: '127.0.0.1:8888',
        port: 8889,
    });
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest(''));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('static/*.js')
        .pipe(concat('site.js'))
        .pipe(gulp.dest(''))
        .pipe(rename('site.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(''));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('static/*.js', ['scripts']);
    gulp.watch('scss/style.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);
