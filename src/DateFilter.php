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
 * Reserved for internal or future use.
 **/
class DateFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'DateFilter';
    const NAME = 'DateFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @var string|null
     */
    protected $endTime = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->endTime, 'endTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->endTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'startTime' => [],
            'endTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DateFilter::_register();
