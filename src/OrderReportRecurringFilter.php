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
 * Creates a recurring Bulk Data Exchange job for Order Report and assigns it a <b
 * class="con">recurringJobId
 * .
 * When creating a recurring job for OrderReport, you must specify the version,
 * you must specify a recurrence interval, such
 * as daily, weekly, monthly, or a frequency in minutes.
 * You may specify the listingType as 'Half' else by default only 'ebay' orders are returned.
 * You may specify the createTimeRange or modTimeRange to sepcify the time range for which orders will be
 * returned
 * createTimeRange if provided with modTimeRnage then createTimeRange takes precedence and modTimeRange is
 * ignored.
 * else the default range is 30 days from the job start time.
 * Be dafault, Orders returned will have includeFinalValueFee = false and all orders with orderStatus =
 * completed, cancelled, active and shipped
 * will be returned.
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
class OrderReportRecurringFilter extends BaseServiceRequest
{
    const TAG = 'OrderReportRecurringFilter';
    const NAME = 'OrderReportRecurringFilter';
    const XMLNS = 'http://www.ebay.com/marketplace/services';

    /**
     * @var int|null
     */
    protected $createTimeRange = null;

    /**
     * @var int|null
     */
    protected $modTimeRange = null;

    /**
     * @var ListingType|null
     */
    protected $listingType = null;

    /**
     * @var int|null
     * @required
     */
    protected $version = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreateTimeRange()
    {
        return $this->_dc($this->createTimeRange, 'createTimeRange');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCreateTimeRange($value)
    {
        $this->createTimeRange = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeRange()
    {
        return $this->_dc($this->modTimeRange, 'modTimeRange');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setModTimeRange($value)
    {
        $this->modTimeRange = self::_int($value);
    }

    /**
     * @return ListingType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->listingType);
    }

    /**
     * @param ListingType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->listingType = $this->_enum($value, ListingType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVersion()
    {
        return $this->_dc($this->version, 'version');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setVersion($value)
    {
        $this->version = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'createTimeRange' => ['type' => 'int'],
            'modTimeRange' => ['type' => 'int'],
            'listingType' => ['type' => 'ListingType', 'enum' => true, 'xmlns' => self::XMLNS],
            'version' => ['required' => true, 'type' => 'int', 'cardinality' => '1..1']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OrderReportRecurringFilter::_register();
