<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerBenefitGrantGitHubRepository
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var string $benefitId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_id')]
    public string $benefitId;

    /**
     *
     * @var bool $isGranted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_granted')]
    public bool $isGranted;

    /**
     *
     * @var bool $isRevoked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_revoked')]
    public bool $isRevoked;

    /**
     *
     * @var BenefitGitHubRepositorySubscriber $benefit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGitHubRepositorySubscriber')]
    public BenefitGitHubRepositorySubscriber $benefit;

    /**
     *
     * @var BenefitGrantGitHubRepositoryProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGrantGitHubRepositoryProperties')]
    public BenefitGrantGitHubRepositoryProperties $properties;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?\DateTime $grantedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('granted_at')]
    public ?\DateTime $grantedAt;

    /**
     *
     * @var ?\DateTime $revokedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked_at')]
    public ?\DateTime $revokedAt;

    /**
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     *
     * @var ?string $orderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order_id')]
    public ?string $orderId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $customerId
     * @param  string  $benefitId
     * @param  bool  $isGranted
     * @param  bool  $isRevoked
     * @param  BenefitGitHubRepositorySubscriber  $benefit
     * @param  BenefitGrantGitHubRepositoryProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @param  ?\DateTime  $grantedAt
     * @param  ?\DateTime  $revokedAt
     * @param  ?string  $subscriptionId
     * @param  ?string  $orderId
     */
    public function __construct(\DateTime $createdAt, string $id, string $customerId, string $benefitId, bool $isGranted, bool $isRevoked, BenefitGitHubRepositorySubscriber $benefit, BenefitGrantGitHubRepositoryProperties $properties, ?\DateTime $modifiedAt = null, ?\DateTime $grantedAt = null, ?\DateTime $revokedAt = null, ?string $subscriptionId = null, ?string $orderId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->customerId = $customerId;
        $this->benefitId = $benefitId;
        $this->isGranted = $isGranted;
        $this->isRevoked = $isRevoked;
        $this->benefit = $benefit;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->grantedAt = $grantedAt;
        $this->revokedAt = $revokedAt;
        $this->subscriptionId = $subscriptionId;
        $this->orderId = $orderId;
    }
}