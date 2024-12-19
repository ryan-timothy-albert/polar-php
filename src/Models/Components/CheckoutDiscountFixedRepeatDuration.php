<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * CheckoutDiscountFixedRepeatDuration - Schema for a fixed amount discount that is applied on every invoice
 *
 * for a certain number of months.
 */
class CheckoutDiscountFixedRepeatDuration
{
    /**
     *
     * @var DiscountDuration $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountDuration')]
    public DiscountDuration $duration;

    /**
     *
     * @var int $durationInMonths
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration_in_months')]
    public int $durationInMonths;

    /**
     *
     * @var DiscountType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountType')]
    public DiscountType $type;

    /**
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public ?string $code;

    /**
     * @param  DiscountDuration  $duration
     * @param  int  $durationInMonths
     * @param  DiscountType  $type
     * @param  int  $amount
     * @param  string  $currency
     * @param  string  $id
     * @param  string  $name
     * @param  ?string  $code
     */
    public function __construct(DiscountDuration $duration, int $durationInMonths, DiscountType $type, int $amount, string $currency, string $id, string $name, ?string $code = null)
    {
        $this->duration = $duration;
        $this->durationInMonths = $durationInMonths;
        $this->type = $type;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
    }
}