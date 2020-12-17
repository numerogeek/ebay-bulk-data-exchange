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
 * Lists all jobs that have been submitted with this Seller ID that have the job type
 * specified in the request. You can enter a request with no job type field to see the
 * status of all of your jobs, you can put a few job type fields in your request to
 * see the status for specific job types, or you can put a single job type field in
 * your request.
 **/
class GetJobsRequest extends BaseServiceRequest
{
    const TAG = 'GetJobsRequest';
    const NAME = 'GetJobsRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'getJobs';

    /**
     * @var string|null
     */
    protected $creationTimeFrom = null;

    /**
     * @var string|null
     */
    protected $creationTimeTo = null;

    /**
     * @var string[]|null
     */
    protected $jobType = [];

    /**
     * @var JobStatus[]|null
     */
    protected $jobStatus = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTimeFrom()
    {
        return $this->_dc($this->creationTimeFrom, 'creationTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTimeFrom($value)
    {
        $this->creationTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTimeTo()
    {
        return $this->_dc($this->creationTimeTo, 'creationTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTimeTo($value)
    {
        $this->creationTimeTo = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getJobType($index = null)
    {
        return $this->_dc($index === null
            ? $this->jobType
            : (count($this->jobType) > $index
                ? $this->jobType[$index]
                : null), 'jobType');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setJobType($value, $index = null)
    {
        if ($index === null) {
            $this->jobType = $value;
        } else {
            $this->jobType[$index] = [];
            
            foreach ($value as $item) {
                $this->addJobType($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addJobType($value)
    {
        $this->jobType[] = self::_string($value);
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
     * @return GetJobsResponse|EbatNsBulkDataExchange_ResponseError
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
            'creationTimeFrom' => [],
            'creationTimeTo' => [],
            'jobType' => ['cardinality' => '0..*'],
            'jobStatus' => ['type' => 'JobStatus', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetJobsRequest::_register();
