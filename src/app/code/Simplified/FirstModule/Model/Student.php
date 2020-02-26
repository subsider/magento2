<?php

namespace Simplified\FirstModule\Model;

class Student
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var array
     */
    private $scores;

    /**
     * Student constructor.
     * @param string $name
     * @param int $age
     * @param array $scores
     */
    public function __construct(
        $name = 'Alex',
        $age = 25,
        $scores = [
            'maths' => 92,
            'programming' => 90
        ]
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }
}