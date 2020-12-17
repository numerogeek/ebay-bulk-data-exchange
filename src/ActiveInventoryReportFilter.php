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
 * activeInventoryReportFilter
 * container, which allows the user to control which containers/fields are returned in an
 * ActiveInventoryReport
 * response.
 **/
class ActiveInventoryReportFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'ActiveInventoryReportFilter';
    const NAME = 'ActiveInventoryReportFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var IncludeListingType|null
     */
    protected $includeListingType = null;

    /**
     * @var FixedPriceItemDetails|null
     */
    protected $fixedPriceItemDetails = null;

    /**
     * @var AuctionItemDetails|null
     */
    protected $auctionItemDetails = null;


    /**
     * @return IncludeListingType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeListingType()
    {
        return $this->_dc($this->includeListingType);
    }

    /**
     * @param IncludeListingType|null $value
     * @return void
     */
    public function setIncludeListingType($value)
    {
        $this->includeListingType = $this->_enum($value, IncludeListingType::class);
    }

    /**
     * @return FixedPriceItemDetails|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFixedPriceItemDetails()
    {
        return $this->_dc($this->fixedPriceItemDetails, 'fixedPriceItemDetails');
    }

    /**
     * @param FixedPriceItemDetails|null $value
     * @return void
     */
    public function setFixedPriceItemDetails($value)
    {
        $this->fixedPriceItemDetails = $value;
    }

    /**
     * @return AuctionItemDetails|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuctionItemDetails()
    {
        return $this->_dc($this->auctionItemDetails, 'auctionItemDetails');
    }

    /**
     * @param AuctionItemDetails|null $value
     * @return void
     */
    public function setAuctionItemDetails($value)
    {
        $this->auctionItemDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'includeListingType' => ['type' => 'IncludeListingType', 'enum' => true, 'xmlns' => self::XMLNS],
            'fixedPriceItemDetails' => ['type' => 'FixedPriceItemDetails', 'xmlns' => self::XMLNS],
            'auctionItemDetails' => ['type' => 'AuctionItemDetails', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ActiveInventoryReportFilter::_register();
