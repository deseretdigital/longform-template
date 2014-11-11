var gulp = require('gulp'),
    bower = require('gulp-bower'),
    sass = require('gulp-sass'),
    shell = require('gulp-shell');

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest('lib'))
});

gulp.task('sass', function () {
    gulp.src('./scss/app.scss')
        .pipe(sass({
            includePaths: ['scss','lib/foundation/scss', 'lib/normalize-css'],
            errLogToConsole: true
        }))
        .pipe(gulp.dest('./style'));
});

// Watch files
gulp.task('watch', function(event) {
    gulp.watch('scss/*.scss', ['sass']);
});

gulp.task('server', shell.task([
        'APPLICATION_ENV=dev php -d variables_order=EGPCS -S dev.cougarfan.com:8000'
    ],{
        cwd: './web'
    }
));

gulp.task('build', ['bower', 'sass']);

gulp.task('default', ['sass', 'watch', 'server']);
