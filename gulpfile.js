var gulp = require('gulp'),
MinifyCSS = require('gulp-clean-css');
 

gulp.task('default', function() {
   return gulp.src('./23072016/templates/.default/assets/css/*.css')
    .pipe(MinifyCSS())
    .pipe(gulp.dest('./23072016/templates/.default/assets/css/'))
});