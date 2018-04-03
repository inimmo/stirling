<?php
namespace Stirling;

class ActionLocator
{
    public function find(string $action): Action {
        $className = sprintf(__NAMESPACE__ . '\\Action\\%s', ucfirst($action));
        return new $className;
    }
}
