var gulp = require('gulp')
var sass = require('gulp-sass')
var lost = require('lost')
var nano = require('gulp-cssnano')
var postcss = require('gulp-postcss')
var browserSync = require('browser-sync')
var autoprefixer = require('gulp-autoprefixer')

gulp.task('sass', function() {
  return gulp.src('assets/sass/**/*.scss')
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 3 versions'],
    cascade: false}))
    .pipe(postcss([
      lost()
    ]))
    .pipe(nano())
    .pipe(gulp.dest('./assets/css'))
})

gulp.task('watch', function() {
  gulp.watch('assets/sass/**/*.scss', ['sass'])
  gulp.watch('assets/src/**/*.js', ['babel'])
})

gulp.task('serve', ['browser-sync', 'watch'])

gulp.task('browser-sync', function() {
  var files = [
    '**/*.php',
    'assets/css/**/*.css',
    'assets/imgs/**/*',
    'assets/js/**/*.js'
  ]
  browserSync.init(files, {
    proxy: 'csartmaine.dev:8888',
    notify: false
  })
})

gulp.task('default', ['serve'])
