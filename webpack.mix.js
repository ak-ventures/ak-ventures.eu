let mix = require("laravel-mix");
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .vue({ version: 2 })
    .js('source/_assets/js/main.js', 'js').vue()
    .css('source/_assets/pcss/main.pcss', 'css/main.css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({ processCssUrls: false })
    .browserSync({
        server: 'build_local',
        files: ['build_local/**'],
    })
    .sourceMaps()
    .version();