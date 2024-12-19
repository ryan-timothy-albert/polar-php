<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerBenefitGrantDownloadablesUpdate
{
    /**
     *
     * @var CustomerBenefitGrantDownloadablesUpdateBenefitType $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerBenefitGrantDownloadablesUpdateBenefitType')]
    public CustomerBenefitGrantDownloadablesUpdateBenefitType $benefitType;

    /**
     * @param  CustomerBenefitGrantDownloadablesUpdateBenefitType  $benefitType
     */
    public function __construct(CustomerBenefitGrantDownloadablesUpdateBenefitType $benefitType = CustomerBenefitGrantDownloadablesUpdateBenefitType::Downloadables)
    {
        $this->benefitType = $benefitType;
    }
}