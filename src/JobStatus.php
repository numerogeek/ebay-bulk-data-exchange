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
 * Enumerated type defining the possible states of a Bulk Data Exchange job.
 **/
class JobStatus extends EbatNsBulkDataExchange_EnumType
{
    const TAG = 'JobStatus';
    const NAME = 'JobStatus';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * The job ID and file reference ID have been created as a result of the
     * 
     * createUploadJobRequest
     * or the
     * startDownloadJobRequest
     * .
     **/
    const CodeType_Created = 'Created';

    /**
     * The job has been internally scheduled for processing by the Bulk Data
     * Exchange API.
     **/
    const CodeType_Scheduled = 'Scheduled';

    /**
     * Processing on the data file or the report has begun.
     **/
    const CodeType_InProcess = 'InProcess';

    /**
     * Processing on the data file or the report has finished.
     **/
    const CodeType_Completed = 'Completed';

    /**
     * The Bulk Data Exchange has been aborted due to the
     * abortJob
     * call.
     **/
    const CodeType_Aborted = 'Aborted';

    /**
     * The Bulk Data Exchange job has not completed successfully, due to
     * incorrect data format, request errors, or Bulk Data Exchange
     * API errors.
     **/
    const CodeType_Failed = 'Failed';
    
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
     * @return JobStatus|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param JobStatus|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = $value === null ? null : constant('self::CodeType_' . $value);
    }

    /**
     * @return bool
     */
    public function isCreated()
    {
        return $this->_value === self::CodeType_Created;
    }

    /**
     * @return bool
     */
    public function isScheduled()
    {
        return $this->_value === self::CodeType_Scheduled;
    }

    /**
     * @return bool
     */
    public function isInProcess()
    {
        return $this->_value === self::CodeType_InProcess;
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
    public function isAborted()
    {
        return $this->_value === self::CodeType_Aborted;
    }

    /**
     * @return bool
     */
    public function isFailed()
    {
        return $this->_value === self::CodeType_Failed;
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

JobStatus::_register();
