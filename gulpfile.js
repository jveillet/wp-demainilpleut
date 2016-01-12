'use strict';

var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

var CSS_DEST = 'css';
var JS_DEST  = 'js';

gulp.task('default', function() {
  // place code for your default task here
  return gulp.src('*.css')
        .pipe(cssnano())
        .pipe(rename({ extname: '.min.css' }))
        .pipe(gulp.dest(CSS_DEST));
});
