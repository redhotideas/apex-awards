<?php

namespace BackupGuard\Guzzle\Http\Message\Header;

use BackupGuard\Guzzle\Http\Message\Header;

/**
 * Default header factory implementation
 */
class HeaderFactory implements HeaderFactoryInterface
{
    /** @var array */
    protected $mapping = array(
        'cache-control' => 'BackupGuard\Guzzle\Http\Message\Header\CacheControl',
        'link'          => 'BackupGuard\Guzzle\Http\Message\Header\Link',
    );

    public function createHeader($header, $value = null)
    {
        $lowercase = strtolower($header);

        return isset($this->mapping[$lowercase])
            ? new $this->mapping[$lowercase]($header, $value)
            : new Header($header, $value);
    }
}
