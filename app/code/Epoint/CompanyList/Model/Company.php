<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Company extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'epoint_company';

    /**
     * @var string
     */
    protected $_cacheTag = 'epoint_company';

    /**
     * @var string
     */
    protected $_eventPrefix = 'epoint_company';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Epoint\CompanyList\Model\ResourceModel\Company::class);
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get default values
     *
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
} 