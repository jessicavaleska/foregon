var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

gulp.task('default', function() {
    console.log('Gulp funcionando...');
});

var scssFiles = './assets/scss/style.scss';

var cssDest = './assets/css';

var sassDevOptions = {
    outputStyle: 'expanded'
}

var sassProdOptions = {
    outputStyle: 'compressed'
}

gulp.task('sassdev', function() {
    return gulp.src(scssFiles)
        .pipe(sass(sassDevOptions).on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

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