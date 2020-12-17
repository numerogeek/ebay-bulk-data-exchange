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
 * Get all recurring jobs submitted by this seller. There should only be one
 * recurring job per job type.
 **/
class GetRecurringJobsRequest extends BaseServiceRequest
{
    const TAG = 'GetRecurringJobsRequest';
    const NAME = 'GetRecurringJobsRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'getRecurringJobs';


    /**
     * @return GetRecurringJobsResponse|EbatNsBulkDataExchange_ResponseError
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
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

GetRecurringJobsRequest::_register();
