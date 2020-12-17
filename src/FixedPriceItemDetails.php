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
 * Type defining the
 * fixedPriceItemDetails
 * container, which is used to specify whether or not variation-level data is returned in the
 * ActiveInventoryReport
 * response.
 **/
class FixedPriceItemDetails extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'FixedPriceItemDetails';
    const NAME = 'FixedPriceItemDetails';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeVariations = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeVariations()
    {
        return $this->_dc($this->includeVariations === 'true', 'includeVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeVariations($value)
    {
        $this->includeVariations = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['includeVariations' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

FixedPriceItemDetails::_register();
