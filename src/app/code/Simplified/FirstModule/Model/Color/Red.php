<?php

namespace Simplified\FirstModule\Model\Color;

use Simplified\FirstModule\Api\ColorInterface;

class Red implements ColorInterface
{
    public function getColor()
    {
        return 'Red';
    }
}