<?php
require __DIR__ . '/vendor/autoload.php';

use Zenden2k\Reverse\StringUtils;

if ( $argc != 2 ) {
    die("usage: php -f reverse.php 'String to be reversed'");
}

$str = $argv[1];
echo StringUtils::Reverse($str);