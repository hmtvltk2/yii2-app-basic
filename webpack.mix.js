let mix = require('laravel-mix');

const root = 'modules/main/assets';
mix.js(root + '/js/app.js', 'js')
    .sass(root + '/css/app.scss', 'css')
    .setPublicPath('web')
    .extract()
    .vue({ version: 3 });

