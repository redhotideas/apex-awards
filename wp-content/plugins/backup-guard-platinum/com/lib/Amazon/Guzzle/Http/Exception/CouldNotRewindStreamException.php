<?php

namespace BackupGuard\Guzzle\Http\Exception;

use BackupGuard\Guzzle\Common\Exception\RuntimeException;

class CouldNotRewindStreamException extends RuntimeException implements HttpException {}
