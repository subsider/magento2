<?php

namespace Simplified\FirstModule\Model\Color;

use Simplified\FirstModule\Api\BrightnessInterface;
use Simplified\FirstModule\Api\ColorInterface;

class Red implements ColorInterface
{
    /**
     * @var BrightnessInterface
     */
    private $brightness;

    /**
     * Red constructor.
     * @param BrightnessInterface $brightness
     */
    public function __construct(BrightnessInterface $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return $this->brightness->getBrightness() . ' Red';
    }
}