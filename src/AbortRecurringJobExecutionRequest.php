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
 * Deletes the next instance of a recurring job. The recurring job will resume with
 * subsequent job instance. Use
 * getRecurringJobExecutionHistory
 * and
 * getRecurringJobExecutionStatus
 * to identify any reporting
 * gaps.
 **/
class AbortRecurringJobExecutionRequest extends BaseServiceRequest
{
    const TAG = 'AbortRecurringJobExecutionRequest';
    const NAME = 'AbortRecurringJobExecutionRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'abortRecurringJobExecution';

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
     * @return AbortRecurringJobExecutionResponse|EbatNsBulkDataExchange_ResponseError
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

AbortRecurringJobExecutionRequest::_register();
