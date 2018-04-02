<?php
require 'vendor/autoload.php';

$locator = new \Stirling\ActionLocator();
$action = $locator->find('foo');

echo $action(), PHP_EOL;
