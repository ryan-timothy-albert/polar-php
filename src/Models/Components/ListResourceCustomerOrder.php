<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class ListResourceCustomerOrder
{
    /**
     * $items
     *
     * @var array<CustomerOrder> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomerOrder>')]
    public array $items;

    /**
     *
     * @var Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<CustomerOrder>  $items
     * @param  Pagination  $pagination
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}