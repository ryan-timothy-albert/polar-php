# DiscountPercentageRepeatDurationBase


## Fields

| Field                                                                                                     | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `duration`                                                                                                | [Components\DiscountDuration](../../Models/Components/DiscountDuration.md)                                | :heavy_check_mark:                                                                                        | N/A                                                                                                       |
| `durationInMonths`                                                                                        | *int*                                                                                                     | :heavy_check_mark:                                                                                        | N/A                                                                                                       |
| `type`                                                                                                    | [Components\DiscountType](../../Models/Components/DiscountType.md)                                        | :heavy_check_mark:                                                                                        | N/A                                                                                                       |
| `basisPoints`                                                                                             | *int*                                                                                                     | :heavy_check_mark:                                                                                        | N/A                                                                                                       |
| `createdAt`                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                             | :heavy_check_mark:                                                                                        | Creation timestamp of the object.                                                                         |
| `id`                                                                                                      | *string*                                                                                                  | :heavy_check_mark:                                                                                        | The ID of the object.                                                                                     |
| `metadata`                                                                                                | array<string, [string\|int\|bool](../../Models/Components/DiscountPercentageRepeatDurationBaseMetadata.md)> | :heavy_check_mark:                                                                                        | N/A                                                                                                       |
| `name`                                                                                                    | *string*                                                                                                  | :heavy_check_mark:                                                                                        | Name of the discount. Will be displayed to the customer when the discount is applied.                     |
| `redemptionsCount`                                                                                        | *int*                                                                                                     | :heavy_check_mark:                                                                                        | Number of times the discount has been redeemed.                                                           |
| `organizationId`                                                                                          | *string*                                                                                                  | :heavy_check_mark:                                                                                        | The organization ID.                                                                                      |
| `modifiedAt`                                                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                             | :heavy_check_mark:                                                                                        | Last modification timestamp of the object.                                                                |
| `code`                                                                                                    | *string*                                                                                                  | :heavy_check_mark:                                                                                        | Code customers can use to apply the discount during checkout.                                             |
| `startsAt`                                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                             | :heavy_check_mark:                                                                                        | Timestamp after which the discount is redeemable.                                                         |
| `endsAt`                                                                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                             | :heavy_check_mark:                                                                                        | Timestamp after which the discount is no longer redeemable.                                               |
| `maxRedemptions`                                                                                          | *int*                                                                                                     | :heavy_check_mark:                                                                                        | Maximum number of times the discount can be redeemed.                                                     |