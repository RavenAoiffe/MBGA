const { series, src,dest, watch} = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const concat = require('gulp-concat');

const paths = {
    scss: 'src/scss/**/*.scss',
    img: 'src/img/**/*',
    js: 'src/js/**'
}
function css(){
    return src(paths.scss)
    .pipe( sass())
    .pipe( dest('./build/css')) 
}
function imagenes(){
    return src(paths.img)
    .pipe(cache(imagemin({optimizationLevel: 3})))
    .pipe(dest('build/img'))
}
function javascript(){
    return src(paths.js)
    .pipe(concat('bundle.js'))
    .pipe(dest('build/js'))
}
function watchArchivos(){
   watch(paths.scss, css)
   watch(paths.js,javascript)
}

exports.css = css;
exports.javascript = javascript;
exports.imagenes = imagenes;
exports.default = series(css,imagenes,watchArchivos);