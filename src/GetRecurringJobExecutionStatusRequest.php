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
 * Returns the status information for the latest instance of a recurring job.
 * To see all instances of a recurring job, use
 * getRecurringJobExecutionHistory
 * .
 **/
class GetRecurringJobExecutionStatusRequest extends BaseServiceRequest
{
    const TAG = 'GetRecurringJobExecutionStatusRequest';
    const NAME = 'GetRecurringJobExecutionStatusRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'getRecurringJobExecutionStatus';

    /**
     * @var string|null
     */
    protected $recurringJobId = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecurringJobId()
    {
        return $this->_dc($this->recurringJobId, 'recurringJobId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecurringJobId($value)
    {
        $this->recurringJobId = self::_string($value);
    }

    /**
     * @return GetRecurringJobExecutionStatusResponse|EbatNsBulkDataExchange_ResponseError
     * @param EbatNsBulkDataExchange_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['recurringJobId' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GetRecurringJobExecutionStatusRequest::_register();
