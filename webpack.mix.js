const mix = require('laravel-mix');
const Clean = require('clean-webpack-plugin');
const mixCopyWatched = require('laravel-mix-copy-watched');

mix.webpackConfig({
    plugins: [
        new Clean({
            cleanOnceBeforeBuildPatterns: [
                'public/_nuxt'
            ],
            verbose: true
        })
    ],
});

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css');

let spaSource = "spa/dist/";
let spaTarget = "public/spa/";
mix.copyWatched(`${spaSource}.nojekyll`, `${spaTarget}.nojekyll`)
mix.copyWatched(`${spaSource}200.html`, `${spaTarget}/200.html`)
mix.copyWatched(`${spaSource}icon.png`, `${spaTarget}/icon.png`)
mix.copyWatched(`${spaSource}sw.js`, `${spaTarget}/sw.js`)
mix.copyWatched(`${spaSource}index.html`, `${spaTarget}/index.html`)

mix.copyWatched(`${spaSource}_nuxt/**/*.js(on)`, `${spaTarget}/_nuxt/`, { base: '' });
mix.copyWatched(`${spaSource}_nuxt/**/*.js`, `${spaTarget}/_nuxt/`, { base: '' });
mix.copyWatched(`${spaSource}_nuxt/**/icons/*`,  `${spaTarget}/_nuxt/icons/`,  { base: '' });


