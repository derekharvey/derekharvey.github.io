#!/bin/bash -e

# Automagick wrapper script to:
# - Install or update composer
# - Install or update dependencies

# Usage
# bash bin/composer.sh

DIRNAME=$(dirname ".");

cd $DIRNAME;

if [ ! -f composer.phar ]; then
	echo 'Downloading composer.phar ...';
	curl -s https://getcomposer.org/installer | php
	echo 'Installing dependencies ...';
	php composer.phar install;
else
  php composer.phar self-update;
	echo 'Updating dependencies ...';
	php composer.phar update;
fi
