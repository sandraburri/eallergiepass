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

mix.copyWatched('spa/dist/.nojekyll', 'public/.nojekyll')
mix.copyWatched('spa/dist/200.html', 'public/200.html')
mix.copyWatched('spa/dist/icon.png', 'public/icon.png')
mix.copyWatched('spa/dist/sw.js', 'public/sw.js')
mix.copyWatched('spa/dist/index.html', 'resources/views/welcome.blade.php')

mix.copyWatched('spa/dist/_nuxt/**/*.js(on)', 'public/_nuxt/', { base: '' });
mix.copyWatched('spa/dist/_nuxt/**/*.js', 'public/_nuxt/', { base: '' });
mix.copyWatched('spa/dist/_nuxt/**/icons/*',  'public/_nuxt/icons/',  { base: '' });


