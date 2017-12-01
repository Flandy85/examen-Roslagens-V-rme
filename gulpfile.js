"use strict";

var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function(){
  return gulp.src('./src/scss/style.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('./dist/css'))
});



gulp.task('watch', ['sass'], function (){
  gulp.watch('./src/scss/**/*.scss', ['sass']); 
  
});