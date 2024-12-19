<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutLinkUpdate - Schema to update an existing checkout link. */
class CheckoutLinkUpdate
{
    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.
     *
     * @var ?bool $allowDiscountCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_discount_codes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowDiscountCodes = null;

    /**
     *
     * @var ?string $productPriceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $productPriceId = null;

    /**
     * ID of the discount to apply to the checkout. If the discount is not applicable anymore when opening the checkout link, it'll be ignored.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $discountId = null;

    /**
     * URL where the customer will be redirected after a successful payment.You can add the `checkout_id={CHECKOUT_ID}` query parameter to retrieve the checkout session id.
     *
     * @var ?string $successUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $successUrl = null;

    /**
     * @param  ?array<string, mixed>  $metadata
     * @param  ?string  $label
     * @param  ?bool  $allowDiscountCodes
     * @param  ?string  $productPriceId
     * @param  ?string  $discountId
     * @param  ?string  $successUrl
     */
    public function __construct(?array $metadata = null, ?string $label = null, ?bool $allowDiscountCodes = null, ?string $productPriceId = null, ?string $discountId = null, ?string $successUrl = null)
    {
        $this->metadata = $metadata;
        $this->label = $label;
        $this->allowDiscountCodes = $allowDiscountCodes;
        $this->productPriceId = $productPriceId;
        $this->discountId = $discountId;
        $this->successUrl = $successUrl;
    }
}