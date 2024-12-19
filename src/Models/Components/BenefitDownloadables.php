<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitDownloadables
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the benefit.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The description of the benefit.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Whether the benefit is selectable when creating a product.
     *
     * @var bool $selectable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('selectable')]
    public bool $selectable;

    /**
     * Whether the benefit is deletable.
     *
     * @var bool $deletable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deletable')]
    public bool $deletable;

    /**
     * The ID of the organization owning the benefit.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var BenefitDownloadablesProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDownloadablesProperties')]
    public BenefitDownloadablesProperties $properties;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var BenefitDownloadablesType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDownloadablesType')]
    public BenefitDownloadablesType $type;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  BenefitDownloadablesType  $type
     * @param  string  $description
     * @param  bool  $selectable
     * @param  bool  $deletable
     * @param  string  $organizationId
     * @param  BenefitDownloadablesProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     */
    public function __construct(\DateTime $createdAt, string $id, string $description, bool $selectable, bool $deletable, string $organizationId, BenefitDownloadablesProperties $properties, ?\DateTime $modifiedAt = null, BenefitDownloadablesType $type = BenefitDownloadablesType::Downloadables)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->description = $description;
        $this->selectable = $selectable;
        $this->deletable = $deletable;
        $this->organizationId = $organizationId;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->type = $type;
    }
}