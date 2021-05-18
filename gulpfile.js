const { series, src,dest, watch} = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');

function css(){
    return src('src/scss/**/*')
    .pipe( sass())
    .pipe( dest('./build/css')) 
}
function imagenes(){
    return src('src/img/**/*')
    .pipe(cache(imagemin({optimizationLevel: 3})))
    .pipe(dest('build/img'))
}
function watchArchivos(){
   watch('src/scss/**/*', css);
}

exports.css = css;
exports.imagenes = imagenes;
exports.default = series(css,imagenes,watchArchivos);