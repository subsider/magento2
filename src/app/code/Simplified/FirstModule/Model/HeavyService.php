<?php

namespace Simplified\FirstModule\Model;

class HeavyService
{
    public function __construct()
    {
        echo 'Heavy service has been instantiated' . '<br>';
    }

    public function printMessage()
    {
        echo 'Message from HeavyServiceClass';
    }
}