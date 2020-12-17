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
 * Returns all instances of a recurring job that have occurred so far. To see only
 * the status information for the latest instance of a recurring job, use
 * 
 * getRecurringJobExecutionStatus
 * .
 **/
class GetRecurringJobExecutionHistoryRequest extends BaseServiceRequest
{
    const TAG = 'GetRecurringJobExecutionHistoryRequest';
    const NAME = 'GetRecurringJobExecutionHistoryRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'getRecurringJobExecutionHistory';

    /**
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @var string|null
     */
    protected $endTime = null;

    /**
     * @var string|null
     */
    protected $recurringJobId = null;

    /**
     * @var JobStatus[]|null
     */
    protected $jobStatus = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->startTime, 'startTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->startTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->endTime, 'endTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->endTime = self::_string($value);
    }

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
     * @return string[]|JobStatus|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getJobStatus($index = null)
    {
        return $this->_dc($index === null
            ? $this->jobStatus
            : (count($this->jobStatus) > $index
                ? $this->jobStatus[$index]
                : null));
    }

    /**
     * @param JobStatus|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setJobStatus($value, $index = null)
    {
        if ($index === null) {
            $this->jobStatus = $value;
        } else {
            $this->jobStatus[$index] = [];
            
            foreach ($value as $item) {
                $this->addJobStatus($item);
            }
        }
    }

    /**
     * @param JobStatus|null $value
     * @return void
     */
    public function addJobStatus($value)
    {
        $this->jobStatus[] = $this->_enum($value, JobStatus::class);
    }

    /**
     * @return GetRecurringJobExecutionHistoryResponse|EbatNsBulkDataExchange_ResponseError
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
            'startTime' => [],
            'endTime' => [],
            'recurringJobId' => [],
            'jobStatus' => ['type' => 'JobStatus', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetRecurringJobExecutionHistoryRequest::_register();
