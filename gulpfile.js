'use strict';
// (1) Глобальная область видимости
global.$ = {
    // (2) Плагины
    gulp:                      require('gulp'),
    qp:                        require('gulp-load-plugins')(),
    browserSync:               require('browser-sync').create(),
    sourcemaps:                require('gulp-sourcemaps'),
    sass:                      require('gulp-sass'),
    autoprefixer:              require('gulp-autoprefixer'),
    csso:                      require('gulp-csso'),
    concat:                    require('gulp-concat'),
    babel:                     require('gulp-babel'),
    imagemin:                  require('gulp-imagemin'),
    imageminJpegRecompress:    require('imagemin-jpeg-recompress'),
    pngquant:                  require('imagemin-pngquant'),
    rename:                    require('gulp-rename'),
    webp:                      require('gulp-webp'),
    changed:                   require('gulp-changed'),
    plumber:                   require('gulp-plumber'),
    svgmin:                    require('gulp-svgmin'),
    cheerio:                   require('gulp-cheerio'),
    replace:                   require('gulp-replace'),
    svgSprite:                 require('gulp-svg-sprite'),
    ttf2woff:                  require('gulp-ttf2woff'),
    ttf2woff2:                 require('gulp-ttf2woff2'),
    clean:                     require('gulp-clean'),
    prettify:                  require('gulp-html-prettify'),
    njkRender:                 require('gulp-nunjucks-render'),
    // (3) Путь до файла с выбранными тасками
    tasks:                     require('./gulp/main.js'),
    // (4) Точки входа и выхода
    dist:                      './public',
    src:                       './resources',
    assets:                    '/assets',
    // (5) Доп. переменные
    imgExt:                    '{svg,Svg,SVG,png,Png,PNG,jpg,Jpg,JPG,jpeg,Jpeg,JPEG,gif,Gif,GIF,bmp,BMP,Bmp}'
};

// (6) Подключение всех выбранных тасков
$.tasks.forEach(function (taskPath) {
    require(taskPath)();
});

// (7) Таск для запуска системы
$.gulp.task('default', $.gulp.series(
    // (8) Удаление всех собираемых папок
    $.gulp.parallel('clean'),
    // (9) Выполнение всех тасков
    $.gulp.parallel('scss', 'scripts', 'scripts:vendor', 'images', 'images:dev', 'sprite:css', 'sprite:html',
                    'fonts:woff', 'fonts:woff2', 'static', 'nunjucks'),
    // (10) Запуск ватчеров и сервера
    $.gulp.parallel('watch', 'serve')
));

// ================================================================================================================== //
// (1)  - Объект видимый во всех тасках.
// (2)  - Плагины используемые в тасках.
// (3)  - Файл ./gulp/main.js где подключаются такски используемые в проекте.
// (4)  - Точки входа и выхода. Если сруктура прокта отличается, то измените пути.
// (5)  - Доп. переменные. Если нужно опрокинуть переменные глобально.
// (6)  - Цикл подключающий все таски выбранные в (3).
// (7)  - Вызов таска командой "gulp" в терминале.
// (8)  - Удаление папок указанных в таске clean. Удаление производится для того, что бы если вдруг в папке dist
// были удаленны собранные файлы (таск можно опустить).
// (9)  - Выполнение всех тасков. После (8) собирает заного все папки с их содержимым. (должны быть выбраны все таски
// что и в (3)).
// (10) - Запуск ватчеров и сервера.
// ================================================================================================================== //
// TODO: Реализовать 1. lowerCase для названия изображений
// TODO: Реализовать 2. Таск PRODUCTION