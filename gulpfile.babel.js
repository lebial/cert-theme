import yargs from 'yargs';
import gulp from 'gulp';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourceMaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from 'browser-sync';
import zip from 'gulp-zip';
import info from './package.json';
import postcss from 'gulp-postcss';
import tailwindcss from 'tailwindcss';

const server = browserSync.create();
const sass = require('gulp-sass')(require('sass'));
const PRODUCTION = yargs.argv.prod;


const paths = {
    styles: {
        src: ['src/assets/styles/bundle.scss', 'src/assets/styles/admin.scss'],
        dest: 'dist/assets/css'
    },
    images: {
        src: ['src/assets/images/**/*.{jpg, jpeg, png, svg, gif}', '[src/assets/images/footer/**/*.jpg, jpeg, png, svg, gif}'],
        dest: 'dist/assets/images'
    },
    scripts: {
        src: ['src/assets/js/bundle.js', 'src/assets/js/admin.js'],
        dest: 'dist/assets/js'
    },
    other: {
        src: ['src/assets/**/*', '!src/assets/{js,scss}', '!src/assets/{js,scss}/**/*'],
        dest: 'dist/assets'
    },
    package: {
        src: ['**/*', '!.vscode', '!node_modules{,/**}', '!packaged{,/**}', '!src{,/**}', '!.babelrc', '!.gitignore', '!gulpfile.babel.js', '!package.json', '!package-lock.json', '!assets'],
        dest: 'packaged'
    }
}

export const serve = (cb) => {
    server.init({
       proxy: "http://localhost/web3.0/",
    //    proxy: "http://localhost",
    });
    cb();
}

export const reload = cb => {
    server.reload();
    cb();
}

export const clean = () => del(['dist']);

export const styles = (cb) => {
    return gulp.src(paths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourceMaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            tailwindcss('./tailwind.config.js'),
            require('autoprefixer')
        ]))
        .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
        .pipe(gulpif(!PRODUCTION, sourceMaps.write()))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(server.stream());
}

export const images = (cb) => {
    return gulp.src(paths.images.src)
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(gulp.dest(paths.images.dest));
}

export const copy = (cb) => {
    return gulp.src(paths.other.src)
        .pipe(gulp.dest(paths.other.dest));
}

export const scripts = () => gulp.src(paths.scripts.src)
    .pipe(named())
    .pipe(webpack({
        module: {
            rules: [{
                test: /\.js$/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        compact: false
                    }
                }
            }],
        },
        output: {
            filename: '[name].js',
        },
        externals: {
            jquery: 'jQuery',
        },
        devtool: !PRODUCTION ? 'inline-source-map' : false,
        mode: PRODUCTION ? 'production' : 'development',
    }))
    .pipe(gulp.dest(paths.scripts.dest));

export const watch = (cb) => {
    gulp.watch('src/assets/styles/**/*.scss', styles);
    gulp.watch('src/assets/js/**/*.js', gulp.series(scripts, reload));
    gulp.watch('**/*.php', gulp.series(reload, styles));
    gulp.watch(paths.images.src, gulp.series(images, reload));
    gulp.watch(paths.other.src, gulp.series(copy, reload));
}

export const compress = () => gulp.src(paths.package.src)
    .pipe(zip(`${info.name}.zip`))
    .pipe(gulp.dest(paths.package.dest));

export const dev = gulp.series(clean, gulp.parallel(styles, scripts, images, copy), serve, watch);
export const build = gulp.series(clean, gulp.parallel(styles, scripts, images, copy));
export const bundle = gulp.series(build, compress);

export default dev;
