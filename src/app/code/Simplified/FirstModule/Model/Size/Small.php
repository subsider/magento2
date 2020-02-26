<?php

namespace Simplified\FirstModule\Model\Size;

use Simplified\FirstModule\Api\SizeInterface;

class Small implements SizeInterface
{
    public function getSize()
    {
        return 'Small';
    }
}