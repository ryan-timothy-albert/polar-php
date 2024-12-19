<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum AdvertisementSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case GrantedAt = 'granted_at';
    case MinusGrantedAt = '-granted_at';
    case Views = 'views';
    case MinusViews = '-views';
    case Clicks = 'clicks';
    case MinusClicks = '-clicks';
}
