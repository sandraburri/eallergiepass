const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css');


mix.copy('spa/dist/.nojekyll', 'public/.nojekyll')
mix.copy('spa/dist/200.html', 'public/200.html')
mix.copy('spa/dist/icon.png', 'public/icon.png')
mix.copy('spa/dist/sw.js', 'public/sw.js')
mix.copy('spa/dist/_nuxt', 'public/_nuxt')

mix.copy('spa/dist/index.html', 'resources/views/welcome.blade.php')
