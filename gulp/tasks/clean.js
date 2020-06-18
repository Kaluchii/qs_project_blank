module.exports = function () {
    let folders = [
        `${$.dist}/css`,
        `${$.dist}/dev-img`,
        `${$.dist}/fonts`,
        `${$.dist}/img`,
        `${$.dist}/js`,
    ];

    $.gulp.task('clean', () => {
        return $.gulp.src(folders, { allowEmpty: true })
            .pipe($.clean())
    });
};