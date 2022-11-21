<?php

namespace BackupGuard\Guzzle\Service\Command\LocationVisitor\Request;

use BackupGuard\Guzzle\Http\Message\RequestInterface;
use BackupGuard\Guzzle\Service\Command\CommandInterface;
use BackupGuard\Guzzle\Service\Description\Parameter;

/**
 * Visitor used to change the location in which a response body is saved
 */
class ResponseBodyVisitor extends AbstractRequestVisitor
{
    public function visit(CommandInterface $command, RequestInterface $request, Parameter $param, $value)
    {
        $request->setResponseBody($value);
    }
}
