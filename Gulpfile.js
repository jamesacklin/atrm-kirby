var gulp = require('gulp');
    sass = require('gulp-sass');
    autoprefixer = require('gulp-autoprefixer');
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

gulp.task('serve', ['styles'], function() {
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
