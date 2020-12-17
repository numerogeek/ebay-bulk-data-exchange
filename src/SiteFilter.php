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
class SiteFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'SiteFilter';
    const NAME = 'SiteFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string[]|null
     * @required
     */
    protected $globalId = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getGlobalId($index = null)
    {
        return $this->_dc($index === null
            ? $this->globalId
            : (count($this->globalId) > $index
                ? $this->globalId[$index]
                : null), 'globalId');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setGlobalId($value, $index = null)
    {
        if ($index === null) {
            $this->globalId = $value;
        } else {
            $this->globalId[$index] = [];
            
            foreach ($value as $item) {
                $this->addGlobalId($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addGlobalId($value)
    {
        $this->globalId[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['globalId' => ['required' => true, 'cardinality' => '1..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SiteFilter::_register();
