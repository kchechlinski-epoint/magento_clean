<?php
namespace Vendor\MarketplaceMultiVendor\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (!$setup->tableExists('vendor_marketplace_vendor')) {
            $table = $setup->getConnection()->newTable($setup->getTable('vendor_marketplace_vendor'))
                ->addColumn('vendor_id', Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true])
                ->addColumn('customer_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => false])
                ->addColumn('is_approved', Table::TYPE_SMALLINT, null, ['default' => 0])
                ->addColumn('is_featured', Table::TYPE_SMALLINT, null, ['default' => 0])
                ->setComment('Marketplace Vendors');
            $setup->getConnection()->createTable($table);
        }

        if (!$setup->tableExists('vendor_marketplace_product_approval')) {
            $table = $setup->getConnection()->newTable($setup->getTable('vendor_marketplace_product_approval'))
                ->addColumn('entity_id', Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true])
                ->addColumn('product_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => false])
                ->addColumn('vendor_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => false])
                ->addColumn('status', Table::TYPE_TEXT, 32, ['nullable' => false, 'default' => 'pending'])
                ->setComment('Marketplace Product Approvals');
            $setup->getConnection()->createTable($table);
        }

        if (!$setup->tableExists('vendor_marketplace_report')) {
            $table = $setup->getConnection()->newTable($setup->getTable('vendor_marketplace_report'))
                ->addColumn('report_id', Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true])
                ->addColumn('vendor_id', Table::TYPE_INTEGER, null, ['unsigned' => true])
                ->addColumn('product_id', Table::TYPE_INTEGER, null, ['unsigned' => true])
                ->addColumn('message', Table::TYPE_TEXT, '64k', [])
                ->setComment('Vendor/Product Reports');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
