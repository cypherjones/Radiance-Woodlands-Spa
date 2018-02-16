var gulp = require('gulp');
var stylus = require('gulp-stylus');
var data = require('gulp-data');
var rename = require('gulp-rename');

gulp.task('stylus', function() {
	return gulp.src('./css/custom.styl')
		.pipe(stylus({
			compress: true,
		}))
		.pipe(rename('custom.min.css'))
		.pipe(gulp.dest('css/'));

});

gulp.task('watch', function() {
  gulp.watch('./css/*.styl', ['stylus']);
});

gulp.task('default', ['watch', 'stylus']);