module.exports = function () {
    $.gulp.task('images', () => {
        return $.gulp.src(`${$.src + $.assets}/img/*.${$.imgExt}`)
            .pipe($.changed(`${$.dist}/img`))
            .pipe($.imagemin([
                $.imagemin.mozjpeg({progressive: true}),
                $.imageminJpegRecompress({
                    loops: 5,
                    min: 65,
                    max: 70,
                    quality:'medium'
                }),
                $.imagemin.svgo({
                    plugins: [
                        {removeViewBox: true},
                        {cleanupIDs: false}
                    ]
                }),
                $.imagemin.optipng({optimizationLevel: 3}),
                $.pngquant({quality: '65-70', speed: 5})
            ],{
                verbose: true
            }))
            .pipe($.gulp.dest(`${$.dist}/img`))
            .pipe($.webp())
            .pipe($.gulp.dest(`${$.dist}/img`))
            .pipe($.browserSync.stream());
    });
};