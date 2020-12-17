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
 * Creates a recurring Bulk Data Exchange job and assigns it a
 * recurringJobId
 * .
 * When you create a recurring job, you must specify a recurrence interval, such
 * as daily, weekly, monthly, or a frequency in minutes.
 * 
 * Once a recurring job has been created, a separate job ID is created for each
 * job that is created/executed. For example, if a job runs every hour, it will
 * have a single
 * recurringJobId
 * and each hourly job
 * will have a unique
 * jobId
 * and
 * fileReferenceId
 * .
 **/
class CreateRecurringJobRequest extends BaseServiceRequest
{
    const TAG = 'CreateRecurringJobRequest';
    const NAME = 'CreateRecurringJobRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'createRecurringJob';

    /**
     * @var string|null
     */
    protected $UUID = null;

    /**
     * @var DownloadJobRecurringFilter|null
     */
    protected $downloadJobRecurringFilter = null;

    /**
     * @var int|null
     */
    protected $frequencyInMinutes = null;

    /**
     * @var string|null
     */
    protected $downloadJobType = null;

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
    public function getUUID()
    {
        return $this->_dc($this->UUID, 'UUID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUUID($value)
    {
        $this->UUID = self::_string($value);
    }

    /**
     * @return DownloadJobRecurringFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDownloadJobRecurringFilter()
    {
        return $this->_dc($this->downloadJobRecurringFilter, 'downloadJobRecurringFilter');
    }

    /**
     * @param DownloadJobRecurringFilter|null $value
     * @return void
     */
    public function setDownloadJobRecurringFilter($value)
    {
        $this->downloadJobRecurringFilter = $value;
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
     * @return CreateRecurringJobResponse|EbatNsBulkDataExchange_ResponseError
     * @param EbatNsBulkDataExchange_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UUID' => [],
            'downloadJobRecurringFilter' => ['type' => 'DownloadJobRecurringFilter', 'xmlns' => self::XMLNS],
            'frequencyInMinutes' => ['type' => 'int'],
            'downloadJobType' => [],
            'monthlyRecurrence' => ['type' => 'MonthlyRecurrence', 'xmlns' => self::XMLNS],
            'weeklyRecurrence' => ['type' => 'WeeklyRecurrence', 'xmlns' => self::XMLNS],
            'dailyRecurrence' => ['type' => 'DailyRecurrence', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CreateRecurringJobRequest::_register();
