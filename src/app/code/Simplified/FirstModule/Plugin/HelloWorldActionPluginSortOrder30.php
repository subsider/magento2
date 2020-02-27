<?php

namespace Simplified\FirstModule\Plugin;

use Simplified\FirstModule\Controller\Page\HelloWorld;

class HelloWorldActionPluginSortOrder30
{
    public function beforeExecute(HelloWorld $subject)
    {
        echo 'Before execute sort order 30'  . '<br>';
    }

    public function afterExecute(HelloWorld $subject)
    {
        echo 'After execute sort order 30'  . '<br>';
    }

    public function aroundExecute(HelloWorld $subject, callable $proceed)
    {
        echo 'Around proceed sort order 30'  . '<br>';
        $proceed();
        echo 'Around proceed sort order 30'  . '<br>';
    }
}