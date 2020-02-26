<?php

namespace Simplified\FirstModule\Model\Brightness;

use Simplified\FirstModule\Api\BrightnessInterface;

class Light implements BrightnessInterface
{
    public function getBrightness()
    {
        return 'Light';
    }
}