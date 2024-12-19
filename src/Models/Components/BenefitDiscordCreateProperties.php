<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitDiscordCreateProperties - Properties to create a benefit of type `discord`. */
class BenefitDiscordCreateProperties
{
    /**
     *
     * @var string $guildToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guild_token')]
    public string $guildToken;

    /**
     * The ID of the Discord role to grant.
     *
     * @var string $roleId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role_id')]
    public string $roleId;

    /**
     * @param  string  $guildToken
     * @param  string  $roleId
     */
    public function __construct(string $guildToken, string $roleId)
    {
        $this->guildToken = $guildToken;
        $this->roleId = $roleId;
    }
}