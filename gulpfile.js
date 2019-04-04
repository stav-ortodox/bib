	 var      gulp = require("gulp"),
			livereload = require("gulp-livereload"),
						sass = require("gulp-sass"),
		autoprefixer = require("gulp-autoprefixer"),
				cleanCSS = require("gulp-clean-css"),
					rename = require("gulp-rename");

	gulp.task('action', function() {
		gulp.src('css/style.css')
				.pipe(sass().on('error', sass.logError))
				.pipe(autoprefixer({
							browsers: ['last 2 versions'],
							cascade: false
					}))
				.pipe(gulp.dest('css/'))
				.pipe(cleanCSS({
						compatibility: 'ie8'
				}))
			.pipe(rename({
						suffix: '.min'
				}))
			.pipe(gulp.dest('css/'))
			.pipe(livereload());
	});
		gulp.task('default', function() {
		livereload.listen();
		gulp.watch('css/style.css', gulp.series('action'));
		//gulp.watch('.scss/stack/*.scss', ['action']);
		});