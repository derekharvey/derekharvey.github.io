<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Doctrine\DBAL\DriverManager;

$console = new Application('lotsofcode.com', '0.0.1');

$console
    ->register('doctrine:schema:show')
    ->setDescription('Output schema declaration')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        $schema = require __DIR__.'/../resources/db/schema.php';

        foreach ($schema->toSql($app['db']->getDatabasePlatform()) as $sql) {
            $output->writeln($sql.';');
        }
    });

$console
	->register('doctrine:schema:load')
	->setDescription('Load schema')
	->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
	    $schema = require __DIR__.'/../resources/db/schema.php';

	    foreach ($schema->toSql($app['db']->getDatabasePlatform()) as $sql) {
	        $app['db']->exec($sql.';');
	    }
	});

return $console;