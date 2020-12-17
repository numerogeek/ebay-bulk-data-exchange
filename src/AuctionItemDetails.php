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
 * auctionItemDetails
 * container, which is used to specify whether or not the total bid count and/or the
 * ReserveMet
 * boolean (indicating whether or not Reserve Price was met by the highest bid) is returned in the
 * ActiveInventoryReport
 * response.
 **/
class AuctionItemDetails extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'AuctionItemDetails';
    const NAME = 'AuctionItemDetails';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeBidCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeReservePriceMet = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeBidCount()
    {
        return $this->_dc($this->includeBidCount === 'true', 'includeBidCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeBidCount($value)
    {
        $this->includeBidCount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeReservePriceMet()
    {
        return $this->_dc($this->includeReservePriceMet === 'true', 'includeReservePriceMet');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeReservePriceMet($value)
    {
        $this->includeReservePriceMet = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'includeBidCount' => ['type' => 'bool'],
            'includeReservePriceMet' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AuctionItemDetails::_register();
