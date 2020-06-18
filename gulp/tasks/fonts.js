module.exports = function () {
    $.gulp.task('fonts:woff', () => {
        return $.gulp.src(`${$.src + $.assets}/fonts/**/*.ttf`)
            .pipe($.ttf2woff())
            .pipe($.gulp.dest(`${$.dist}/fonts`))
            .pipe($.browserSync.stream());
    });

    $.gulp.task('fonts:woff2', () => {
        return $.gulp.src(`${$.src + $.assets}/fonts/**/*.ttf`)
            .pipe($.ttf2woff2())
            .pipe($.gulp.dest(`${$.dist}/fonts`))
            .pipe($.browserSync.stream());
    });
};