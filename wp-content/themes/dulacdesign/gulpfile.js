// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

// autoprefixer options
var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// Compile Our Sass
gulp.task('sass', function() {
  return gulp.src('scss/style.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
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
