<?php

namespace Simplified\FirstModule\Model\Color;

use Simplified\FirstModule\Api\ColorInterface;

class Yellow implements ColorInterface
{
    public function getColor()
    {
        return 'Yellow';
    }
}