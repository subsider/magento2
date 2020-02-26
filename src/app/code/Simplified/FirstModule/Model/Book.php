<?php

namespace Simplified\FirstModule\Model;

use Simplified\FirstModule\Api\ColorInterface;
use Simplified\FirstModule\Api\SizeInterface;

class Book
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
     * Book constructor.
     * @param ColorInterface $color
     * @param SizeInterface $size
     */
    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
}