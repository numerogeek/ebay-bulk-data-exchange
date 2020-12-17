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
 * Creates a recurring Bulk Data Exchange job for different LMS Reports and assigns it a <b
 * class="con">recurringJobId
 * .
 * When you create a recurring job, you must specify a recurrence interval, such
 * as daily, weekly, monthly, or a frequency in minutes.
 * 
 * Once a recurring job has been created, a separate job ID is created for each
 * job that is created/executed. For example, if a job runs every hour, it will
 * have a single <b class="con">recurringJobId
 * and each hourly job
 * will have a unique <b class="con">jobId
 * and <b
 * class="con">fileReferenceI
 * d.
 **/
class DownloadJobRecurringFilter extends BaseServiceRequest
{
    const TAG = 'DownloadJobRecurringFilter';
    const NAME = 'DownloadJobRecurringFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var OrderReportRecurringFilter|null
     */
    protected $orderReportRecurringFilter = null;


    /**
     * @return OrderReportRecurringFilter|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderReportRecurringFilter()
    {
        return $this->_dc($this->orderReportRecurringFilter, 'orderReportRecurringFilter');
    }

    /**
     * @param OrderReportRecurringFilter|null $value
     * @return void
     */
    public function setOrderReportRecurringFilter($value)
    {
        $this->orderReportRecurringFilter = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['orderReportRecurringFilter' => ['type' => 'OrderReportRecurringFilter', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

DownloadJobRecurringFilter::_register();
