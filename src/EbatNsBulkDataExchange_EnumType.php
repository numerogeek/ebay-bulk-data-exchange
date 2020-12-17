<?php

namespace InTradeSys\eBay\bulkDataExchange;


class EbatNsBulkDataExchange_EnumType extends EbatNsBulkDataExchange_SimpleType
{
    public function __toString()
    {
        return $this->getTypeValue();
    }
}
