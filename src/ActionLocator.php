<?php
namespace Stirling;

use Stirling\Action\Foo;

class ActionLocator
{
    public function find(string $action) {
        return new Foo();
    }
}