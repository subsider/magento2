<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ObjectManager;
use Simplified\FirstModule\Model\Book as BookModel;

class Book extends Action
{
    public function execute()
    {
        var_dump(ObjectManager::getInstance()->create(BookModel::class));
    }
}