<?php

namespace Protein\OfflineShipping\Model\Carrier;

use Magento\OfflineShipping\Model\Carrier\Tablerate as NativeTablerate;

/**
 * Class Tablerate
 * @package Prorein\OfflineShipping\Model\Carrier
 */
class Tablerate extends NativeTablerate
{
    /**
     * @var string
     */
    protected $_code = 'proteintablerate';

    /**
     * @var bool
     */
    protected $_isFixed = true;


    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory,
        \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $resultMethodFactory,
        \Protein\OfflineShipping\Model\ResourceModel\Carrier\TablerateFactory $tablerateFactory,
        array $data = []
    ) {
        $this->_rateResultFactory = $rateResultFactory;
        $this->_resultMethodFactory = $resultMethodFactory;
        $this->_tablerateFactory = $tablerateFactory;
        foreach ($this->getCode('condition_name') as $k => $v) {
            $this->_conditionNames[] = $k;
        }
    }

}