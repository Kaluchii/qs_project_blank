//============================================================================================
// -- Переменные для настройки
//============================================================================================
const gulp              = require('gulp');
const concat            = require('gulp-concat');
const autoprefixer      = require('gulp-autoprefixer');
const cleanCSS          = require('gulp-clean-css');
const uglify            = require('gulp-uglify');
const browserSync       = require('browser-sync').create();
const plumber           = require('gulp-plumber');
const less              = require('gulp-less');
const rename            = require('gulp-rename');
const sourcemaps        = require('gulp-sourcemaps');
const imagemin          = require('gulp-imagemin');
const changeCase        = require('change-case');
const changed           = require('gulp-changed');
// НА РАСМОТРЕНИИ
const csscomb           = require('gulp-csscomb');


//============================================================================================
// -- РАЗРЕШЕНИЯ ИЗОБРОЖЕНИЙ
//============================================================================================
const image_ext = '{svg,Svg,SVG,png,Png,PNG,jpg,Jpg,JPG,jpeg,Jpeg,JPEG,gif,Gif,GIF,bmp,BMP,Bmp}';

//============================================================================================
// -- ПУТИ ДО ФАЙЛОВ
//============================================================================================
const components     = './resources/assets/components/',
	scripts          = './resources/assets/js/',
	base             = './resources/assets/base/',
	images           = './resources/assets/img/',
	pluginsOverlay   = './resources/assets/base/plugins_overlay/',
	vendor           = './resources/assets/vendor/',
	commonCss        = './resources/assets/base/common/',
	commonBlocks     = './resources/assets/base/common/blocks/',

	productionCss    = './public/css/',
	productionImg    = './public/img/',
	productionJs     = './public/js/',
	html             = './resources/views/front/',

	devImg           = [
		images + '**/*.' + image_ext,
        components + '**/*.' + image_ext
	],
	styleComponents  = [
		commonCss        + '*.less',
		base           	 + '*.less',
		vendor           + '**/*.css',
        vendor           + '**/*.less',
		pluginsOverlay   + '**/*.less',
        commonBlocks     + '**/*.less',
		components       + '**/*.less',
		'!' + components + '**/*.adaptive.less',
		'!' + commonBlocks + '**/*.adaptive.less',
		'!' + base + '**/*.adaptive.less',
		'!/**/d_*/*.*',
		'!/**/d_*.*'
	],
	adaptiveStyleComponents = [
		commonCss  + '*.less',
		commonBlocks  + '**/*.adaptive.less',
		components + '**/*.adaptive.less',
		base + '**/*.adaptive.less',
		'!/**/d_*/*.*',
		'!/**/d_*.*'
	],
	scriptComponents = [
		vendor     + '**/*.js',
        pluginsOverlay   + '**/*.js',
		scripts    + '**/*.js',
		components + '**/*.js',
		'!/**/d_*/*.*',
		'!/**/d_*.*'
	],
	imageDirs = [];

//============================================================================================
// -- Ватчеры файлов
//============================================================================================
function watch(){
	browserSync.init({
		browser: ["google-chrome"/*, "firefox"*/],
		proxy: 'http://127.0.0.1:8000',
		notify: false,
		reloadDelay: 100,
		serveStatic: [productionCss]
	});

	gulp.watch(styleComponents, styles);
	gulp.watch(adaptiveStyleComponents, stylesAdaptive);
	gulp.watch(scriptComponents, js);
	gulp.watch(devImg, image);
	gulp.watch(html).on('change', browserSync.reload);
}

gulp.task('watch', watch);

//============================================================================================
// -- Компиляция и обработка LESS
//============================================================================================
function styles() {
	return gulp.src(styleComponents)
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(concat('style.less'))
		.pipe(less())
		.pipe(autoprefixer({
            overrideBrowserslist: ['> 1%', 'last 2 versions', 'Firefox ESR'],
			cascade: false
		}))
		.pipe(rename('style.css'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(productionCss))
		.pipe(browserSync.stream());
}

function stylesAdaptive() {
	return gulp.src(adaptiveStyleComponents)
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(concat('adaptive.less'))
		.pipe(less())
		.pipe(autoprefixer({
            overrideBrowserslist: ['> 1%', 'last 2 versions', 'Firefox ESR'],
			cascade: false
		}))
		.pipe(rename('adaptive.css'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(productionCss))
		.pipe(browserSync.stream());
}

gulp.task('stylesAll', gulp.parallel(styles, stylesAdaptive));

//============================================================================================
// -- JS and PHP
//============================================================================================
function js() {
	return gulp.src(scriptComponents)
		.pipe(sourcemaps.init())
		.pipe(concat('scripts.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(productionJs))
		.pipe(browserSync.stream());
}

gulp.task('js', js);

//============================================================================================
// -- Оптимизация изображений
//============================================================================================
function image() {
	return gulp.src(devImg)
		.pipe(changed(productionImg))
		.pipe(plumber())
		.pipe(imagemin([
			imagemin.gifsicle({interlaced: true}),
			imagemin.jpegtran({progressive: true}),
			imagemin.optipng({optimizationLevel: 7}),
			imagemin.svgo({
				plugins: [
					{removeViewBox: true},
					{cleanupIDs: false}
				]
			})
		]))
		.pipe(rename(function (path) {
			path.basename = changeCase.lowerCase(path.basename);
			path.extname = changeCase.lowerCase(path.extname);
		}))
		.pipe(gulp.dest(productionImg))
		.pipe(browserSync.reload({
			stream: true
		}));
}

gulp.task('imageAll', gulp.parallel(image));

//============================================================================================
// -- PRODUCTION
//============================================================================================
function ProductionStyles(){
	return gulp.src(styleComponents)
		.pipe(plumber())
		.pipe(concat('style.less'))
		.pipe(less())
		.pipe(autoprefixer({
            overrideBrowserslist: ['> 1%', 'last 3 versions', 'Firefox ESR'],
			cascade: false
		}))
		.pipe(cleanCSS({
			level: 2
		}))
		.pipe(rename('style.css'))
		.pipe(gulp.dest(productionCss))
}

function ProductionStylesAdaptive() {
	return gulp.src(adaptiveStyleComponents)
		.pipe(plumber())
		.pipe(concat('adaptive.less'))
		.pipe(less())
		.pipe(autoprefixer({
            overrideBrowserslist: ['> 1%', 'last 3 versions', 'Firefox ESR'],
			cascade: false
		}))
		.pipe(rename('adaptive.css'))
		.pipe(cleanCSS({
			level: 2
		}))
		.pipe(gulp.dest(productionCss))
}

function ProductionScript(){
	return gulp.src(scriptComponents)
		.pipe(concat('scripts.js'))
		.pipe(uglify({
			toplevel: true
		}))
		.pipe(gulp.dest(productionJs))
}

gulp.task('production', gulp.parallel(ProductionStylesAdaptive, ProductionStyles, ProductionScript));

//============================================================================================

