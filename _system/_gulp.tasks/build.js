 // REGISTER COMPONENTS ================================================================================================

var config = require('../../_config.json'),
    gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    imagemin = require('gulp-imagemin'),
    uncss = require('gulp-uncss'),
    uglify = require('gulp-uglify'),
    pngquant = require('imagemin-pngquant')
    ;

// END ================================================================================================================

// A. VARIABLES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

var EXPRESS_PORT = 4200;
var ROOT = '../' + config.siteSource;
var LIVERELOAD_PORT = 35729;

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END ================================================================================================================

// GULP TASK [BUILD] ==================================================================================================

// A. IMAGE OPTIMISING ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

gulp.task('min-images', function () {

    return gulp.src(ROOT + '/assets/images/**/*')

        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))

        .pipe(gulp.dest(ROOT + '/assets/images/')); 

});

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// B. UNCSS FILES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// Process SASS, JS and compress images

gulp.task('uncss', function () {

    // B.1. CSS cleanup Process

    return gulp.src([ROOT + '/assets/css/*.css'])

    .pipe(uncss({
            html: [ROOT + '/partials/**/*.html']
        }))
    .pipe(gulp.dest(ROOT + '/assets/css/'));

});

// B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// C. MINIFY FILES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// C.1. Minify components.js only -------------------------------------------------------------------------------------

gulp.task('jscomp', function () {


    gulp.src(ROOT + '/assets/js/components.js')

    .pipe(uglify())
    .pipe(gulp.dest(ROOT + '/assets/js/'));


});

// C.2. Minify app.js only --------------------------------------------------------------------------------------------

gulp.task('jsapp', function () {


    gulp.src(ROOT + '/assets/js/app.js')

    .pipe(uglify())
    .pipe(gulp.dest(ROOT + '/assets/js/'));


});


// C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// D. BUILD PROCESS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

gulp.task('build', function () {

    // D.1. MINIFY JS Process

    gulp.src([ROOT + '/assets/js/app.js', ROOT + '/assets/js/components.js'])

    .pipe(uglify())
    .pipe(gulp.dest(ROOT + '/assets/js/'))
    
    // D.1. MINIFY CSS Process

    gulp.src([ROOT + '/assets/css/*.css'])

    .pipe(minifycss())
    .pipe(gulp.dest(ROOT + '/assets/css'));

});

// D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END OF FILE ========================================================================================================