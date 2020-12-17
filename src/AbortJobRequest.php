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
 * Stops (aborts) processing the uploaded file or processing the report file
 * (to be downloaded). When your application makes this call, the
 * processing will stop, but it may not stop immediately (much like when you
 * abort a job from your printer queue).
 **/
class AbortJobRequest extends BaseServiceRequest
{
    const TAG = 'AbortJobRequest';
    const NAME = 'AbortJobRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'abortJob';

    /**
     * @var string|null
     */
    protected $jobId = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobId()
    {
        return $this->_dc($this->jobId, 'jobId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setJobId($value)
    {
        $this->jobId = self::_string($value);
    }

    /**
     * @return AbortJobResponse|EbatNsBulkDataExchange_ResponseError
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
        self::assignElements(['jobId' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

AbortJobRequest::_register();
