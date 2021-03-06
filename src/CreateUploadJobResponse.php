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
 * Type defining the root container of the
 * createUploadJob
 * response. The response includes the job ID, a file reference ID, the maximum upload file size for
 * the data file, and the standard output fields like
 * ack
 * ,
 * timestamp
 * ,
 * version
 * , and any errors/warnings that are generated by the request to create an upload job.
 * 
 * 
 * The call-specific data will be needed when using the
 * uploadFile
 * call of the File Transfer API.
 **/
class CreateUploadJobResponse extends EbatNsBulkDataExchange_Response
{
    const TAG = 'CreateUploadJobResponse';
    const NAME = 'CreateUploadJobResponse';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var string|null
     */
    protected $jobId = null;

    /**
     * @var string|null
     */
    protected $fileReferenceId = null;

    /**
     * @var string|null
     */
    protected $maxFileSize = null;


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
    public function getMaxFileSize()
    {
        return $this->_dc($this->maxFileSize, 'maxFileSize');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMaxFileSize($value)
    {
        $this->maxFileSize = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'jobId' => [],
            'fileReferenceId' => [],
            'maxFileSize' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CreateUploadJobResponse::_register();
