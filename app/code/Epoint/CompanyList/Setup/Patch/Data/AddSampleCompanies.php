<?php
/**
 * Copyright © Epoint All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Epoint\CompanyList\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Epoint\CompanyList\Model\CompanyFactory;
use Epoint\CompanyList\Model\ResourceModel\Company as CompanyResource;

class AddSampleCompanies implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var CompanyFactory
     */
    private $companyFactory;

    /**
     * @var CompanyResource
     */
    private $companyResource;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param CompanyFactory $companyFactory
     * @param CompanyResource $companyResource
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        CompanyFactory $companyFactory,
        CompanyResource $companyResource
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->companyFactory = $companyFactory;
        $this->companyResource = $companyResource;
    }

    /**
     * Apply patch
     *
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        $sampleData = [
            [
                'name' => 'Acme Corporation',
                'email' => 'contact@acme.com',
                'phone' => '+1-555-0123',
                'website' => 'https://www.acme.com',
                'address' => '123 Business Street',
                'city' => 'New York',
                'country' => 'USA',
                'postal_code' => '10001',
                'status' => 1
            ],
            [
                'name' => 'Tech Solutions Ltd',
                'email' => 'info@techsolutions.com',
                'phone' => '+1-555-0456',
                'website' => 'https://www.techsolutions.com',
                'address' => '456 Innovation Ave',
                'city' => 'San Francisco',
                'country' => 'USA',
                'postal_code' => '94102',
                'status' => 1
            ],
            [
                'name' => 'Global Industries Inc',
                'email' => 'hello@globalind.com',
                'phone' => '+1-555-0789',
                'website' => 'https://www.globalindustries.com',
                'address' => '789 Corporate Blvd',
                'city' => 'Chicago',
                'country' => 'USA',
                'postal_code' => '60601',
                'status' => 1
            ],
            [
                'name' => 'Innovation Partners',
                'email' => 'contact@innovpartners.com',
                'phone' => '+1-555-0321',
                'website' => 'https://www.innovationpartners.com',
                'address' => '321 Startup Lane',
                'city' => 'Austin',
                'country' => 'USA',
                'postal_code' => '73301',
                'status' => 1
            ],
            [
                'name' => 'Digital Dynamics',
                'email' => 'support@digitaldyn.com',
                'phone' => '+1-555-0654',
                'website' => 'https://www.digitaldynamics.com',
                'address' => '654 Tech Park',
                'city' => 'Seattle',
                'country' => 'USA',
                'postal_code' => '98101',
                'status' => 1
            ]
        ];

        foreach ($sampleData as $data) {
            $company = $this->companyFactory->create();
            $company->setData($data);
            $this->companyResource->save($company);
        }

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * Get dependencies
     *
     * @return array
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Get aliases
     *
     * @return array
     */
    public function getAliases()
    {
        return [];
    }
} 