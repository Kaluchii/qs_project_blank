module.exports = function () {
    $.gulp.task('static', () => {
        return $.gulp.src(`${$.src}/static/**/*.*`)
            .pipe($.gulp.dest(`${$.dist}`))
            .pipe($.browserSync.stream());
    });
};