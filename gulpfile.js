const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const watch = require("gulp-watch");
const fileinclude = require("gulp-file-include");
const del = require("del");
const autoprefixer = require("gulp-autoprefixer");
const group_media = require("gulp-group-css-media-queries");
const clean_css = require("gulp-clean-css");
const rename = require("gulp-rename");
const cssmin = require('gulp-cssmin');
const uglify = require("gulp-uglify-es").default;
const server = require("browser-sync").create();

gulp.task("style", function() {
  return gulp.src("wp-content/themes/template-theme/source/scss/style.scss")
  .pipe(sourcemaps.init())
  .pipe(sass().on("error", sass.logError))
  .pipe(sourcemaps.write("./"))
  .pipe(gulp.dest("wp-content/themes/template-theme/dist/css"))
  .pipe(server.stream())
});

gulp.task("minify-css", async function(){
    gulp.src(["wp-content/themes/template-theme/dist/css/style.css"])
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(group_media())
        .pipe(cssmin())
        .pipe(rename("main.min.css"))
        .pipe(gulp.dest("wp-content/themes/template-theme/dist/css"));
});

// JavaScript
// gulp.task('javascript', function() {
//   return gulp.src("./js/*.js")
//   .pipe(jshint())
//   .pipe(jshint.reporter('default'))
//   .pipe(gulp.dest("./js-build"));
// });

gulp.task("server", function () {
  server.init({
    proxy: "wp-site-template",
    notify: false,
  });
 

  gulp.watch("wp-content/themes/template-theme/source/scss/**/*.scss", gulp.series("style"));
  gulp.watch("wp-content/themes/template-theme/**/*.php").on("change", server.reload);
});
