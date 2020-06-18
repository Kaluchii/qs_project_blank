module.exports = function () {
    $.gulp.task('images:dev', () => {
        return $.gulp.src(`${$.src + $.assets}/dev-img/**/*.${$.imgExt}`)
            .pipe($.changed(`${$.dist}/dev-img`))
            .pipe($.gulp.dest(`${$.dist}/dev-img`))
            .pipe($.browserSync.stream());
    });
};