<?php

// error display and reporting
ini_set('display_errors', intval($app['debug']));
error_reporting(intval($app['debug']) ? -1 : 0);

// Cache
$app['cache.path'] = __DIR__ . '/../cache';

// Http cache
$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

// Twig cache
// $app['twig.options.cache'] = $app['cache.path'] . '/twig';
$app['twig.options.cache'] = false;

// assetic
$app['assetic.enabled'] = true;
$app['assetic.path_to_cache']       = $app['cache.path'] . '/assetic' ;
$app['assetic.path_to_web']         = __DIR__ . '/../../web/assets';
$app['assetic.input.path_to_assets']    = __DIR__ . '/../assets/';
$app['assetic.input.path_to_css']       = $app['assetic.input.path_to_assets'] . 'css/*.css';
$app['assetic.output.path_to_css']      = 'css/styles.css';
$app['assetic.input.path_to_js']        = array(
    $app['assetic.input.path_to_assets'] . 'js/bootstrap.min.js',
    $app['assetic.input.path_to_assets'] . 'js/script.js',
);
$app['assetic.output.path_to_js']       = 'js/scripts.js';
$app['assetic.filter.yui_compressor.path'] = '/usr/share/yui-compressor/yui-compressor.jar';

// Doctrine (db)
// $app['db.options'] = array(
//     'driver'   => 'pdo_mysql',
//     'host'     => 'localhost',
//     'dbname'   => 'lotsofcode',
//     'user'     => 'root',
//     'password' => 'iamking123',
// );

// Last.fm
// $app['lastfm.config'] = array(
//   'api_key' => '41d0276168213536ed2d08c24436feb5',
//   'user' => 'lotsofcode',
//   'format' => 'json',
// );

// $app['site.telephones'] = array(
//   'telBlack'      => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAAASAQMAAADlmIt9AAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAAGVJREFUCJljYKAAyNVV/nzAzC/HVvGBwZjtjLQBu+RmvrMzGIx5zhgYcEtulgOyzXkqDB8wS84zu/OBwVriTIIBM//mtLdANWA24+Y6kHqDM4cNmCU3swHZcgYVBx/wnwebSQEAAC1NIj1m9ygtAAAAAElFTkSuQmCC',
//   'telWhite'      => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAAASAQMAAADlmIt9AAAABlBMVEUAAAD///+l2Z/dAAAAAXRSTlMAQObYZgAAAGVJREFUCJljYKAAyNVV/nzAzC/HVvGBwZjtjLQBu+RmvrMzGIx5zhgYcEtulgOyzXkqDB8wS84zu/OBwVriTIIBM//mtLdANWA24+Y6kHqDM4cNmCU3swHZcgYVBx/wnwebSQEAAC1NIj1m9ygtAAAAAElFTkSuQmCC',
//   'telWhiteLarge' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAAASAQMAAACAdXkCAAAABlBMVEUAAAD///+l2Z/dAAAAAXRSTlMAQObYZgAAAJhJREFUGJVjYKAeYJN/fPznBwYJOX6Gg40PGPgZ0hKkJRgsjCUbDx82YJBsyDGQ4GGoSNxw+FiaBIPBgWMJBhIMEokz284YGzAYHGw+kFDAIGHcz3PG8AGDwWG2hANAWdmZM8Cyx3gMG3gYJBg33H9jJsEg2cNjzADkKm44ADKKX4ItjRmo2FiyAWQRmwTzMcYPDHVQZ5ACAI8nLumGXn1ZAAAAAElFTkSuQmCC'
// );

// $app['site.navigation'] = array(
//   'about' => array(
//     'url'=>'about.html',
//     'label'=>'About',
//     'footer_link' => false
//   ),
//   'testimonials' => array(
//     'url'=>'testimonials.html',
//     'label'=>'Testimonials',
//     'footer_link' => false
//   ),
//   'bookings`' => array(
//     'url'=>'booking-prices.html',
//     'label'=>'Prices',
//     'footer_link' => false
//   ),
//   'contact' => array(
//     'url'=>'contact.html',
//     'label'=>'Contact',
//     'footer_link' => false
//   ),
//   'sitemap' => array(
//     'url'=>'sitemap.html',
//     'label'=>'Sitemap',
//     'footer_link' => true,
//     'sitemap_hidden' => true
//   ),
//   'guitar-lessons-northampton' => array(
//     'url'=>'guitar-lessons-northampton.html',
//     'label'=>'Guitar Lessons Northampton',
//     'footer_link' => true
//   ),
//   'mobile-guitar-lessons' => array(
//     'url'=>'mobile-guitar-lessons.html',
//     'label'=>'Mobile Guitar Lessons',
//     'footer_link' => true
//   ),
//   'free-guitar-lessons' => array(
//     'url'=>'free-guitar-lessons.html',
//     'label'=>'Free Guitar Lessons',
//     'footer_link' => true
//   ),
// );
