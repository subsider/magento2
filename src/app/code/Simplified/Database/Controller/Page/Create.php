<?php

namespace Simplified\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Simplified\Database\Model\AffiliateMemberFactory;

class Create extends Action
{
    /**
     * @var AffiliateMemberFactory
     */
    private $affiliateMemberFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param AffiliateMemberFactory $affiliateMemberFactory
     */
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $affiliateMember = $this->affiliateMemberFactory->create();
        $affiliateMember->addData([
            'name' => 'Jurgen',
            'address' => 'Friedrichstrasse 97',
            'status' => true,
            'phone_number' => '7653322',
        ]);
        $affiliateMember->save();

        var_dump($affiliateMember->getData());
    }
}