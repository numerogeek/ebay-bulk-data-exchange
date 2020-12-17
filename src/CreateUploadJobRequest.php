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
 * Creates a Bulk Data Exchange Job and assigns it a job ID and a file reference ID. You need to add
 * these IDs to all Bulk Data Exchange calls that are related to your job, such as getJobStatusRequest.
 * You will also need to add this information to File Transfer API call requests
 * for this job.
 **/
class CreateUploadJobRequest extends BaseServiceRequest
{
    const TAG = 'CreateUploadJobRequest';
    const NAME = 'CreateUploadJobRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'createUploadJob';

    /**
     * @var string|null
     */
    protected $uploadJobType = null;

    /**
     * @var string|null
     */
    protected $UUID = null;

    /**
     * @var FileType|null
     */
    protected $fileType = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUploadJobType()
    {
        return $this->_dc($this->uploadJobType, 'uploadJobType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUploadJobType($value)
    {
        $this->uploadJobType = self::_string($value);
    }

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
     * @return FileType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileType()
    {
        return $this->_dc($this->fileType);
    }

    /**
     * @param FileType|null $value
     * @return void
     */
    public function setFileType($value)
    {
        $this->fileType = $this->_enum($value, FileType::class);
    }

    /**
     * @return CreateUploadJobResponse|EbatNsBulkDataExchange_ResponseError
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
            'uploadJobType' => [],
            'UUID' => [],
            'fileType' => ['type' => 'FileType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CreateUploadJobRequest::_register();
