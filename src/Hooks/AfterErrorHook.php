<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Polar\Hooks;

use Psr\Http\Message\ResponseInterface;

interface AfterErrorHook
{
    public function afterError(AfterErrorContext $context, ?ResponseInterface $response, \Throwable $exception): ErrorResponseContext;
}
