<?php

// enable the debug mode
$app['debug'] = true;

// include the production configuration
require __DIR__.'/production.php';

// $app['db.options'] = array(
//     'driver'   => 'pdo_mysql',
//     'host'     => 'localhost',
//     'dbname'   => 'lotsofcode',
//     'user'     => 'root',
//     'password' => '',
// );
