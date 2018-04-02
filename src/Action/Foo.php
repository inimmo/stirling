<?php
namespace Stirling\Action;

use Stirling\Action;

class Foo extends Action
{
    public function __construct()
    {

    }

    public function __invoke(): string
    {
        return 'You did it';
    }
}
