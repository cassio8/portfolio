// -----------------------------------------------------------------------------
// Vars
// -----------------------------------------------------------------------------
const pkg = require("./package.json");
const gulp = require("gulp");

// -----------------------------------------------------------------------------
// Load all plugins in "devDependencies" into the variable $
// -----------------------------------------------------------------------------
const $ = require("gulp-load-plugins")({
    pattern: ["*"],
    scope:   ["devDependencies"]
});

const onError = (err) => {
    console.log(err);
};

const banner = [
    "/* @project     <%= pkg.name %>",
    " * @author      <%= pkg.author %>",
    " * @version     <%= pkg.version %>",
    " * @build       " + $.moment().format("YYYY-MM-DD HH:mm") + "",
    " * @copyright   Copyright (c) " + $.moment().format("YYYY") + ", <%= pkg.copyright %>",
    " */"
].join("\n");


// -----------------------------------------------------------------------------
// scss - build folder
// -----------------------------------------------------------------------------
gulp.task("scss", () => {
    return gulp.src(pkg.paths.src.styles + pkg.vars.scssName)
        .pipe($.sassGlobImport())
        .pipe($.sass())
        .pipe(gulp.dest(pkg.paths.src.stylesDist));
});

// -----------------------------------------------------------------------------
// css task - combine & minimize any distribution CSS
// -----------------------------------------------------------------------------
gulp.task("css", ["scss"], () => {
    return gulp.src(pkg.globs.distCss)
        .pipe($.sourcemaps.init({loadMaps: true}))
        .pipe($.concat(pkg.vars.siteCssName))
        .pipe($.cssnano({
            discardComments: {
                removeAll: true
            },
            discardDuplicates: true,
            discardEmpty: true,
            minifyFontValues: true,
            minifySelectors: true
        }))
        .pipe($.header(banner, {pkg: pkg}))
        .pipe($.sourcemaps.write("./"))
        .pipe($.size({gzip: true, showFiles: true}))
        .pipe(gulp.dest(pkg.paths.build.css))
        .pipe($.filter("**/*.css"))
});


// -----------------------------------------------------------------------------
// js task - minimize any distribution Javascript
// -----------------------------------------------------------------------------
gulp.task("js", () => {
    return gulp.src(pkg.globs.distJs)
        .pipe($.sourcemaps.init({loadMaps: true}))
        .pipe($.concat(pkg.vars.siteJsName))
        .pipe($.if(["*.js", "!*.min.js"],
            $.uglify()
        ))
        .pipe($.header(banner, {pkg: pkg}))
        .pipe($.sourcemaps.write("./"))
        .pipe($.size({gzip: true, showFiles: true}))
        .pipe(gulp.dest(pkg.paths.build.js))
        .pipe($.filter("**/*.js"))
});


// -----------------------------------------------------------------------------
// Imagemin task
// -----------------------------------------------------------------------------
gulp.task("imagemin", () => {
    return gulp.src(pkg.paths.src.img + "**/*")
        .pipe($.imagemin({
            progressive: true,
            interlaced: true,
            optimizationLevel: 7,
            svgoPlugins: [{removeViewBox: false}],
            verbose: true
        }))
        .pipe(gulp.dest(pkg.paths.build.img));
});


// -----------------------------------------------------------------------------
// Copy fonts
// -----------------------------------------------------------------------------
gulp.task("fonts", () => {
    return gulp.src(pkg.paths.src.fonts + "**/*")
    .pipe(gulp.dest(pkg.paths.build.fonts))
});


// -----------------------------------------------------------------------------
// Default task
// -----------------------------------------------------------------------------
gulp.task("default", ["css", "js", "fonts", "imagemin"]);


// -----------------------------------------------------------------------------
// Default watch
// -----------------------------------------------------------------------------
gulp.task("watch", ["css", "js", "fonts", "imagemin"], () => {
    gulp.watch([pkg.paths.src.styles + "**"], ["css"]);
    gulp.watch([pkg.paths.src.js + "**"], ["js"]);
    gulp.watch([pkg.paths.src.fonts + "**/*"], ["fonts"]);
    gulp.watch([pkg.paths.src.img + "**"], ["imagemin"]);
});
