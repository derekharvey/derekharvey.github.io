#!/bin/bash
<?php
$filename = $argv[1];
echo $filename . chr(10);
echo base64_encode(file_get_contents($filename)); 
echo chr(10);