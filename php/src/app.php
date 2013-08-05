<?php

/**
 * Load services and registers plugins
 */

use Monolog\Handler\StreamHandler;
use Monolog\Formatter\WildfireFormatter;

use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\MonologServiceProvider;
// use Silex\Provider\DoctrineServiceProvider;

$app->register(new MonologServiceProvider(), array(
  'monolog.logfile' => __DIR__.'/../resources/log/app.log',
  'monolog.name'    => 'app',
  'monolog.level'   => 300, // = Logger::WARNING
));

$app->register(new HttpCacheServiceProvider());

// MonologServiceProvider doesn't currently provide support for formatters
$app['monolog'] = $app->share($app->extend('monolog', function($monolog, $app) {
    $handler = new StreamHandler($app['monolog.logfile'], 'monolog.level');
    $handler->setFormatter(new WildfireFormatter());
    $monolog->popHandler();
    $monolog->pushHandler($handler);
    return $monolog;
}));

$app->register(new UrlGeneratorServiceProvider());

$app->register(new TwigServiceProvider(), array(
    'twig.options'        => array(
        'cache'            => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true
    ),
    // 'twig.form.templates' => array('form_div_layout.html.twig'),
    'twig.path'           => array(__DIR__ . '/../resources/views', __DIR__ . '/../resources/layouts')
));

// $app->register(new DoctrineServiceProvider());

// $app['lastfm.scrobbles'] = $app->share(function() use ($app) {
//   return new LastFM\Scrobbles($app);
// });

$app['testimonials'] = $app->share(function() use ($app) {
  return new Testimonials\Testimonials($app);
});
