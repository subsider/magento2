<?php

namespace Simplified\Database\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.1.1', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('affiliate_member'),
                'phone_number',
                [
                    'nullable' => false,
                    'type' => Table::TYPE_TEXT,
                    'comment' => 'Member Phone Number',
                ]
            );
        }

        $setup->endSetup();
    }
}