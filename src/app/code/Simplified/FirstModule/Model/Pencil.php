<?php

namespace Simplified\FirstModule\Model;

use Simplified\FirstModule\Api\ColorInterface;
use Simplified\FirstModule\Api\PencilInterface;
use Simplified\FirstModule\Api\SizeInterface;

class Pencil implements PencilInterface
{
    /**
     * @var ColorInterface
     */
    private $color;

    /**
     * @var SizeInterface
     */
    private $size;

    /**
     * Pencil constructor.
     * @param ColorInterface $color
     * @param SizeInterface $size
     */
    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getPencilType()
    {
        return "Our pencil has {$this->color->getColor()} color and {$this->size->getSize()} size";
    }
}