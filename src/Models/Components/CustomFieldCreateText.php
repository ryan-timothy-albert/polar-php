<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomFieldCreateText - Schema to create a custom field of type text. */
class CustomFieldCreateText
{
    /**
     * Identifier of the custom field. It'll be used as key when storing the value. Must be unique across the organization.It can only contain ASCII letters, numbers and hyphens.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Name of the custom field.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var CustomFieldTextProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldTextProperties')]
    public CustomFieldTextProperties $properties;

    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * The ID of the organization owning the custom field. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     *
     * @var CustomFieldCreateTextType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldCreateTextType')]
    public CustomFieldCreateTextType $type;

    /**
     * @param  CustomFieldCreateTextType  $type
     * @param  string  $slug
     * @param  string  $name
     * @param  CustomFieldTextProperties  $properties
     * @param  ?array<string, mixed>  $metadata
     * @param  ?string  $organizationId
     */
    public function __construct(string $slug, string $name, CustomFieldTextProperties $properties, ?array $metadata = null, ?string $organizationId = null, CustomFieldCreateTextType $type = CustomFieldCreateTextType::Text)
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->properties = $properties;
        $this->metadata = $metadata;
        $this->organizationId = $organizationId;
        $this->type = $type;
    }
}