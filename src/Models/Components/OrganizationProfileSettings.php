<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class OrganizationProfileSettings
{
    /**
     * If this organization has a profile enabled
     *
     * @var ?bool $enabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $enabled = null;

    /**
     * A description of the organization
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * A list of featured projects
     *
     * @var ?array<string> $featuredProjects
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('featured_projects')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $featuredProjects = null;

    /**
     * A list of featured organizations
     *
     * @var ?array<string> $featuredOrganizations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('featured_organizations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $featuredOrganizations = null;

    /**
     * A list of links associated with the organization
     *
     * @var ?array<string> $links
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('links')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $links = null;

    /**
     * Subscription promotion settings
     *
     * @var ?OrganizationSubscribePromoteSettings $subscribe
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscribe')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OrganizationSubscribePromoteSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationSubscribePromoteSettings $subscribe = null;

    /**
     * Accent color for the organization
     *
     * @var ?string $accentColor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accent_color')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accentColor = null;

    /**
     * @param  ?bool  $enabled
     * @param  ?string  $description
     * @param  ?array<string>  $featuredProjects
     * @param  ?array<string>  $featuredOrganizations
     * @param  ?array<string>  $links
     * @param  ?OrganizationSubscribePromoteSettings  $subscribe
     * @param  ?string  $accentColor
     */
    public function __construct(?bool $enabled = null, ?string $description = null, ?array $featuredProjects = null, ?array $featuredOrganizations = null, ?array $links = null, ?OrganizationSubscribePromoteSettings $subscribe = null, ?string $accentColor = null)
    {
        $this->enabled = $enabled;
        $this->description = $description;
        $this->featuredProjects = $featuredProjects;
        $this->featuredOrganizations = $featuredOrganizations;
        $this->links = $links;
        $this->subscribe = $subscribe;
        $this->accentColor = $accentColor;
    }
}