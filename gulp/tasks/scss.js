module.exports = function () {
    const srcScss = [
        `${$.src + $.assets}/scss/variables/*.scss`,
        `${$.src + $.assets}/scss/base/*.scss`,
        `${$.src + $.assets}/vendor/**/*.css`,
        `${$.src + $.assets}/vendor/**/*.scss`,
        `${$.src + $.assets}/scss/plugins/**/*.scss`,
        `${$.src + $.assets}/scss/common/**/*.scss`,
        `${$.src + $.assets}/scss/*.scss`,
    ];

    $.gulp.task('scss', () => {
        return $.gulp.src(srcScss)
            .pipe($.sourcemaps.init())
            .pipe($.concat('style.scss'))
            .pipe($.sass().on('error', $.sass.logError))
            .pipe($.autoprefixer({
                overrideBrowserslist: ['> 1%', 'last 2 versions', 'Firefox ESR'],
                cascade: false
            }))
            .pipe($.csso())
            .pipe($.sourcemaps.write('./'))
            .pipe($.gulp.dest(`${$.dist}/css`))
            .pipe($.browserSync.stream());
    });
};