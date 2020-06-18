module.exports = function () {
    $.gulp.task('watch', () => {
        // HTML
        $.gulp.watch(`${$.dist}/*.html`).on('change', $.browserSync.reload);
        // NUNJUCKS
        $.gulp.watch([`${$.src}/pages/**/*.+(html|njk)`, `${$.src}/templates/**/*.+(html|njk)`], $.gulp.series('nunjucks'));
        // STATIC
        $.gulp.watch(`${$.src}/static/**/*.*`, $.gulp.series('static'));
        // SCSS
        $.gulp.watch(`${$.src + $.assets}/scss/**/*.scss`, $.gulp.series('scss'));
        // FONTS
        $.gulp.watch(`${$.src + $.assets}/fonts/**/*.ttf`, $.gulp.series('fonts:woff', 'fonts:woff2'));
        // SCRIPTS
        $.gulp.watch(`${$.src + $.assets}/js/**/*.js`, $.gulp.series('scripts'));
        // SCRIPTS:VENDOR
        $.gulp.watch(`${$.src + $.assets}/vendor/**/*.js`, $.gulp.series('scripts:vendor'));
        // IMAGES
        $.gulp.watch(`${$.src + $.assets}/img/*.${$.imgExt}`, $.gulp.series('images'));
        // IMAGES:DEV
        $.gulp.watch(`${$.src + $.assets}/dev-img/**/*.${$.imgExt}`, $.gulp.series('images:dev'));
        // SPRITE:CSS
        $.gulp.watch(`${$.src + $.assets}/img/css-sprite/**/*.svg`, $.gulp.series('sprite:css'));
        // SPRITE:HTML
        $.gulp.watch(`${$.src + $.assets}/img/html-sprite/**/*.svg`, $.gulp.series('sprite:html'));
    });
};