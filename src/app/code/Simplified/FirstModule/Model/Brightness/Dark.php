<?php

namespace Simplified\FirstModule\Model\Brightness;

use Simplified\FirstModule\Api\BrightnessInterface;

class Dark implements BrightnessInterface
{
    public function getBrightness()
    {
        return 'Dark';
    }
}