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
 * Begins processing the data for a report file to download. You must use the
 * getJobStatus
 * or
 * getRecurringJobExecutionStatus
 * calls to determine when the report data is available for download.
 **/
class StartDownloadJobRequest extends BaseServiceRequest
{
    const TAG = 'StartDownloadJobRequest';
    const NAME = 'StartDownloadJobRequest';
    const XMLNS = 'http://www.ebay.com/marketplace/services';
    const REQUEST = 'startDownloadJob';

    /**
     * @var string|null
     */
    protected $downloadJobType = null;

    /**
     * @var string|null
     */
    protected $UUID = null;

    /**
     * @var DownloadRequestFilter|null
     */
    protected $downloadRequestFilter = null;

    /**
     * @var int|null
     */
    protected $sgfAppRecurringGUID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $recurringJob = null;


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
     * @return DownloadRequestFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDownloadRequestFilter()
    {
        return $this->_dc($this->downloadRequestFilter, 'downloadRequestFilter');
    }

    /**
     * @param DownloadRequestFilter|null $value
     * @return void
     */
    public function setDownloadRequestFilter($value)
    {
        $this->downloadRequestFilter = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSgfAppRecurringGUID()
    {
        return $this->_dc($this->sgfAppRecurringGUID, 'sgfAppRecurringGUID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSgfAppRecurringGUID($value)
    {
        $this->sgfAppRecurringGUID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecurringJob()
    {
        return $this->_dc($this->recurringJob === 'true', 'recurringJob');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRecurringJob($value)
    {
        $this->recurringJob = self::_bool($value);
    }

    /**
     * @return StartDownloadJobResponse|EbatNsBulkDataExchange_ResponseError
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
            'downloadJobType' => [],
            'UUID' => [],
            'downloadRequestFilter' => ['type' => 'DownloadRequestFilter', 'xmlns' => self::XMLNS],
            'sgfAppRecurringGUID' => ['type' => 'int'],
            'recurringJob' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StartDownloadJobRequest::_register();
