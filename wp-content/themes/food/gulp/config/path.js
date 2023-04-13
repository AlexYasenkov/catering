import * as nodePath from 'path';

const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = './assets';
const srcFolder = './src';

export const path = {
    build: {
        css: buildFolder + '/css/',
        js: buildFolder + '/js/',
        img: buildFolder + '/img/',
        fonts: buildFolder + '/fonts/',
    },
    src: {
        scss: srcFolder + '/scss/custom.scss',
        js: srcFolder + '/js/app.js',
        img: srcFolder + '/img/**/*.{jpg,jpeg,png,gif,ico,webp}',
        svg: srcFolder + '/img/**/*.svg',
    },
    watch: {
        scss: srcFolder + '/scss/**/*.scss',
        js: srcFolder + '/js/**/*.js',
        img: srcFolder + '/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp}',
    },
    buildFolder: buildFolder,
    srcFolder: srcFolder,
    rootFolder: rootFolder
}