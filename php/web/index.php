<?php

/*
 * Bootstrap / Front Controller
*/

// Ignore static files when running local php 5.4 web server
$sapi = php_sapi_name();
$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if ($sapi === 'cli-server' && is_file($filename)) {
    return false;
}

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// cli sapi then is't a dev machine (probably)
$app['environment'] = 'production';
if ($sapi === 'cli-server') {
  $app['environment'] = 'development';
}

require __DIR__.'/../resources/config/'.$app['environment'].'.php';

require __DIR__.'/../src/app.php';
require __DIR__.'/../src/controllers.php';

if ($app['debug']) {
  $app->run();
} else {
  $app['http_cache']->run();
}
