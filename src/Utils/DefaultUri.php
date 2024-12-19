<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Utils;

use Psr\Http\Message\UriInterface;

class DefaultUri implements UriInterface
{

    public function getScheme(): string
    {
        return '';
    }

    public function getAuthority(): string
    {
        return '';
    }

    public function getUserInfo(): string
    {
        return '';
    }

    public function getHost(): string
    {
        return '';
    }

    public function getPort(): ?int
    {
        return null;
    }

    public function getPath(): string
    {
        return '';
    }

    public function getQuery(): string
    {
        return '';
    }

    public function getFragment(): string
    {
        return '';
    }

    public function withScheme($scheme): UriInterface
    {
        return $this;
    }

    public function withUserInfo($user, $password = null): UriInterface
    {
        return $this;
    }

    public function withHost(string $host): UriInterface
    {
        return $this;
    }

    public function withPort($port): UriInterface
    {
        return $this;
    }

    public function withPath($path): UriInterface
    {
        return $this;
    }

    public function withQuery($query): UriInterface
    {
        return $this;
    }

    public function withFragment($query): UriInterface
    {
        return $this;
    }

    public function __toString(): string
    {
        return '';
    }
}
