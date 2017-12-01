"use strict";

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

// sass
gulp.task('sass', function(){
  return gulp.src('./src/scss/style.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('./dist/css'))
});
// concat and bundle js script files
gulp.task('scripts', function() {
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('bundle.js'))
    .pipe(gulp.dest('./dist/js'));
});
// gulp task watchers, sass and js scripts
gulp.task('watch', ['sass', 'scripts'], function (){
  gulp.watch('./src/scss/**/*.scss', ['sass']); 
  gulp.watch('src/js/**/*.js', ['scripts']);
  // Other watchers
});