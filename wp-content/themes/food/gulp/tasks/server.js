export function server() {
    app.plugins.browserSync.init({
        proxy: 'food.loc',
        notify: false
    });
}