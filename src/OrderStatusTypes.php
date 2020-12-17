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
 * Enumerated type defining the order status values that can be used in the
 * orderStatus
 * field, which is used if the seller wants to retrieve eBay.com or Half.com orders in a specific state.
 **/
class OrderStatusTypes extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'OrderStatusTypes';
    const NAME = 'OrderStatusTypes';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * If this value is used, only active orders are retrieved. Orders in the 'Active' state means that the buyer's
     * payment on the order has not yet cleared. This value is supported for eBay.com and Half.com orders.
     **/
    const CodeType_Active = 'Active';

    /**
     * If this value is used, orders in all states are retrieved. This is the default
     * orderStatus
     * value, and is supported for eBay.com and Half.com orders.
     **/
    const CodeType_All = 'All';

    /**
     * If this value is used, only completed orders are retrieved. Orders in the 'Completed' state indicates that the
     * buyer's payment on the order has cleared and checkout is complete. This value is supported for eBay.com and
     * Half.com orders.
     **/
    const CodeType_Completed = 'Completed';

    /**
     * If this value is used, only cancelled Half.com orders are retrieved. This value is only supported for Half.com
     * orders.
     **/
    const CodeType_Cancelled = 'Cancelled';

    /**
     * If this value is used, only Half.com orders that have been shipped by the seller are retrieved. This value is
     * only supported for Half.com orders.
     **/
    const CodeType_Shipped = 'Shipped';
    
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
     * @return OrderStatusTypes|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param OrderStatusTypes|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isAll()
    {
        return $this->_value === self::CodeType_All;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->_value === self::CodeType_Completed;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->_value === self::CodeType_Cancelled;
    }

    /**
     * @return bool
     */
    public function isShipped()
    {
        return $this->_value === self::CodeType_Shipped;
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

OrderStatusTypes::_register();
