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
 * downloadRequestFilter
 * container, which is parent container of any and all filters used in the
 * startDownloadJob
 * request.
 **/
class DownloadRequestFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'DownloadRequestFilter';
    const NAME = 'DownloadRequestFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var FeeSettlementReportFilter|null
     */
    protected $feeSettlementReportFilter = null;

    /**
     * @var GetItemInfoReportFilter|null
     */
    protected $getItemInfoReportFilter = null;

    /**
     * @var SiteFilter|null
     */
    protected $siteFilter = null;

    /**
     * @var ActiveInventoryReportFilter|null
     */
    protected $activeInventoryReportFilter = null;

    /**
     * @var DateFilter|null
     */
    protected $dateFilter = null;

    /**
     * @var SoldReportFilter|null
     */
    protected $soldReportFilter = null;

    /**
     * @var OrderReportFilter|null
     */
    protected $orderReportFilter = null;


    /**
     * @return FeeSettlementReportFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeeSettlementReportFilter()
    {
        return $this->_dc($this->feeSettlementReportFilter, 'feeSettlementReportFilter');
    }

    /**
     * @param FeeSettlementReportFilter|null $value
     * @return void
     */
    public function setFeeSettlementReportFilter($value)
    {
        $this->feeSettlementReportFilter = $value;
    }

    /**
     * @return GetItemInfoReportFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGetItemInfoReportFilter()
    {
        return $this->_dc($this->getItemInfoReportFilter, 'getItemInfoReportFilter');
    }

    /**
     * @param GetItemInfoReportFilter|null $value
     * @return void
     */
    public function setGetItemInfoReportFilter($value)
    {
        $this->getItemInfoReportFilter = $value;
    }

    /**
     * @return SiteFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteFilter()
    {
        return $this->_dc($this->siteFilter, 'siteFilter');
    }

    /**
     * @param SiteFilter|null $value
     * @return void
     */
    public function setSiteFilter($value)
    {
        $this->siteFilter = $value;
    }

    /**
     * @return ActiveInventoryReportFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActiveInventoryReportFilter()
    {
        return $this->_dc($this->activeInventoryReportFilter, 'activeInventoryReportFilter');
    }

    /**
     * @param ActiveInventoryReportFilter|null $value
     * @return void
     */
    public function setActiveInventoryReportFilter($value)
    {
        $this->activeInventoryReportFilter = $value;
    }

    /**
     * @return DateFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDateFilter()
    {
        return $this->_dc($this->dateFilter, 'dateFilter');
    }

    /**
     * @param DateFilter|null $value
     * @return void
     */
    public function setDateFilter($value)
    {
        $this->dateFilter = $value;
    }

    /**
     * @return SoldReportFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldReportFilter()
    {
        return $this->_dc($this->soldReportFilter, 'soldReportFilter');
    }

    /**
     * @param SoldReportFilter|null $value
     * @return void
     */
    public function setSoldReportFilter($value)
    {
        $this->soldReportFilter = $value;
    }

    /**
     * @return OrderReportFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderReportFilter()
    {
        return $this->_dc($this->orderReportFilter, 'orderReportFilter');
    }

    /**
     * @param OrderReportFilter|null $value
     * @return void
     */
    public function setOrderReportFilter($value)
    {
        $this->orderReportFilter = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'feeSettlementReportFilter' => ['type' => 'FeeSettlementReportFilter', 'xmlns' => self::XMLNS],
            'getItemInfoReportFilter' => ['type' => 'GetItemInfoReportFilter', 'xmlns' => self::XMLNS],
            'siteFilter' => ['type' => 'SiteFilter', 'xmlns' => self::XMLNS],
            'activeInventoryReportFilter' => ['type' => 'ActiveInventoryReportFilter', 'xmlns' => self::XMLNS],
            'dateFilter' => ['type' => 'DateFilter', 'xmlns' => self::XMLNS],
            'soldReportFilter' => ['type' => 'SoldReportFilter', 'xmlns' => self::XMLNS],
            'orderReportFilter' => ['type' => 'OrderReportFilter', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DownloadRequestFilter::_register();
