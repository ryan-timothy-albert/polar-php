<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;

use Brick\DateTime\LocalDate;
/** MetricsLimits - Date limits to get metrics. */
class MetricsLimits
{
    /**
     * Minimum date to get metrics.
     *
     * @var LocalDate $minDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('min_date')]
    public LocalDate $minDate;

    /**
     * Date interval limits to get metrics for each interval.
     *
     * @var MetricsIntervalsLimits $intervals
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('intervals')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\MetricsIntervalsLimits')]
    public MetricsIntervalsLimits $intervals;

    /**
     * @param  LocalDate  $minDate
     * @param  MetricsIntervalsLimits  $intervals
     */
    public function __construct(LocalDate $minDate, MetricsIntervalsLimits $intervals)
    {
        $this->minDate = $minDate;
        $this->intervals = $intervals;
    }
}