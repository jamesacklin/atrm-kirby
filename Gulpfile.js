var gulp = require('gulp');
    sass = require('gulp-sass');
    autoprefixer = require('gulp-autoprefixer');
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    browserSync = require('browser-sync').create();

gulp.task('styles', function(){
  gulp.src('./assets/sass/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./assets/css/'))
    .pipe(browserSync.stream());
});


gulp.task('scripts', function(){
  return gulp.src([
      // Throw all your JS depenencies in here from the bower_components folder
      './bower_components/jquery/dist/jquery.js',
      './assets/js/lib/site.js',
      './assets/js/lib/animated-gradient.js',
    ])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./assets/js/'))
    .pipe(rename('app.min.js'))
    .pipe(uglify()).on('error', function(error){
      console.log(err);
    })
    .pipe(gulp.dest('./assets/js/min/'))
    .pipe(browserSync.stream());
});


gulp.task('serve', ['styles', 'scripts'], function() {
  browserSync.init({
    // Run `php -S localhost:8000` in a background task to allow
    // Gulp + browserSync to serve the app via a proxy.
    proxy: "127.0.0.1:8000"
  });
  // All Sass files will compile, no matter where they are in the
  // 'sass' directory.
  gulp.watch('assets/sass/**/*.scss',['styles']);
  // Watch for changes on any PHP files anywhere.
  gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
