import replace from 'gulp-replace';
import rename from 'gulp-rename';
import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
import newer from 'gulp-newer';
import ifPlugin from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import browserSync from 'browser-sync';

export const plugins = {
    replace: replace,
    rename: rename,
    plumber: plumber,
    notify: notify,
    newer: newer,
    if: ifPlugin,
    browserSync: browserSync,
    sourcemaps: sourcemaps
}