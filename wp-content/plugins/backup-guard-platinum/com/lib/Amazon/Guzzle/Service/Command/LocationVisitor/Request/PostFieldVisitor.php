<?php

namespace BackupGuard\Guzzle\Service\Command\LocationVisitor\Request;

use BackupGuard\Guzzle\Http\Message\RequestInterface;
use BackupGuard\Guzzle\Service\Command\CommandInterface;
use BackupGuard\Guzzle\Service\Description\Parameter;

/**
 * Visitor used to apply a parameter to a POST field
 */
class PostFieldVisitor extends AbstractRequestVisitor
{
    public function visit(CommandInterface $command, RequestInterface $request, Parameter $param, $value)
    {
        $request->setPostField($param->getWireName(), $this->prepareValue($value, $param));
    }
}
