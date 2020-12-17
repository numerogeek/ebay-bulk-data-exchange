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
 * Begins processing the data in the uploaded file. For example, if the data
 * file contains data for the
 * AddFixedPriceItem
 * request, the Bulk Data Exchange API
 * reads and sends this item data from the uploaded file to the eBay Trading API
 * (and adds the fixed-price items to the eBay site).
 **/
class StartUploadJobRequest extends BaseServiceRequest
{
    const TAG = 'StartUploadJobRequest';
    const NAME = 'StartUploadJobRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'startUploadJob';

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
     * @return StartUploadJobResponse|EbatNsBulkDataExchange_ResponseError
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

StartUploadJobRequest::_register();
