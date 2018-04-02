<?php
require 'vendor/autoload.php';

$locator = new \Stirling\ActionLocator();
$action = $locator->find('');

echo $action(), PHP_EOL;
die;
