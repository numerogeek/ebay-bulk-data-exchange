<?php

namespace InTradeSys\eBay\bulkDataExchange;

/*
 * This class was generated from a WSDL file from November 27, 2020, 4:15 pm.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 */

/**
 * Enumerated type defining the values that may be used in the
 * soldReportFilter.includeShippingAddress
 * field to control the output of buyers' shipping addresses in Merchant Data's
 * SoldReport
 * response.
 **/
class IncludeShippingAddressType extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'IncludeShippingAddressType';
    const NAME = 'IncludeShippingAddressType';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * This value indicates that buyers' shipping address information should always be emitted in Merchant Data's
     * SoldReport
     * response.
     **/
    const CodeType_Always = 'Always';

    /**
     * This value indicates that buyers' shipping address information should be emitted in Merchant Data's
     * SoldReport
     * response only when payment has been cleared.
     **/
    const CodeType_CheckoutComplete = 'CheckoutComplete';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return IncludeShippingAddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param IncludeShippingAddressType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAlways()
    {
        return $this->_value === self::CodeType_Always;
    }

    /**
     * @return bool
     */
    public function isCheckoutComplete()
    {
        return $this->_value === self::CodeType_CheckoutComplete;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

IncludeShippingAddressType::_register();
