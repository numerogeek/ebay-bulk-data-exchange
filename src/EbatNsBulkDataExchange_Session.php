<?php

namespace InTradeSys\eBay\bulkDataExchange;


class EbatNsBulkDataExchange_Session extends EbatNsBulkDataExchange_AbstractBasicSession
{
    /**
    * @param string|null $configFile
    */
    public function __construct($configFile = null)
    {
        parent::__construct($configFile, [
            'https://webservices.ebay.com/BulkDataExchangeService',
            'https://webservices.sandbox.ebay.com/BulkDataExchangeService'
        ]);
    }
}
