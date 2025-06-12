<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Model\ResourceModel\Company\Grid;

use Magento\Framework\ObjectManagerInterface;

class CollectionFactory
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var string
     */
    protected $instanceName;

    /**
     * @param ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        string $instanceName = Collection::class
    ) {
        $this->objectManager = $objectManager;
        $this->instanceName = $instanceName;
    }

    /**
     * Create collection
     *
     * @param array $data
     * @return Collection
     */
    public function create(array $data = []): Collection
    {
        return $this->objectManager->create($this->instanceName, $data);
    }
}
