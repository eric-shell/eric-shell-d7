var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    minify = require('gulp-minify-css'),
    prefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
  gulp.src('../styles/scss/source.scss')
    .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
      .pipe(prefixer())
      .pipe(minify())
      .pipe(rename('styles.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('../styles'));
});

// gulp.task('js', function () {
//   gulp.src('../scripts/js/**/*.js')
//     .pipe(concat('scripts.js'))
//     .pipe(uglify())
//     .pipe(rename('scripts.min.js'))
//     .pipe(gulp.dest('../scripts'));
// });

gulp.task('default', function() {
  gulp.watch('../styles/scss/**/*.scss', ['sass']),
  gulp.watch('../scripts/js/**/*.js', ['js']);
});
