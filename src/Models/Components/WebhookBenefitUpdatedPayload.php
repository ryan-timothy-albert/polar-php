<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookBenefitUpdatedPayload - Sent when a benefit is updated.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookBenefitUpdatedPayload
{
    /**
     *
     * @var BenefitAds|BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitAds|\Polar\Models\Components\BenefitCustom|\Polar\Models\Components\BenefitDiscord|\Polar\Models\Components\BenefitGitHubRepository|\Polar\Models\Components\BenefitDownloadables|\Polar\Models\Components\BenefitLicenseKeys')]
    public BenefitAds|BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys $data;

    /**
     *
     * @var WebhookBenefitUpdatedPayloadType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\WebhookBenefitUpdatedPayloadType')]
    public WebhookBenefitUpdatedPayloadType $type;

    /**
     * @param  WebhookBenefitUpdatedPayloadType  $type
     * @param  BenefitAds|BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys  $data
     */
    public function __construct(BenefitAds|BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys $data, WebhookBenefitUpdatedPayloadType $type = WebhookBenefitUpdatedPayloadType::BenefitUpdated)
    {
        $this->data = $data;
        $this->type = $type;
    }
}