<?php

namespace Controllers;

use Interop\Container\ContainerInterface;

class Base
{

    /**
     * Base constructor.
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }
}