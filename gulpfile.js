var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('sass', function() {
	gulp.src('resources/assets/sass/app.scss')
		.pipe(sass())
		.pipe(gulp.dest('public/css'))
});

gulp.task('styles_vendor', function() {
	gulp.src([
		'resources/assets/bower_components/bootstrap/dist/css/bootstrap.css',
		'resources/assets/bower_components/fontawesome/css/font-awesome.css',
		'resources/assets/css/jquery-jvectormap-2.0.4.css'
		])
		.pipe(concat('vendor.css'))
		.pipe(gulp.dest('public/css'))
});

gulp.task('scripts', function() {
	gulp.src([
		'resources/assets/js/app.js'
		])
		.pipe(gulp.dest('public/js'));
});

gulp.task('js_vendor', function() {
	gulp.src([
		'resources/assets/bower_components/jquery/dist/jquery.js',
		'resources/assets/bower_components/bootstrap/dist/js/bootstrap.js',
		'resources/assets/js/jquery-jvectormap-2.0.4.min.js',
		'resources/assets/js/jquery-jvectormap-world-mill-en.js'
		])
		.pipe(concat('vendor.js'))
		.pipe(gulp.dest('public/js'))
});

gulp.task('default', function() {
	gulp.watch(['resources/assets/sass/*.scss', 'resources/assets/sass/components/*.scss'], ['sass', 'styles_vendor', 'js_vendor']);
	gulp.watch('resources/assets/js/app.js', ['scripts']);
});