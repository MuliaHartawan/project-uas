const path = require('path');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

const tailwindConfig = path.resolve(__dirname, 'tailwind.config.js')
mix.js('src/js/main.js', 'public/js')
    .sass('src/sass/main.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss(tailwindConfig)],
    })
    // .postCss("src/css/app.css", "public/css", [
    //     require("tailwindcss"),
    //    ]);

    // .setPublicPath('');