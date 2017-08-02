let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/assets/js/app.js', 'public/js')
   //.sass('resources/assets/sass/app.scss', 'public/css');
   mix.styles([
   'public/assets/css/bootstrap.min.css',
   'public/assets/css/smartadmin-production-plugin.min.css',
   'public/assets/css/smartadmin-production.min.css',
   'public/assets/css/smartadmin-skins.min.css',
   'public/assets/css/smartadmin-rtl.min.css',
   'public/assets/css/font-awesome.min.css',
   'public/assets/css/your_style.css',
   ],'public/css/all.css');
   mix.scripts([
   	'public/assets/js/libs/jquery-ui-1.10.3.min.js',
   	'public/assets/js/libs/jquery-2.1.1.min.js',
   	'public/assets/js/bootstrap/bootstrap.min.js',
   	'public/assets/js/app.config.seed.js',
   	'public/assets/js/app.seed.js','public/assets/js/plugin/moment/moment.min.js',
      'public/assets/js/plugin/chartjs/chart.min.js','public/assets/js/plugin/highchartTable/jquery.highchartTable.min.js','public/assets/js/plugin/highChartCore/highcharts-custom.min.js'], 'public/js/all.js').sourceMaps();
      mix.sass('resources/assets/sass/app.scss', 'public/css');
      mix.browserSync('http://127.0.0.1:8000');
