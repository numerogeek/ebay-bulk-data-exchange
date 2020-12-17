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
 * Reserved for internal or future use.
 **/
class GetItemJobActionType extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'GetItemJobActionType';
    const NAME = 'GetItemJobActionType';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $action = null;

    /**
     * @var string|null
     */
    protected $jobId = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->action, 'action');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->action = self::_string($value);
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'action' => [],
            'jobId' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemJobActionType::_register();
