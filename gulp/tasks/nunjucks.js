module.exports = function () {
    $.gulp.task('nunjucks', () => {
        return $.gulp.src(`${$.src}/pages/**/*.+(html|njk)`)
        .pipe($.njkRender({
            path: [`${$.src}/templates/`],
            watch: true
        }))
        .pipe($.prettify({
            indent_size : 2
        }))
        .pipe($.rename({
            dirname: ""
        }))
        .pipe($.gulp.dest(`${$.dist}`));
    });
};