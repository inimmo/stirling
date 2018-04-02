<?php
namespace Stirling;

use Stirling\Action\Foo;

class ActionLocator
{
    public function find(string $action) {
        $className = sprintf(__NAMESPACE__ . '\\Action\\%s', ucfirst($action));
        return new $className;
    }
}