# DiscountProduct

A product that a discount can be applied to.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the product.                                        |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | The name of the product.                                      |
| `isRecurring`                                                 | *bool*                                                        | :heavy_check_mark:                                            | Whether the product is a subscription tier.                   |
| `isArchived`                                                  | *bool*                                                        | :heavy_check_mark:                                            | Whether the product is archived and no longer available.      |
| `organizationId`                                              | *string*                                                      | :heavy_check_mark:                                            | The ID of the organization owning the product.                |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `description`                                                 | *string*                                                      | :heavy_check_mark:                                            | The description of the product.                               |