var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

// Default task - Run with command 'gulp'
gulp.task('default', function() {
    console.log('Gulp funcionando...');
});

/*
 * Variables
 */
// Sass Source
var scssFiles = './assets/scss/style.scss';

// CSS destination
var cssDest = './assets/css';

// Options for development
var sassDevOptions = {
    outputStyle: 'expanded'
}

// Options for production
var sassProdOptions = {
    outputStyle: 'compressed'
}

// Task 'sassdev' - Run with command 'gulp sassdev'
gulp.task('sassdev', function() {
    return gulp.src(scssFiles)
        .pipe(sass(sassDevOptions).on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

// Task 'sassprod' - Run with command 'gulp sassprod'
gulp.task('sassprod', function() {
    return gulp.src(scssFiles)
        .pipe(sass(sassProdOptions).on('error', sass.logError))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
    gulp.watch(scssFiles, ['sassdev', 'sassprod']);
});

gulp.task('default', ['sassdev', 'sassprod', 'watch']);