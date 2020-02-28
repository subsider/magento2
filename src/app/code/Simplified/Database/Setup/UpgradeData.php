<?php

namespace Simplified\Database\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.1.2', '<')) {
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                ['name' => 'Chris', 'address' => '456 Example St', 'status' => true, 'phone_number' => '6766655']
            );
        }

        $setup->endSetup();
    }
}