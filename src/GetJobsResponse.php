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
 * getJobs
 * response. The response includes one or more
 * jobProfile
 * containers, consisting of unique identifiers and job status and data for each retrieved job, as well as the
 * standard output fields like
 * ack
 * ,
 * timestamp
 * ,
 * version
 * , and any errors/warnings that are generated by the request to retrieve jobs.
 * 
 * 
 * The call-specific data will be needed when using the
 * uploadFile
 * call of the File Transfer API.
 **/
class GetJobsResponse extends EbatNsBulkDataExchange_Response
{
    const TAG = 'GetJobsResponse';
    const NAME = 'GetJobsResponse';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var JobProfile[]|null
     */
    protected $jobProfile = [];


    /**
     * @return JobProfile[]|JobProfile|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getJobProfile($index = null)
    {
        return $this->_dc($index === null
            ? $this->jobProfile
            : (count($this->jobProfile) > $index
                ? $this->jobProfile[$index]
                : null), 'jobProfile');
    }

    /**
     * @param JobProfile|null|JobProfile[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setJobProfile($value, $index = null)
    {
        if ($index === null) {
            $this->jobProfile = $value;
        } else {
            $this->jobProfile[$index] = [];
            
            foreach ($value as $item) {
                $this->addJobProfile($item);
            }
        }
    }

    /**
     * @param JobProfile|null $value
     * @return void
     */
    public function addJobProfile($value)
    {
        $this->jobProfile[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['jobProfile' => ['type' => 'JobProfile', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetJobsResponse::_register();
