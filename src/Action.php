<?php
namespace Stirling;

use Symfony\Component\HttpFoundation\Request;

abstract class Action
{
    /** @var Request */
    private $request;

    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    abstract public function __invoke(): string;
}
