# CheckoutDiscountFixedRepeatDuration

Schema for a fixed amount discount that is applied on every invoice
for a certain number of months.


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `duration`                                                                 | [Components\DiscountDuration](../../Models/Components/DiscountDuration.md) | :heavy_check_mark:                                                         | N/A                                                                        |
| `durationInMonths`                                                         | *int*                                                                      | :heavy_check_mark:                                                         | N/A                                                                        |
| `type`                                                                     | [Components\DiscountType](../../Models/Components/DiscountType.md)         | :heavy_check_mark:                                                         | N/A                                                                        |
| `amount`                                                                   | *int*                                                                      | :heavy_check_mark:                                                         | N/A                                                                        |
| `currency`                                                                 | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `id`                                                                       | *string*                                                                   | :heavy_check_mark:                                                         | The ID of the object.                                                      |
| `name`                                                                     | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `code`                                                                     | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |