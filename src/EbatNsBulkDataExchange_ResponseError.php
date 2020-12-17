<?php

namespace InTradeSys\eBay\bulkDataExchange;


class EbatNsBulkDataExchange_ResponseError extends EbatNsBulkDataExchange_Response
{
    /**
    * @param string|null $msg
    * @param string|int|null $msg
    */
    public function __construct($msg = null, $code = null)
    {
        if ($msg !== null) {
            $this->raiseError($msg, $code);
        }
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

EbatNsBulkDataExchange_ResponseError::_register();
