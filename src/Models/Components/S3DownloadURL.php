<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class S3DownloadURL
{
    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var \DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    public \DateTime $expiresAt;

    /**
     * $headers
     *
     * @var ?array<string, string> $headers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('headers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $headers = null;

    /**
     * @param  string  $url
     * @param  \DateTime  $expiresAt
     * @param  ?array<string, string>  $headers
     */
    public function __construct(string $url, \DateTime $expiresAt, ?array $headers = null)
    {
        $this->url = $url;
        $this->expiresAt = $expiresAt;
        $this->headers = $headers;
    }
}