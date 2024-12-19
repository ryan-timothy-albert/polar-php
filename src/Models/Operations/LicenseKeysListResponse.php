<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
class LicenseKeysListResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Successful Response
     *
     * @var ?Components\ListResourceLicenseKeyRead $listResourceLicenseKeyRead
     */
    public ?Components\ListResourceLicenseKeyRead $listResourceLicenseKeyRead = null;

    /**
     * @var \Closure(string): ?LicenseKeysListResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\ListResourceLicenseKeyRead  $listResourceLicenseKeyRead
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\ListResourceLicenseKeyRead $listResourceLicenseKeyRead = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->listResourceLicenseKeyRead = $listResourceLicenseKeyRead;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?LicenseKeysListResponse
     */
    public function __call($name, $args): ?LicenseKeysListResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}