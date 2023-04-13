import gulp from 'gulp';
import { path } from './gulp/config/path.js';
import { plugins } from './gulp/config/plugins.js';
import { reset } from './gulp/tasks/reset.js';
import { scss } from './gulp/tasks/scss.js';
import { js } from './gulp/tasks/javascript.js';
import { images } from './gulp/tasks/images.js';
import { server } from './gulp/tasks/server.js';
import { otfToTtf, ttfToWoff, fontsStyle } from './gulp/tasks/fonts.js';

global.app = {
    isBuild: process.argv.includes('--build'),
    isDev: !process.argv.includes('--build'),
    isFonts: process.argv.includes('--fonts'),
    gulp: gulp,
    path: path,
    plugins: plugins
}

function watcher() {
    gulp.watch(path.watch.scss, scss);
    gulp.watch(path.watch.js, js);
    gulp.watch(path.watch.img, images);
}

const mainTasks = gulp.parallel(scss, js, images);

export const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle);

export const build = gulp.series(reset, fonts, mainTasks);

const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server));

gulp.task('default', dev);