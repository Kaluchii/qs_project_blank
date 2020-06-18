module.exports = function () {
    $.gulp.task('serve', () => {
        $.browserSync.init({
            server: {
                baseDir: `${$.dist}`
            }
        });
    });
};