<?php

namespace Simplified\FirstModule\Model\Size;

use Simplified\FirstModule\Api\SizeInterface;

class Normal implements SizeInterface
{
    public function getSize()
    {
        return 'Normal';
    }
}