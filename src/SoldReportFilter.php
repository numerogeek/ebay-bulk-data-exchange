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
 * soldReportFilter
 * container, which allows the user to control whether (and when) the buyers' shipping addresses are returned in
 * Merchant Data's
 * SoldReport
 * response.
 * 
 * The
 * soldReportFilter
 * container is only applicable if the
 * downloadJobType
 * value is set to 'SoldReport'.
 **/
class SoldReportFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'SoldReportFilter';
    const NAME = 'SoldReportFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var IncludeShippingAddressType|null
     */
    protected $includeShippingAddress = null;


    /**
     * @return IncludeShippingAddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeShippingAddress()
    {
        return $this->_dc($this->includeShippingAddress);
    }

    /**
     * @param IncludeShippingAddressType|null $value
     * @return void
     */
    public function setIncludeShippingAddress($value)
    {
        $this->includeShippingAddress = $this->_enum($value, IncludeShippingAddressType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['includeShippingAddress' => ['type' => 'IncludeShippingAddressType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

SoldReportFilter::_register();
