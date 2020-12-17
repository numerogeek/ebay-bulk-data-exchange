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
 * jobProfile
 * container that is returned in Bulk Data Exchange API's "get" calls. The
 * jobProfile
 * container consists of unique identifiers for a job, as well as data that indicates the current status of the
 * job.
 * 
 * The job profile returns data about the state of the Bulk Data Exchange job, but does not return information
 * about the status of the processing for any data file that is sent with the job request or returned with the job
 * response.
 **/
class JobProfile extends EbatNsBulkDataExchange_ComplexType
{
    const TAG = 'JobProfile';
    const NAME = 'JobProfile';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $jobId = null;

    /**
     * @var string|null
     */
    protected $jobType = null;

    /**
     * @var JobStatus|null
     */
    protected $jobStatus = null;

    /**
     * @var string|null
     */
    protected $creationTime = null;

    /**
     * @var string|null
     */
    protected $completionTime = null;

    /**
     * @var int|null
     */
    protected $errorCount = null;

    /**
     * @var float|null
     */
    protected $percentComplete = null;

    /**
     * @var string|null
     */
    protected $fileReferenceId = null;

    /**
     * @var string|null
     */
    protected $inputFileReferenceId = null;

    /**
     * @var string|null
     */
    protected $startTime = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobType()
    {
        return $this->_dc($this->jobType, 'jobType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setJobType($value)
    {
        $this->jobType = self::_string($value);
    }

    /**
     * @return JobStatus|null|mixed Depending on the assigned data converter: mixed
     */
    public function getJobStatus()
    {
        return $this->_dc($this->jobStatus);
    }

    /**
     * @param JobStatus|null $value
     * @return void
     */
    public function setJobStatus($value)
    {
        $this->jobStatus = $this->_enum($value, JobStatus::class);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompletionTime()
    {
        return $this->_dc($this->completionTime, 'completionTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCompletionTime($value)
    {
        $this->completionTime = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorCount()
    {
        return $this->_dc($this->errorCount, 'errorCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setErrorCount($value)
    {
        $this->errorCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPercentComplete()
    {
        return $this->_dc($this->percentComplete, 'percentComplete');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setPercentComplete($value)
    {
        $this->percentComplete = self::_float($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileReferenceId()
    {
        return $this->_dc($this->fileReferenceId, 'fileReferenceId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFileReferenceId($value)
    {
        $this->fileReferenceId = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInputFileReferenceId()
    {
        return $this->_dc($this->inputFileReferenceId, 'inputFileReferenceId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInputFileReferenceId($value)
    {
        $this->inputFileReferenceId = self::_string($value);
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'jobId' => [],
            'jobType' => [],
            'jobStatus' => ['type' => 'JobStatus', 'enum' => true, 'xmlns' => self::XMLNS],
            'creationTime' => [],
            'completionTime' => [],
            'errorCount' => ['type' => 'int'],
            'percentComplete' => ['type' => 'float'],
            'fileReferenceId' => [],
            'inputFileReferenceId' => [],
            'startTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

JobProfile::_register();
