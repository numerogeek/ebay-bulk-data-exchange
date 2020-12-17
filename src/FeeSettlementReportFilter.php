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
 * feeSettlementReportFilter
 * container, which is used  to control the date range on the fee data that is returned in a
 * FeeSettlementReport
 * response.
 **/
class FeeSettlementReportFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'FeeSettlementReportFilter';
    const NAME = 'FeeSettlementReportFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $startTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->startTime, 'startTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->startTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['startTime' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

FeeSettlementReportFilter::_register();
