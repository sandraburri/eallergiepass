const mix = require('laravel-mix');
require('laravel-mix-copy-watched');

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css');


mix.copyWatched('spa/dist/.nojekyll', 'public/.nojekyll')
mix.copyWatched('spa/dist/200.html', 'public/200.html')
mix.copyWatched('spa/dist/icon.png', 'public/icon.png')
mix.copyWatched('spa/dist/sw.js', 'public/sw.js')
mix.copyWatched('spa/dist/index.html', 'resources/views/welcome.blade.php')

mix.copyWatched(
    'spa/dist/_nuxt/**/*',
    'public/_nuxt',
    { base: 'public/_nuxt' }
);
