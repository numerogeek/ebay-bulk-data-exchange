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
 * orderReportFilter
 * container, which allows the user
 * to set time, order status, or order type (eBay or Half.com) filters, and to specify whether or not to include
 * Final Value Fees for each order line item in Merchant Data's
 * OrderReport
 * response.
 * 
 * The
 * orderReportFilter
 * container is only applicable if the
 * downloadJobType
 * value is set to 'OrderReport'.
 **/
class OrderReportFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'OrderReportFilter';
    const NAME = 'OrderReportFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $createTimeFrom = null;

    /**
     * @var string|null
     */
    protected $createTimeTo = null;

    /**
     * @var string|null
     */
    protected $modTimeFrom = null;

    /**
     * @var string|null
     */
    protected $modTimeTo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeFinalValueFee = null;

    /**
     * @var ListingType|null
     */
    protected $listingType = null;

    /**
     * @var OrderStatusTypes|null
     */
    protected $orderStatus = null;

    /**
     * @var int|null
     * @required
     */
    protected $version = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreateTimeFrom()
    {
        return $this->_dc($this->createTimeFrom, 'createTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreateTimeFrom($value)
    {
        $this->createTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreateTimeTo()
    {
        return $this->_dc($this->createTimeTo, 'createTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreateTimeTo($value)
    {
        $this->createTimeTo = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeFrom()
    {
        return $this->_dc($this->modTimeFrom, 'modTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeFrom($value)
    {
        $this->modTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeTo()
    {
        return $this->_dc($this->modTimeTo, 'modTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeTo($value)
    {
        $this->modTimeTo = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeFinalValueFee()
    {
        return $this->_dc($this->includeFinalValueFee === 'true', 'includeFinalValueFee');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFinalValueFee($value)
    {
        $this->includeFinalValueFee = self::_bool($value);
    }

    /**
     * @return ListingType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->listingType);
    }

    /**
     * @param ListingType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->listingType = $this->_enum($value, ListingType::class);
    }

    /**
     * @return OrderStatusTypes|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderStatus()
    {
        return $this->_dc($this->orderStatus);
    }

    /**
     * @param OrderStatusTypes|null $value
     * @return void
     */
    public function setOrderStatus($value)
    {
        $this->orderStatus = $this->_enum($value, OrderStatusTypes::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVersion()
    {
        return $this->_dc($this->version, 'version');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setVersion($value)
    {
        $this->version = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'createTimeFrom' => [],
            'createTimeTo' => [],
            'modTimeFrom' => [],
            'modTimeTo' => [],
            'includeFinalValueFee' => ['type' => 'bool'],
            'listingType' => ['type' => 'ListingType', 'enum' => true, 'xmlns' => self::XMLNS],
            'orderStatus' => ['type' => 'OrderStatusTypes', 'enum' => true, 'xmlns' => self::XMLNS],
            'version' => ['required' => true, 'type' => 'int', 'cardinality' => '1..1']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OrderReportFilter::_register();
