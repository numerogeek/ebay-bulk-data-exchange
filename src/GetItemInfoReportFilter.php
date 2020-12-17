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
class GetItemInfoReportFilter extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'GetItemInfoReportFilter';
    const NAME = 'GetItemInfoReportFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var GetItemJobActionType|null
     */
    protected $jobAction = null;

    /**
     * @var ItemEventType|null
     */
    protected $filterType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeAttributes = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $includeDescription = null;

    /**
     * @var string|null
     */
    protected $reportDateFrom = null;

    /**
     * @var string|null
     */
    protected $reportDateTo = null;

    /**
     * @var string[]|null
     */
    protected $timeFrame = [];

    /**
     * @var string[]|null
     */
    protected $changedFieldSelector = [];


    /**
     * @return GetItemJobActionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobAction()
    {
        return $this->_dc($this->jobAction, 'jobAction');
    }

    /**
     * @param GetItemJobActionType|null $value
     * @return void
     */
    public function setJobAction($value)
    {
        $this->jobAction = $value;
    }

    /**
     * @return ItemEventType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFilterType()
    {
        return $this->_dc($this->filterType);
    }

    /**
     * @param ItemEventType|null $value
     * @return void
     */
    public function setFilterType($value)
    {
        $this->filterType = $this->_enum($value, ItemEventType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeAttributes()
    {
        return $this->_dc($this->includeAttributes === 'true', 'includeAttributes');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeAttributes($value)
    {
        $this->includeAttributes = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeDescription()
    {
        return $this->_dc($this->includeDescription === 'true', 'includeDescription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeDescription($value)
    {
        $this->includeDescription = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReportDateFrom()
    {
        return $this->_dc($this->reportDateFrom, 'reportDateFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReportDateFrom($value)
    {
        $this->reportDateFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReportDateTo()
    {
        return $this->_dc($this->reportDateTo, 'reportDateTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReportDateTo($value)
    {
        $this->reportDateTo = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTimeFrame($index = null)
    {
        return $this->_dc($index === null
            ? $this->timeFrame
            : (count($this->timeFrame) > $index
                ? $this->timeFrame[$index]
                : null), 'timeFrame');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTimeFrame($value, $index = null)
    {
        if ($index === null) {
            $this->timeFrame = $value;
        } else {
            $this->timeFrame[$index] = [];
            
            foreach ($value as $item) {
                $this->addTimeFrame($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addTimeFrame($value)
    {
        $this->timeFrame[] = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getChangedFieldSelector($index = null)
    {
        return $this->_dc($index === null
            ? $this->changedFieldSelector
            : (count($this->changedFieldSelector) > $index
                ? $this->changedFieldSelector[$index]
                : null), 'changedFieldSelector');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setChangedFieldSelector($value, $index = null)
    {
        if ($index === null) {
            $this->changedFieldSelector = $value;
        } else {
            $this->changedFieldSelector[$index] = [];
            
            foreach ($value as $item) {
                $this->addChangedFieldSelector($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addChangedFieldSelector($value)
    {
        $this->changedFieldSelector[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'jobAction' => ['type' => 'GetItemJobActionType', 'xmlns' => self::XMLNS],
            'filterType' => ['type' => 'ItemEventType', 'enum' => true, 'xmlns' => self::XMLNS],
            'includeAttributes' => ['type' => 'bool'],
            'includeDescription' => ['type' => 'bool'],
            'reportDateFrom' => [],
            'reportDateTo' => [],
            'timeFrame' => ['cardinality' => '0..*'],
            'changedFieldSelector' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemInfoReportFilter::_register();
