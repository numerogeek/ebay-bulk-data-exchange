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
 * This type defines the request container for all service operations.
 **/
class BaseServiceRequest extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'BaseServiceRequest';
    const NAME = 'BaseServiceRequest';
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

BaseServiceRequest::_register();
