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
 * dailyRecurrence
 * container. This container can be used to create a recurring job that is executed on a daily basis. If this
 * container is used, the
 * monthlyRecurrence
 * and
 * weeklyRecurrence
 * containers, and
 * frequencyInMinutes
 * field should not be used.
 **/
class DailyRecurrence extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'DailyRecurrence';
    const NAME = 'DailyRecurrence';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $timeOfDay = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeOfDay()
    {
        return $this->_dc($this->timeOfDay, 'timeOfDay');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeOfDay($value)
    {
        $this->timeOfDay = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['timeOfDay' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

DailyRecurrence::_register();
