<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutConfirmStripe - Confirm a checkout session using a Stripe confirmation token. */
class CheckoutConfirmStripe
{
    /**
     * Key-value object storing custom field values.
     *
     * @var ?CheckoutConfirmStripeCustomFieldData $customFieldData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field_data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutConfirmStripeCustomFieldData|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CheckoutConfirmStripeCustomFieldData $customFieldData = null;

    /**
     * ID of the product price to checkout. Must correspond to a price linked to the same product.
     *
     * @var ?string $productPriceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $productPriceId = null;

    /**
     *
     * @var ?int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $amount = null;

    /**
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerName = null;

    /**
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerEmail = null;

    /**
     *
     * @var ?Address $customerBillingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $customerBillingAddress = null;

    /**
     *
     * @var ?string $customerTaxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_tax_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerTaxId = null;

    /**
     * Discount code to apply to the checkout.
     *
     * @var ?string $discountCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $discountCode = null;

    /**
     * ID of the Stripe confirmation token. Required for fixed prices and custom prices.
     *
     * @var ?string $confirmationTokenId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confirmation_token_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $confirmationTokenId = null;

    /**
     * @param  ?CheckoutConfirmStripeCustomFieldData  $customFieldData
     * @param  ?string  $productPriceId
     * @param  ?int  $amount
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?Address  $customerBillingAddress
     * @param  ?string  $customerTaxId
     * @param  ?string  $discountCode
     * @param  ?string  $confirmationTokenId
     */
    public function __construct(?CheckoutConfirmStripeCustomFieldData $customFieldData = null, ?string $productPriceId = null, ?int $amount = null, ?string $customerName = null, ?string $customerEmail = null, ?Address $customerBillingAddress = null, ?string $customerTaxId = null, ?string $discountCode = null, ?string $confirmationTokenId = null)
    {
        $this->customFieldData = $customFieldData;
        $this->productPriceId = $productPriceId;
        $this->amount = $amount;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerBillingAddress = $customerBillingAddress;
        $this->customerTaxId = $customerTaxId;
        $this->discountCode = $discountCode;
        $this->confirmationTokenId = $confirmationTokenId;
    }
}