<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class SubscriptionsExportRequest
{
    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * @param  string|array<string>|null  $organizationId
     */
    public function __construct(string|array|null $organizationId = null)
    {
        $this->organizationId = $organizationId;
    }
}