import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import webpcss from 'gulp-webpcss';
import autoprefixer from 'gulp-autoprefixer';
import groupCssMediaQueries from 'gulp-group-css-media-queries';

const sass = gulpSass(dartSass);

export function scss() {
    return app.gulp.src(app.path.src.scss)
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: 'SCSS',
                message: 'Error: <%= error.message %>'
            })
        ))
        .pipe(app.plugins.if(app.isDev, app.plugins.sourcemaps.init()))
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(app.plugins.if(
            app.isBuild,
            webpcss({
                webpClass: '.webp',
                noWebpClass: '.no-webp',
            })
        ))
        .pipe(app.plugins.if(app.isBuild, groupCssMediaQueries()))
        .pipe(app.plugins.replace(/@img\//g, '../img/'))
        .pipe(app.plugins.if(
            app.isBuild,
            autoprefixer({
                grid: true,
                overrideBrowserslist: ['last 3 versions'],
                cascade: true,
            })
        ))
        .pipe(app.gulp.dest(app.path.build.css))
        .pipe(cleanCSS())
        .pipe(app.plugins.rename({ extname: '.min.css' }))
        .pipe(app.plugins.if(
            app.isDev,
            app.plugins.sourcemaps.write('.', { includeContent: false })
        ))
        .pipe(app.gulp.dest(app.path.build.css))
        .pipe(app.plugins.browserSync.stream());
}