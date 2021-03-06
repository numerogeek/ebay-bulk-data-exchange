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
 * deleteRecurringJob
 * response. The response includes the standard output fields like
 * ack
 * ,
 * timestamp
 * ,
 * version
 * , and any errors/warnings that are generated by the request to delete a recurring job. The
 * ack
 * values of 'Success' or 'Failure' will indicate whether or not the specified recurring job was successfully
 * deleted.
 **/
class DeleteRecurringJobResponse extends EbatNsBulkDataExchange_Response
{
    const TAG = 'DeleteRecurringJobResponse';
    const NAME = 'DeleteRecurringJobResponse';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

DeleteRecurringJobResponse::_register();
