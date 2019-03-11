<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Protein\OfflineShipping\Model\ResourceModel\Carrier\Tablerate;
use Magento\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\Import as NativeImport;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\File\ReadInterface;
use Protein\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\CSV\ColumnResolver;
use Protein\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\CSV\ColumnResolverFactory;
use Protein\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\CSV\RowException;
use Protein\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\CSV\RowParser;
use Magento\Store\Model\StoreManagerInterface;

class Import extends NativeImport
{
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var ScopeConfigInterface
     */
    private $coreConfig;

    /**
     * @var array
     */
    private $errors = [];

    /**
     * @var CSV\RowParser
     */
    private $rowParser;

    /**
     * @var CSV\ColumnResolverFactory
     */
    private $columnResolverFactory;

    /**
     * @var DataHashGenerator
     */
    private $dataHashGenerator;

    /**
     * @var array
     */
    private $uniqueHash = [];

    public function __construct(
        StoreManagerInterface $storeManager,
        Filesystem $filesystem,
        ScopeConfigInterface $coreConfig,
        RowParser $rowParser,
        ColumnResolverFactory $columnResolverFactory,
        DataHashGenerator $dataHashGenerator
    ) {
        $this->storeManager = $storeManager;
        $this->filesystem = $filesystem;
        $this->coreConfig = $coreConfig;
        $this->rowParser = $rowParser;
        $this->columnResolverFactory = $columnResolverFactory;
        $this->dataHashGenerator = $dataHashGenerator;

        parent::__construct($storeManager,$filesystem , $coreConfig, $rowParser, $columnResolverFactory, $dataHashGenerator );
    }

}
