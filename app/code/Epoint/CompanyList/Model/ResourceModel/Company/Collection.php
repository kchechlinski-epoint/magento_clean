<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Model\ResourceModel\Company;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * Initialize collection model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Epoint\CompanyList\Model\Company::class,
            \Epoint\CompanyList\Model\ResourceModel\Company::class
        );
    }
} 