"use strict";

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    htmlmin = require('gulp-htmlmin');

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
/*Compress all scss files in*/
gulp.task('css', function() {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass({outputStyle: "compressed"}))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./dist/css'));
});
/*Adds prefixes*/
gulp.task('default', function() {
	gulp.src('./src/scss/style.scss')
	.pipe(autoprefixer ({
		browsers: ['last 2 versions'], /*Will target the last two versions for each browsers*/
		cascade: false
	}))
	.pipe(gulp.dest('./dist/css'))
});

gulp.task('htmltask', function(){
  return gulp.src(['./*.html','./*.php'])
      .pipe(htmlmin({
        collapseWhitespace: true,
        ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/ ]
      }))
      .pipe(gulp.dest('./site'));
});
// gulp task watchers, sass and js scripts
gulp.task('watch', ['sass', 'scripts', 'default', 'css', 'htmltask'], function (){
  gulp.watch('./src/scss/**/*.scss', ['sass']); 
  gulp.watch('src/js/**/*.js', ['scripts']);
  // Other watchers
});