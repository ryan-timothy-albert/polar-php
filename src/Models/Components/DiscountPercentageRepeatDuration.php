<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * DiscountPercentageRepeatDuration - Schema for a percentage discount that is applied on every invoice
 *
 * for a certain number of months.
 */
class DiscountPercentageRepeatDuration
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
     * @var int $basisPoints
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('basis_points')]
    public int $basisPoints;

    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * $metadata
     *
     * @var array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>')]
    public array $metadata;

    /**
     * Name of the discount. Will be displayed to the customer when the discount is applied.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Number of times the discount has been redeemed.
     *
     * @var int $redemptionsCount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('redemptions_count')]
    public int $redemptionsCount;

    /**
     * The organization ID.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * $products
     *
     * @var array<DiscountProduct> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\DiscountProduct>')]
    public array $products;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * Code customers can use to apply the discount during checkout.
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public ?string $code;

    /**
     * Timestamp after which the discount is redeemable.
     *
     * @var ?\DateTime $startsAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('starts_at')]
    public ?\DateTime $startsAt;

    /**
     * Timestamp after which the discount is no longer redeemable.
     *
     * @var ?\DateTime $endsAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ends_at')]
    public ?\DateTime $endsAt;

    /**
     * Maximum number of times the discount can be redeemed.
     *
     * @var ?int $maxRedemptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_redemptions')]
    public ?int $maxRedemptions;

    /**
     * @param  DiscountDuration  $duration
     * @param  int  $durationInMonths
     * @param  DiscountType  $type
     * @param  int  $basisPoints
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  array<string, mixed>  $metadata
     * @param  string  $name
     * @param  int  $redemptionsCount
     * @param  string  $organizationId
     * @param  array<DiscountProduct>  $products
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $code
     * @param  ?\DateTime  $startsAt
     * @param  ?\DateTime  $endsAt
     * @param  ?int  $maxRedemptions
     */
    public function __construct(DiscountDuration $duration, int $durationInMonths, DiscountType $type, int $basisPoints, \DateTime $createdAt, string $id, array $metadata, string $name, int $redemptionsCount, string $organizationId, array $products, ?\DateTime $modifiedAt = null, ?string $code = null, ?\DateTime $startsAt = null, ?\DateTime $endsAt = null, ?int $maxRedemptions = null)
    {
        $this->duration = $duration;
        $this->durationInMonths = $durationInMonths;
        $this->type = $type;
        $this->basisPoints = $basisPoints;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->redemptionsCount = $redemptionsCount;
        $this->organizationId = $organizationId;
        $this->products = $products;
        $this->modifiedAt = $modifiedAt;
        $this->code = $code;
        $this->startsAt = $startsAt;
        $this->endsAt = $endsAt;
        $this->maxRedemptions = $maxRedemptions;
    }
}