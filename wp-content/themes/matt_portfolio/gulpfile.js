var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var rename = require('gulp-rename');

gulp.task('default', function() {

});

//compile sass to css
gulp.task('sass', function () {
	return gulp.src('./sass/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['last 2 versions'], cascade: false }))
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./dist/css/'))
		.pipe(cssnano())
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('./dist/css/'))
		.pipe(livereload());
});

//concat and minify necessary js
gulp.task('scripts', function() {
	return gulp.src(['./js/customizer.js', './js/navigation.js', './js/skip-link-fous-fix.js'])
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('./dist/js/'))
		.pipe(rename('scripts.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./dist/js/'))
		.pipe(livereload());
});

//livereload any php edits
gulp.task('php', function() {
	gulp.src('./*.php')
		.pipe(livereload());
});

gulp.task('watch', function () {
	livereload.listen();
	gulp.watch(['./sass/*.scss', './sass/**/*.scss'], ['sass'] );
	gulp.watch(['./js/*.js', './js/*/*.js'], ['scripts']);
	gulp.watch(['./*.php', './template-parts/*.php', './templates/*.php'], ['php']);
});