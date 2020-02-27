<?php

namespace Simplified\FirstModule\Plugin;

use Simplified\FirstModule\Controller\Page\HelloWorld;

class HelloWorldActionPluginSortOrder10
{
    public function beforeExecute(HelloWorld $subject)
    {
        echo 'Before execute sort order 10'  . '<br>';
    }

    public function afterExecute(HelloWorld $subject)
    {
        echo 'After execute sort order 10'  . '<br>';
    }

    public function aroundExecute(HelloWorld $subject, callable $proceed)
    {
        echo 'Around proceed sort order 10'  . '<br>';
        $proceed();
        echo 'Around proceed sort order 10'  . '<br>';
    }
}