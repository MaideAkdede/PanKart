let mix = require('laravel-mix');

require('laravel-mix-pluton');

mix.pluton('wp-content/themes/pankart/resources/js/parts')
    .js('wp-content/themes/pankart/resources/js/app.js', 'wp-content/themes/pankart/public/js')
    .sass('wp-content/themes/pankart/resources/sass/theme.scss', 'wp-content/themes/pankart/public/css');
