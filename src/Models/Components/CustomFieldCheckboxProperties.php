<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomFieldCheckboxProperties
{
    /**
     *
     * @var ?string $formLabel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formLabel = null;

    /**
     *
     * @var ?string $formHelpText
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_help_text')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formHelpText = null;

    /**
     *
     * @var ?string $formPlaceholder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_placeholder')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formPlaceholder = null;

    /**
     * @param  ?string  $formLabel
     * @param  ?string  $formHelpText
     * @param  ?string  $formPlaceholder
     */
    public function __construct(?string $formLabel = null, ?string $formHelpText = null, ?string $formPlaceholder = null)
    {
        $this->formLabel = $formLabel;
        $this->formHelpText = $formHelpText;
        $this->formPlaceholder = $formPlaceholder;
    }
}