<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
class DiscountsListResponse
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
     * @var ?Components\ListResourceDiscount $listResourceDiscount
     */
    public ?Components\ListResourceDiscount $listResourceDiscount = null;

    /**
     * @var \Closure(string): ?DiscountsListResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\ListResourceDiscount  $listResourceDiscount
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\ListResourceDiscount $listResourceDiscount = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->listResourceDiscount = $listResourceDiscount;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?DiscountsListResponse
     */
    public function __call($name, $args): ?DiscountsListResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}