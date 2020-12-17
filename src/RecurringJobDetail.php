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
 * Type defining the
 * recurringJobDetail
 * container that is returned for each recurring job defined for the seller. The
 * recurringJobDetail
 * container consists of a unique identifier for the recurring job, the current status of the recurring job
 * ('Active' or 'Suspended), the frequency of the recurring job (daily, weekly, monthly), and the download job type.
 **/
class RecurringJobDetail extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'RecurringJobDetail';
    const NAME = 'RecurringJobDetail';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $recurringJobId = null;

    /**
     * @var string|null
     */
    protected $creationTime = null;

    /**
     * @var int|null
     */
    protected $frequencyInMinutes = null;

    /**
     * @var string|null
     */
    protected $downloadJobType = null;

    /**
     * @var RecurringJobStatus|null
     */
    protected $jobStatus = null;

    /**
     * @var MonthlyRecurrence|null
     */
    protected $monthlyRecurrence = null;

    /**
     * @var WeeklyRecurrence|null
     */
    protected $weeklyRecurrence = null;

    /**
     * @var DailyRecurrence|null
     */
    protected $dailyRecurrence = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecurringJobId()
    {
        return $this->_dc($this->recurringJobId, 'recurringJobId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecurringJobId($value)
    {
        $this->recurringJobId = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTime()
    {
        return $this->_dc($this->creationTime, 'creationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTime($value)
    {
        $this->creationTime = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFrequencyInMinutes()
    {
        return $this->_dc($this->frequencyInMinutes, 'frequencyInMinutes');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFrequencyInMinutes($value)
    {
        $this->frequencyInMinutes = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDownloadJobType()
    {
        return $this->_dc($this->downloadJobType, 'downloadJobType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDownloadJobType($value)
    {
        $this->downloadJobType = self::_string($value);
    }

    /**
     * @return RecurringJobStatus|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobStatus()
    {
        return $this->_dc($this->jobStatus);
    }

    /**
     * @param RecurringJobStatus|null $value
     * @return void
     */
    public function setJobStatus($value)
    {
        $this->jobStatus = $this->_enum($value, RecurringJobStatus::class);
    }

    /**
     * @return MonthlyRecurrence|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMonthlyRecurrence()
    {
        return $this->_dc($this->monthlyRecurrence, 'monthlyRecurrence');
    }

    /**
     * @param MonthlyRecurrence|null $value
     * @return void
     */
    public function setMonthlyRecurrence($value)
    {
        $this->monthlyRecurrence = $value;
    }

    /**
     * @return WeeklyRecurrence|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeeklyRecurrence()
    {
        return $this->_dc($this->weeklyRecurrence, 'weeklyRecurrence');
    }

    /**
     * @param WeeklyRecurrence|null $value
     * @return void
     */
    public function setWeeklyRecurrence($value)
    {
        $this->weeklyRecurrence = $value;
    }

    /**
     * @return DailyRecurrence|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDailyRecurrence()
    {
        return $this->_dc($this->dailyRecurrence, 'dailyRecurrence');
    }

    /**
     * @param DailyRecurrence|null $value
     * @return void
     */
    public function setDailyRecurrence($value)
    {
        $this->dailyRecurrence = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'recurringJobId' => [],
            'creationTime' => [],
            'frequencyInMinutes' => ['type' => 'int'],
            'downloadJobType' => [],
            'jobStatus' => ['type' => 'RecurringJobStatus', 'enum' => true, 'xmlns' => self::XMLNS],
            'monthlyRecurrence' => ['type' => 'MonthlyRecurrence', 'xmlns' => self::XMLNS],
            'weeklyRecurrence' => ['type' => 'WeeklyRecurrence', 'xmlns' => self::XMLNS],
            'dailyRecurrence' => ['type' => 'DailyRecurrence', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RecurringJobDetail::_register();
