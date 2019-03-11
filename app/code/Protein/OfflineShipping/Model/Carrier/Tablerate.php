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

}