let mix = require('laravel-mix');

mix.js('/wp-content/themes/pankart/resources/js/app.js', 'wp-content/themes/pankart/public/js')
    .sass('/wp-content/themes/pankart/resources/sass/theme.scss', 'wp-content/themes/pankart/public/css');