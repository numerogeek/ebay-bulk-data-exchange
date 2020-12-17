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
class ItemEventType extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'ItemEventType';
    const NAME = 'ItemEventType';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_New = 'New';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_Changed = 'Changed';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return ItemEventType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemEventType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->_value === self::CodeType_New;
    }

    /**
     * @return bool
     */
    public function isChanged()
    {
        return $this->_value === self::CodeType_Changed;
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

ItemEventType::_register();
