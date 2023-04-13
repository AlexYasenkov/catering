import del from 'del';

export function reset() {
    if (app.isDev) {
        return del([
            app.path.buildFolder + '/*',
            '!' + app.path.build.fonts
        ]);
    }
    if (app.isBuild) {
        return del(app.path.buildFolder);
    }
}