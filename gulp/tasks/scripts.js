module.exports = function () {
    $.gulp.task('scripts:vendor',() => {
        return $.gulp.src(`${$.src + $.assets}/vendor/**/*.js`)
            .pipe($.concat('vendor.js'))
            .pipe($.gulp.dest(`${$.dist}/js`))
            .pipe($.browserSync.stream());
    });

    $.gulp.task('scripts', () => {
        return $.gulp.src(`${$.src + $.assets}/js/**/*.js`)
            .pipe($.concat('script.js'))
            .pipe($.babel({
                presets: ['@babel/preset-env']
            }))
            .pipe($.gulp.dest(`${$.dist}/js`))
            .pipe($.browserSync.stream());
    });
};