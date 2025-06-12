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