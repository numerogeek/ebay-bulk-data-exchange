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
 * Enumerated type defining the possible states of a Bulk Data Exchange recurring job.
 **/
class RecurringJobStatus extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'RecurringJobStatus';
    const NAME = 'RecurringJobStatus';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * This value indicates that the recurring job is active.
     **/
    const CodeType_Active = 'Active';

    /**
     * This value indicates that the recurring job is temporarily suspended. Use
     * activateRecurringJob
     * to restart a suspended recurring job.
     **/
    const CodeType_Suspended = 'Suspended';
    
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
     * @return RecurringJobStatus|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RecurringJobStatus|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isSuspended()
    {
        return $this->_value === self::CodeType_Suspended;
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

RecurringJobStatus::_register();
