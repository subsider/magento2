<?php

namespace Simplified\Database\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('affiliate_member')
        )->addColumn('entity_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Member ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Member Name'
        )->addColumn(
            'address',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Member Address'
        )->addColumn(
            'status',
            Table::TYPE_BOOLEAN,
            10,
            ['nullable' => false, 'default' => false],
            'Member Status'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'Member Creation Date'
        )->addColumn(
            'updated_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
            'Member Creation Date'
        )->setComment('Affiliate Member Table');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}