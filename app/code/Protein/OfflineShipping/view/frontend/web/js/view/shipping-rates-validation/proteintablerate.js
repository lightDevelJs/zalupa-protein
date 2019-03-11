/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'uiComponent',
    'Magento_Checkout/js/model/shipping-rates-validator',
    'Magento_Checkout/js/model/shipping-rates-validation-rules',
    '../../model/shipping-rates-validator/proteintablerate',
    '../../model/shipping-rates-validation-rules/proteintablerate'
], function (
    Component,
    defaultShippingRatesValidator,
    defaultShippingRatesValidationRules,
    tablerateShippingRatesValidator,
    tablerateShippingRatesValidationRules
) {
    'use strict';

    defaultShippingRatesValidator.registerValidator('proteintablerate', tablerateShippingRatesValidator);
    defaultShippingRatesValidationRules.registerRules('proteintablerate', tablerateShippingRatesValidationRules);

    return Component;
});
