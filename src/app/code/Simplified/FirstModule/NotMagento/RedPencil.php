<?php

namespace Simplified\FirstModule\NotMagento;

class RedPencil implements PencilInterface
{
    public function getPencilType()
    {
        return 'Red Pencil';
    }
}