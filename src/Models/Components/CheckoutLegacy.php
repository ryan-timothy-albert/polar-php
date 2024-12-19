<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutLegacy - A checkout session. */
class CheckoutLegacy
{
    /**
     * The ID of the checkout.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Product data for a checkout session.
     *
     * @var CheckoutProduct $product
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutProduct')]
    public CheckoutProduct $product;

    /**
     *
     * @var ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceRecurringFixed|\Polar\Models\Components\ProductPriceRecurringCustom|\Polar\Models\Components\ProductPriceRecurringFree|\Polar\Models\Components\ProductPriceOneTimeFixed|\Polar\Models\Components\ProductPriceOneTimeCustom|\Polar\Models\Components\ProductPriceOneTimeFree')]
    public ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice;

    /**
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_email')]
    public ?string $customerEmail;

    /**
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_name')]
    public ?string $customerName;

    /**
     * URL the customer should be redirected to complete the purchase.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  string  $id
     * @param  CheckoutProduct  $product
     * @param  ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree  $productPrice
     * @param  ?string  $customerEmail
     * @param  ?string  $customerName
     * @param  ?string  $url
     */
    public function __construct(string $id, CheckoutProduct $product, ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice, ?string $customerEmail = null, ?string $customerName = null, ?string $url = null)
    {
        $this->id = $id;
        $this->product = $product;
        $this->productPrice = $productPrice;
        $this->customerEmail = $customerEmail;
        $this->customerName = $customerName;
        $this->url = $url;
    }
}