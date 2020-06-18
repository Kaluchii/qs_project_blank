module.exports = function () {
    $.gulp.task('sprite:html', () => {
        return $.gulp.src(`${$.src + $.assets}/img/html-sprite/**/*.svg`)
            .pipe($.plumber())
            .pipe($.svgmin({
                js2svg: {
                    pretty: true
                }
            }))
            .pipe($.cheerio({
                run: function ($) {
                    $('[fill]').removeAttr('fill');
                    $('[stroke]').removeAttr('stroke');
                    $('[style]').removeAttr('style');
                },
                parserOptions: { xmlMode: true }
            }))
            .pipe($.replace('&gt;', '>'))
            .pipe($.svgSprite({
                mode: {
                    symbol: {
                        sprite: '../html-sprite.svg'
                    }
                }
            }))
            .pipe($.gulp.dest(`${$.dist}/img`))
            .pipe($.browserSync.stream());
    })
};