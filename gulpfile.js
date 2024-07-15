const { src, dest, watch, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function css(done) {
    src("src/scss/**/*.scss")
        .pipe(sass())
        .pipe(dest("build/css"));

    done();
}

function js(done) {
    src("src/js/*.js")
        .pipe(dest("build/js"));
    done();
}

function dev(done) {
    watch("src/scss/**/*.scss", css);
    watch("src/js/*.js", js);
    done();
}

exports.dev = parallel(dev, js);