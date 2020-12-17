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
 * Type defining the root container of the
 * getRecurringJobExecutionStatus
 * response. The response includes one
 * jobProfile
 * container, and each container consists of unique identifiers for the recurring job, as well as data that
 * indicates the current status of the recurring job. The response also includes the standard output fields like
 * ack
 * ,
 * timestamp
 * ,
 * version
 * , and any errors/warnings that are generated by the request to retrieve a specific recurring job.
 **/
class GetRecurringJobExecutionStatusResponse extends EbatNsBulkDataExchange_Response
{
    const TAG = 'GetRecurringJobExecutionStatusResponse';
    const NAME = 'GetRecurringJobExecutionStatusResponse';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var JobProfile|null
     */
    protected $jobProfile = null;


    /**
     * @return JobProfile|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobProfile()
    {
        return $this->_dc($this->jobProfile, 'jobProfile');
    }

    /**
     * @param JobProfile|null $value
     * @return void
     */
    public function setJobProfile($value)
    {
        $this->jobProfile = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['jobProfile' => ['type' => 'JobProfile', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetRecurringJobExecutionStatusResponse::_register();
