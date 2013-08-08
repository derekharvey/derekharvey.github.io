#!/bin/bash -e

# Simple script to start a php
# webserver without providing the
# default params

# Basic usage
# php bin/php-web-server.sh
#
# Examples:
# bash bin/php-web-server.sh index.php
# bash bin/php-web-server.sh index.php another-hostname
# bash bin/php-web-server.sh index.php another-hostname 8080

DIRNAME=$(dirname ".");

WEBDIR=web;

UNAMESTR=`uname`

DEFAULT_FILE='index.php'
DEFAULT_HOST='localhost'
DEFAULT_PORT='1337'

if [ "$1" != "" ]; then FILE=$1; else FILE=$DEFAULT_FILE; fi;
if [ "$2" != "" ]; then HOST=$2; else HOST=$DEFAULT_HOST; fi;
if [ "$3" != "" ]; then PORT=$3; else PORT=$DEFAULT_PORT; fi;

cd $DIRNAME/$WEBDIR;

if [[ "$UNAMESTR" == 'Darwin' ]]; then
  open http://$HOST:$PORT;
fi

php -S $HOST:$PORT $FILE;
