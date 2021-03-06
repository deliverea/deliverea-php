<?php
namespace Deliverea\Model;

use Deliverea\Common\ToArrayTrait;

class SLAData extends AbstractDeliverea
{
    use ToArrayTrait;

    /** @var string */
    private $tracking_start_date;

    /** @var string */
    private $tracking_delivered_date;

    /** @var string */
    private $tracking_current_code;

    /** @var int */
    private $hours_elapsed;

    /** @var int */
    private $service_sla_hours;

    /** @var string */
    private $delivery_hour_limit;

    public function __construct(
        $tracking_start_date = null,
        $tracking_delivered_date = null,
        $tracking_current_code = null,
        $hours_elapsed = 0,
        $service_sla_hours = 0,
        $delivery_hour_limit = null
    ) {
        $this->tracking_start_date = $tracking_start_date;
        $this->tracking_delivered_date = $tracking_delivered_date;
        $this->tracking_current_code = $tracking_current_code;
        $this->hours_elapsed = $hours_elapsed;
        $this->service_sla_hours = $service_sla_hours;
        $this->delivery_hour_limit = $delivery_hour_limit;
    }

    /**
     * @return string
     */
    public function getTrackingStartDate()
    {
        return $this->tracking_start_date;
    }

    /**
     * @return string
     */
    public function getTrackingDeliveredDate()
    {
        return $this->tracking_delivered_date;
    }

    /**
     * @return string
     */
    public function getTrackingCurrentCode()
    {
        return $this->tracking_current_code;
    }

    /**
     * @return int
     */
    public function getHoursElapsed()
    {
        return $this->hours_elapsed;
    }

    /**
     * @return int
     */
    public function getServiceSlaHours()
    {
        return $this->service_sla_hours;
    }

    public function getDeliveryHourLimit()
    {
        return $this->delivery_hour_limit;
    }
}