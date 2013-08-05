#!/bin/bash

# Release code into the wild

DIRECTORY_CURRENT="`dirname $0`/current";
FILENAME_CURRENT="`basename $0`"

echo "[$FILENAME_CURRENT] cd $DIRECTORY_CURRENT"
cd "$DIRECTORY_CURRENT"

echo "[$FILENAME_CURRENT] curl -s http://getcomposer.org/installer | php";
curl -s http://getcomposer.org/installer | php

echo "[$FILENAME_CURRENT] php composer.phar install";
php composer.phar install

echo "[$FILENAME_CURRENT] rm composer.phar";
rm composer.phar

exit;