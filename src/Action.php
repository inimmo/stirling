<?php
namespace Stirling;

use Psr\Http\Message\ServerRequestInterface;

abstract class Action
{
    /** @var ServerRequestInterface */
    private $request;

    public function setRequest(ServerRequestInterface $request): void
    {
        $this->request = $request;
    }

    abstract public function __invoke(): string;
}
