<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Utils;

use Speakeasy\Serializer\Context;
use Speakeasy\Serializer\GraphNavigator;
use Speakeasy\Serializer\Handler\SubscribingHandlerInterface;
use Speakeasy\Serializer\JsonDeserializationVisitor;
use Speakeasy\Serializer\JsonSerializationVisitor;

class DateTimeHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => '\DateTime',
                'method' => 'serializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => '\DateTime',
                'method' => 'deserializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'DateTime',
                'method' => 'serializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'DateTime',
                'method' => 'deserializeDateTimeToJson',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serializeDateTimeToJson(JsonSerializationVisitor $visitor, \DateTime $any, array $type, Context $context): string
    {
        return $any->format('Y-m-d\TH:i:s.up');
    }

    /** @phpstan-ignore-next-line */
    public function deserializeDateTimeToJson(JsonDeserializationVisitor $visitor, string $data, array $type, Context $context): mixed
    {
        return new \DateTime($data);
    }
}
