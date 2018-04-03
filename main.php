<?php
require 'vendor/autoload.php';

use \Symfony\Component\HttpFoundation\Request;

$request = Request::create($argv[1]);
$locator = new \Stirling\ActionLocator();
$action = $locator->find($request->getRequestUri());
$action->setRequest($request);

echo $action(), PHP_EOL;
