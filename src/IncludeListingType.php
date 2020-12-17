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
 * Simple type defining the listing types that may be specified in the
 * includeListingType
 * field to control whether fixed-price and/or auction listings are returned in an
 * ActiveInventoryReport
 * response.
 **/
class IncludeListingType extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'IncludeListingType';
    const NAME = 'IncludeListingType';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * This value is specified in the
     * includeListingType
     * field if the user wants to limit the data returned in the
     * ActiveInventoryReport
     * response to auction listings.
     **/
    const CodeType_Auction = 'Auction';

    /**
     * This value is specified in the
     * includeListingType
     * field if the user wants to limit the data returned in the
     * ActiveInventoryReport
     * response to fixed-price listings.
     **/
    const CodeType_FixedPrice = 'FixedPrice';

    /**
     * This value is specified in the
     * includeListingType
     * field if the user wants data from both auction and fixed-price listings returned in the
     * ActiveInventoryReport
     * response.
     **/
    const CodeType_AuctionAndFixedPrice = 'AuctionAndFixedPrice';
    
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
     * @return IncludeListingType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param IncludeListingType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isAuction()
    {
        return $this->_value === self::CodeType_Auction;
    }

    /**
     * @return bool
     */
    public function isFixedPrice()
    {
        return $this->_value === self::CodeType_FixedPrice;
    }

    /**
     * @return bool
     */
    public function isAuctionAndFixedPrice()
    {
        return $this->_value === self::CodeType_AuctionAndFixedPrice;
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

IncludeListingType::_register();
