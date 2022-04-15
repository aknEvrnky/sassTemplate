const mix = require('laravel-mix');

mix.js('src/assets/js/app.js', 'public/js')
    .sass('src/assets/sass/app.scss', 'public/css').options({
    postCss: [
        require('postcss-import'),
        require('autoprefixer')
    ],
    processCssUrls: false
}).browserSync({
    proxy: '127.0.0.1:3000',
    files: [
        "./src/includes/*.php",
        "./src/pages/*.php",
    ]
});