<?php

namespace BackupGuard\Guzzle\Service\Command\LocationVisitor\Request;

use BackupGuard\Guzzle\Http\Message\RequestInterface;
use BackupGuard\Guzzle\Service\Command\CommandInterface;
use BackupGuard\Guzzle\Service\Description\Parameter;

/**
 * Visitor used to apply a parameter to a request's query string
 */
class QueryVisitor extends AbstractRequestVisitor
{
    public function visit(CommandInterface $command, RequestInterface $request, Parameter $param, $value)
    {
        $request->getQuery()->set($param->getWireName(), $this->prepareValue($value, $param));
    }
}
