<?php

namespace Simplified\FirstModule\Model\Color;

use Simplified\FirstModule\Api\ColorInterface;

class Green implements ColorInterface
{
    public function getColor()
    {
        return 'Green';
    }
}