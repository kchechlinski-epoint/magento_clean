<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Company extends AbstractDb
{
    protected $companyModel;

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Epoint\CompanyList\Model\Company $companyModel,
        $connectionName = null
    ) {
        $this->companyModel = $companyModel;
        parent::__construct($context, $connectionName);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('epoint_company', 'entity_id');
    }
} 