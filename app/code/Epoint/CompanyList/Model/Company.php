<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Epoint\CompanyList\Model\ResourceModel\Company as CompanyResource;

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

    protected $companyResource;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        CompanyResource $companyResource,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->companyResource = $companyResource;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

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

    public function getName()
    {
        return $this->getData('name');
    }

    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    public function getEmail()
    {
        return $this->getData('email');
    }

    public function setEmail($email)
    {
        return $this->setData('email', $email);
    }

    public function getPhone()
    {
        return $this->getData('phone');
    }

    public function setPhone($phone)
    {
        return $this->setData('phone', $phone);
    }

    public function getWebsite()
    {
        return $this->getData('website');
    }

    public function setWebsite($website)
    {
        return $this->setData('website', $website);
    }

    public function getStatus()
    {
        return $this->getData('status');
    }

    public function setStatus($status)
    {
        return $this->setData('status', $status);
    }
} 