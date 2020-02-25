<?php

namespace Simplified\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Simplified\FirstModule\NotMagento\PencilInterface;

class Pencil extends Action
{
    /**
     * @var PencilInterface
     */
    private $pencil;

    /**
     * Pencil constructor.
     * @param Context $context
     * @param PencilInterface $pencil
     */
    public function __construct(Context $context, PencilInterface $pencil)
    {
        $this->pencil = $pencil;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        echo $this->pencil->getPencilType();
    }
}