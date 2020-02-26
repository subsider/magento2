<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Simplified\FirstModule\Model\PencilFactory;

class Pencil extends Action
{
    /**
     * @var PencilFactory
     */
    private $pencilFactory;

    /**
     * Pencil constructor.
     * @param Context $context
     * @param PencilFactory $pencilFactory
     */
    public function __construct(Context $context, PencilFactory $pencilFactory)
    {
        $this->pencilFactory = $pencilFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $pencil = $this->pencilFactory->create([
            'name' => 'Regular pencil',
            'school' => 'Middle school',
        ]);

        echo "{$pencil->getPencilType()} and its name is {$pencil->getName()} for {$pencil->getSchool()}";
    }
}