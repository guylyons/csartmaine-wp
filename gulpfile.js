// Packages
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    lost = require('lost'),
    nano = require('gulp-cssnano'),
    postcss = require('gulp-postcss'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    babel = require('gulp-babel');

// Sass
gulp.task('sass', function () {
  return gulp.src('assets/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false}))
    .pipe(postcss([
      lost()
    ]))
    .pipe(nano())
    .pipe(gulp.dest('./assets/css'));
});

// Babel.js
gulp.task('babel', () => {
    return gulp.src('assets/src/app.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest('assets/js'));
});

gulp.task('watch', function () {
  gulp.watch('assets/sass/**/*.scss', ['sass']),
  gulp.watch('assets/src/**/*.js', ['babel']);
});

// BrowserSync
gulp.task('serve', ['browser-sync', 'watch']);

gulp.task('browser-sync', function () {
   var files = [
      '**/*.php',
      'assets/css/**/*.css',
      'assets/imgs/**/*',
      'assets/js/**/*.js'
   ];

   browserSync.init(files, {
      proxy: 'csartmaine.dev:8888',
      notify: false
   });
});

gulp.task('default', ['serve']);
