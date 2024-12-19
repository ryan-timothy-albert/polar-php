<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitLicenseKeysUpdate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?BenefitLicenseKeysCreateProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitLicenseKeysCreateProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitLicenseKeysCreateProperties $properties = null;

    /**
     *
     * @var BenefitLicenseKeysUpdateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitLicenseKeysUpdateType')]
    public BenefitLicenseKeysUpdateType $type;

    /**
     * @param  BenefitLicenseKeysUpdateType  $type
     * @param  ?string  $description
     * @param  ?BenefitLicenseKeysCreateProperties  $properties
     */
    public function __construct(?string $description = null, ?BenefitLicenseKeysCreateProperties $properties = null, BenefitLicenseKeysUpdateType $type = BenefitLicenseKeysUpdateType::LicenseKeys)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}