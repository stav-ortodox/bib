 var      gulp = require("gulp"),
			ivereload = require("gulp-livereload"),
						sass = require("gulp-sass"),
		autoprefixer = require("gulp-autoprefixer"),
				cleanCSS = require("gulp-clean-css"),
					rename = require("gulp-rename");




gulp.task('mytask', async function() {
    console.log('Привет, я таск!');
});

	gulp.task('action', function() {
		gulp.src('.bib/scss/*css')
				.pipe(sass().on('error', sass.logError))
				.pipe(autoprefixer({
							browsers: ['last 2 versions'],
							cascade: false
					}))
				.pipe(gulp.dest('./bib/css/'))
				.pipe(cleanCSS({
						compatibility: 'ie8'
				}))
			.pipe(rename({
						suffix: '.min'
				}))
			.pipe(gulp.dest('./bib/css/'))
			.pipe(livereload());
	});
		gulp.task('default', function() {
		livereload.listen();
		gulp.watch('./bib/css/*.scss', ['action']);
		gulp.watch('./bib/scss/stack/*.scss', ['action']);
		});