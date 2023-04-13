import fs from 'fs';
import fonter from 'gulp-fonter';
import ttf2woff2 from 'gulp-ttf2woff2';

export function otfToTtf() {
    return app.gulp.src(app.path.srcFolder + '/fonts/*.otf')
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: 'FONTS',
                message: 'Error: <%= error.message %>',
            })
        ))
        .pipe(fonter({
            formats: ['ttf']
        }))
        .pipe(app.gulp.dest(app.path.srcFolder + '/fonts/'))
}

export function ttfToWoff() {
    return app.gulp.src(app.path.srcFolder + '/fonts/*.ttf')
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: 'FONTS',
                message: 'Error: <%= error.message %>',
            })
        ))
        .pipe(fonter({
            formats: ['woff']
        }))
        .pipe(app.gulp.dest(app.path.build.fonts))
        .pipe(app.gulp.src(app.path.srcFolder + '/fonts/*.ttf'))
        .pipe(ttf2woff2())
        .pipe(app.gulp.dest(app.path.build.fonts))
        .pipe(app.gulp.src(app.path.srcFolder + '/fonts/*.{woff,woff2}'))
        .pipe(app.gulp.dest(app.path.build.fonts));
}

export function fontsStyle() {
    const fontsFile = app.path.srcFolder + '/scss/fonts.scss';
    const fontWeights = {
        thin: 100,
        extralight: 200,
        light: 300,
        regular: 400,
        medium: 500,
        semibold: 600,
        bold: 700,
        extrabold: 800,
        black: 900,
    };
    fs.readdir(app.path.build.fonts, function (err, fontsFiles) {
        if (!fontsFiles) {
            fs.unlink(fontsFile, cb);
            return;
        }
        if (fs.existsSync(fontsFile)) {
            console.log('File scss/fonts.scss is already exists. To update a file, you need to delete it.');
            return;
        }
        fs.writeFile(fontsFile, '', cb);
        let newFileOnly;
        for (let i = 0; i < fontsFiles.length; i++) {
            const fontFileName = fontsFiles[i].split('.')[0];
            if (newFileOnly !== fontFileName) {
                const fontName = fontFileName.split('-')[0] ? fontFileName.split('-')[0] : fontFileName;
                const fontWeight = fontWeights[fontFileName.split('-')[1].toLowerCase()] || fontWeights['regular'];
                fs.appendFile(fontsFile, `@font-face {\n\tfont-family: "${fontName}";\n\tfont-display: swap;\n\tsrc: url("../fonts/${fontFileName}.woff2") format("woff2"), url("../fonts/${fontFileName}.woff") format("woff");\n\tfont-weight: ${fontWeight};\n\tfont-style: normal;\n}\r\n`, cb);
                newFileOnly = fontFileName;
            }
        }
    });
    return app.gulp.src(app.path.srcFolder);
    function cb() {}
}