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
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $school;

    /**
     * Pencil constructor.
     * @param ColorInterface $color
     * @param SizeInterface $size
     * @param null|string $name
     * @param null|string $school
     */
    public function __construct(ColorInterface $color, SizeInterface $size, $name = null, $school = null)
    {
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
        $this->school = $school;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function getPencilType()
    {
        return "Our pencil has {$this->color->getColor()} color and {$this->size->getSize()} size";
    }
}