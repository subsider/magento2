<?php

namespace Simplified\FirstModule\Model\Size;

use Simplified\FirstModule\Api\SizeInterface;

class Big implements SizeInterface
{
    public function getSize()
    {
        return 'Big';
    }
}