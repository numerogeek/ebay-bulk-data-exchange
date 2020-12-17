<?php

namespace InTradeSys\eBay\bulkDataExchange;


/**
 * This class is the basic interface to the eBay-Webserice for the user.
 * We generated the "proxy" externally as the SOAP-wsdl proxy generator does
 * not really did what we needed.
 */
class EbatNsBulkDataExchange_ServiceProxy extends EbatNsBulkDataExchange_Client
{
    /**
     * Setup the ServiceProxy
     *
     * @param mixed $sessionOrConfig Could be either a path to a config-file or a EbatNs_Session-object
     * @param string $converter Name of the converter class used, defaults to 'EbatNs_DataConverterIso' for convertion from uft8 to iso-8859-1
     */
    public function __construct($sessionOrConfig, $converter = 'InTradeSys\eBay\bulkDataExchange\EbatNsBulkDataExchange_DataConverterUtf8')
    {
        $session = $sessionOrConfig instanceof EbatNsBulkDataExchange_Session ? $sessionOrConfig : new EbatNsBulkDataExchange_Session($sessionOrConfig);
        parent::__construct($session, $converter);
    }

    /**
     * @param $response
     * @param bool $onlyErrors true (default) will ignore warnings, so we detect ONLY real failures ...
     * @return bool
     */
    public function isGood($response, $onlyErrors = true)
    {
        return $response->isGood($onlyErrors);
    }

    /**
     * Checks if the response had failures
     *
     * @param EbatNsBulkDataExchange_Response $response	A response returned by any of the eBay API calls
     * @return bool
     */
    public function isFailure($response)
    {
        return !!$response->getFailures();
    }

        /**
     * @param CreateUploadJobRequest
     * @return CreateUploadJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function createUploadJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param StartUploadJobRequest
     * @return StartUploadJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function startUploadJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AbortJobRequest
     * @return AbortJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function abortJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetJobsRequest
     * @return GetJobsResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function getJobs($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetJobStatusRequest
     * @return GetJobStatusResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function getJobStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param StartDownloadJobRequest
     * @return StartDownloadJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function startDownloadJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param CreateRecurringJobRequest
     * @return CreateRecurringJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function createRecurringJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param DeleteRecurringJobRequest
     * @return DeleteRecurringJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function deleteRecurringJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetRecurringJobsRequest
     * @return GetRecurringJobsResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function getRecurringJobs($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetRecurringJobExecutionStatusRequest
     * @return GetRecurringJobExecutionStatusResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function getRecurringJobExecutionStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetRecurringJobExecutionHistoryRequest
     * @return GetRecurringJobExecutionHistoryResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function getRecurringJobExecutionHistory($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ActivateRecurringJobRequest
     * @return ActivateRecurringJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function activateRecurringJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SuspendRecurringJobRequest
     * @return SuspendRecurringJobResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function suspendRecurringJob($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AbortRecurringJobExecutionRequest
     * @return AbortRecurringJobExecutionResponse|EbatNsBulkDataExchange_ResponseError|array
     **/
    function abortRecurringJobExecution($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }
}
