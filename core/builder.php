<?php

if (!isset($argv[1]) || !in_array($argv[1], array('PHP52', 'PHP53'))) {
    echo "PHP version (PHP52 or PHP53) should be passed as the first argument.\n";
}
define("__DIR__", dirname(__FILE__));
require("helpers/IfDefParser.php");

$ary = explode('/', __DIR__);
array_pop($ary);
$root = join('/', $ary) . '/';
$src = __DIR__ . '/src/';

$legacy = new IfDefParser($root, $src, $argv[1]);
$legacy->build();