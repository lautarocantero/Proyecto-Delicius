

const { src , dest, watch }= require('gulp');
const sass = require('gulp-sass');

//rutas 

function css (done ){//inecesario
    return src("./static/scss/app.scss")
        .pipe( sass() )
        .pipe( dest('./static/css') )
}

function minificarcss(){
    return src("./static/scss/app.scss")
        .pipe( sass({
            outputStyle: 'compressed'
        }) )
        .pipe( dest('./static/css') )
}


function watchArchivos(){
    watch("./static/scss/app.scss",css);
}

exports.css = css;
exports.minificarcss = minificarcss;
exports.watchArchivos = watchArchivos;
// exports.default = series(css,watchArchivos);
