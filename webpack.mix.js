let mix = require('laravel-mix');

mix
.js('src/vue.js', 'dir/vue.js')
.sass('src/style.scss', 'dir/style.css')
.options({
  processCssUrls: false
}).vue();
