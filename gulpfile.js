import { task, src, dest, watch } from "gulp";
import * as dartSass from 'sass';
import gulpSass from "gulp-sass";

const sass = gulpSass(dartSass);

function css(done) {
    src("./Html/Scss/**/*.scss")
        .pipe(sass())
        .pipe(dest("./Html/Css"));
    done();
}

task("dev", done => {
    watch("./Html/Scss/**/*.scss", css);
    done();
});