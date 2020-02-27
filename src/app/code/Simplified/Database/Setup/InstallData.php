<?php

namespace Simplified\Database\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $this->createMember($setup, 'Bob', '101 Murray Street');
        $this->createMember($setup, 'Mike', '123 Jubilee Street');

        $setup->endSetup();
    }

    private function createMember(ModuleDataSetupInterface $setup, string $name, string $address, bool $status = true)
    {
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name' => $name, 'address' => $address, 'status' => $status]
        );
    }
}