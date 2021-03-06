<?php

namespace mindplay\unbox;

use Exception;
use Interop\Container\Exception\NotFoundException as InteropNotFoundException;

/**
 * @inheritdoc
 */
class NotFoundException
    extends Exception
    implements InteropNotFoundException
{
    /**
     * @param string $name component name
     */
    public function __construct($name)
    {
        parent::__construct("undefined component: {$name}");
    }
}
