<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class SubscriptionCustomer
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
     * $metadata
     *
     * @var array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>')]
    public array $metadata;

    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var bool $emailVerified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_verified')]
    public bool $emailVerified;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    public string $avatarUrl;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public ?string $name;

    /**
     *
     * @var ?Address $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    public ?Address $billingAddress;

    /**
     * $taxId
     *
     * @var ?array<mixed> $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\Type('array<mixed>|null')]
    public ?array $taxId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  array<string, mixed>  $metadata
     * @param  string  $email
     * @param  bool  $emailVerified
     * @param  string  $organizationId
     * @param  string  $avatarUrl
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $name
     * @param  ?Address  $billingAddress
     * @param  ?array<mixed>  $taxId
     */
    public function __construct(\DateTime $createdAt, string $id, array $metadata, string $email, bool $emailVerified, string $organizationId, string $avatarUrl, ?\DateTime $modifiedAt = null, ?string $name = null, ?Address $billingAddress = null, ?array $taxId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->organizationId = $organizationId;
        $this->avatarUrl = $avatarUrl;
        $this->modifiedAt = $modifiedAt;
        $this->name = $name;
        $this->billingAddress = $billingAddress;
        $this->taxId = $taxId;
    }
}