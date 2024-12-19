<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitCustomProperties - Properties for a benefit of type `custom`. */
class BenefitCustomProperties
{
    /**
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    public ?string $note;

    /**
     * @param  ?string  $note
     */
    public function __construct(?string $note = null)
    {
        $this->note = $note;
    }
}