<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class OrganizationCreate
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var ?string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatarUrl = null;

    /**
     *
     * @var ?OrganizationFeatureSettings $featureSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OrganizationFeatureSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationFeatureSettings $featureSettings = null;

    /**
     * @param  string  $name
     * @param  string  $slug
     * @param  ?string  $avatarUrl
     * @param  ?OrganizationFeatureSettings  $featureSettings
     */
    public function __construct(string $name, string $slug, ?string $avatarUrl = null, ?OrganizationFeatureSettings $featureSettings = null)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->avatarUrl = $avatarUrl;
        $this->featureSettings = $featureSettings;
    }
}