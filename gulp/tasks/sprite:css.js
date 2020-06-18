module.exports = function () {
    $.gulp.task('sprite:css', () => {
        return $.gulp.src(`${$.src + $.assets}/img/css-sprite/**/*.svg`)
            .pipe($.plumber())
            .pipe($.svgmin({
                js2svg: {
                    pretty: true
                }
            }))
            .pipe($.svgSprite({
                mode: {
                    stack: {
                        sprite: '../css-sprite.svg'
                    }
                }
            }))
            .pipe($.cheerio({
                run: function ($) {
                    $('svg:first-child').removeAttr('viewBox');
                },
                parserOptions: {xmlMode: true}
            }))
            .pipe($.replace('&gt;', '>'))
            .pipe($.gulp.dest(`${$.dist}/img`))
            .pipe($.browserSync.stream());
    })
};