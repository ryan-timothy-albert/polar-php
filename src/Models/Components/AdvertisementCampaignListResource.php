<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class AdvertisementCampaignListResource
{
    /**
     * $items
     *
     * @var array<AdvertisementCampaign> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\AdvertisementCampaign>')]
    public array $items;

    /**
     *
     * @var Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * The dimensions (width, height) in pixels of the advertisement images.
     *
     * @var array<int> $dimensions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dimensions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>')]
    public array $dimensions;

    /**
     * @param  array<AdvertisementCampaign>  $items
     * @param  Pagination  $pagination
     * @param  array<int>  $dimensions
     */
    public function __construct(array $items, Pagination $pagination, array $dimensions)
    {
        $this->items = $items;
        $this->pagination = $pagination;
        $this->dimensions = $dimensions;
    }
}