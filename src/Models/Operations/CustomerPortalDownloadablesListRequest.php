<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class CustomerPortalDownloadablesListRequest
{
    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * Filter by benefit ID.
     *
     * @var string|array<string>|null $benefitId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=benefit_id')]
    public string|array|null $benefitId = null;

    /**
     * Page number, defaults to 1.
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * Size of a page, defaults to 10. Maximum is 100.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  ?int  $page
     * @param  ?int  $limit
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $benefitId
     */
    public function __construct(string|array|null $organizationId = null, string|array|null $benefitId = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->organizationId = $organizationId;
        $this->benefitId = $benefitId;
        $this->page = $page;
        $this->limit = $limit;
    }
}