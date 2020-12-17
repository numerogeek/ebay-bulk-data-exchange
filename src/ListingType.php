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
 * Enumerated type used by the
 * listingType
 * field if the seller wants to retrieve Half.com orders. The
 * listingType
 * field is only used if the seller wants to retrieve Half.com orders.
 **/
class ListingType extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'ListingType';
    const NAME = 'ListingType';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * This value is used if the seller wants to retrieve Half.com orders.
     **/
    const CodeType_Half = 'Half';
    
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
     * @return ListingType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isHalf()
    {
        return $this->_value === self::CodeType_Half;
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

ListingType::_register();
