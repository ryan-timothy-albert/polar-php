<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class Metrics
{
    /**
     * Information about a metric.
     *
     * @var Metric $orders
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('orders')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $orders;

    /**
     * Information about a metric.
     *
     * @var Metric $revenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $revenue;

    /**
     * Information about a metric.
     *
     * @var Metric $averageOrderValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('average_order_value')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $averageOrderValue;

    /**
     * Information about a metric.
     *
     * @var Metric $oneTimeProducts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('one_time_products')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $oneTimeProducts;

    /**
     * Information about a metric.
     *
     * @var Metric $oneTimeProductsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('one_time_products_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $oneTimeProductsRevenue;

    /**
     * Information about a metric.
     *
     * @var Metric $newSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $newSubscriptions;

    /**
     * Information about a metric.
     *
     * @var Metric $newSubscriptionsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscriptions_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $newSubscriptionsRevenue;

    /**
     * Information about a metric.
     *
     * @var Metric $renewedSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('renewed_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $renewedSubscriptions;

    /**
     * Information about a metric.
     *
     * @var Metric $renewedSubscriptionsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('renewed_subscriptions_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $renewedSubscriptionsRevenue;

    /**
     * Information about a metric.
     *
     * @var Metric $activeSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $activeSubscriptions;

    /**
     * Information about a metric.
     *
     * @var Metric $monthlyRecurringRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthly_recurring_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Metric')]
    public Metric $monthlyRecurringRevenue;

    /**
     * @param  Metric  $orders
     * @param  Metric  $revenue
     * @param  Metric  $averageOrderValue
     * @param  Metric  $oneTimeProducts
     * @param  Metric  $oneTimeProductsRevenue
     * @param  Metric  $newSubscriptions
     * @param  Metric  $newSubscriptionsRevenue
     * @param  Metric  $renewedSubscriptions
     * @param  Metric  $renewedSubscriptionsRevenue
     * @param  Metric  $activeSubscriptions
     * @param  Metric  $monthlyRecurringRevenue
     */
    public function __construct(Metric $orders, Metric $revenue, Metric $averageOrderValue, Metric $oneTimeProducts, Metric $oneTimeProductsRevenue, Metric $newSubscriptions, Metric $newSubscriptionsRevenue, Metric $renewedSubscriptions, Metric $renewedSubscriptionsRevenue, Metric $activeSubscriptions, Metric $monthlyRecurringRevenue)
    {
        $this->orders = $orders;
        $this->revenue = $revenue;
        $this->averageOrderValue = $averageOrderValue;
        $this->oneTimeProducts = $oneTimeProducts;
        $this->oneTimeProductsRevenue = $oneTimeProductsRevenue;
        $this->newSubscriptions = $newSubscriptions;
        $this->newSubscriptionsRevenue = $newSubscriptionsRevenue;
        $this->renewedSubscriptions = $renewedSubscriptions;
        $this->renewedSubscriptionsRevenue = $renewedSubscriptionsRevenue;
        $this->activeSubscriptions = $activeSubscriptions;
        $this->monthlyRecurringRevenue = $monthlyRecurringRevenue;
    }
}