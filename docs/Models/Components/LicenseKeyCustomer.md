# LicenseKeyCustomer


## Fields

| Field                                                                                      | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `createdAt`                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                              | :heavy_check_mark:                                                                         | Creation timestamp of the object.                                                          |
| `id`                                                                                       | *string*                                                                                   | :heavy_check_mark:                                                                         | The ID of the object.                                                                      |
| `metadata`                                                                                 | array<string, [string\|int\|bool](../../Models/Components/LicenseKeyCustomerMetadata.md)>  | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `email`                                                                                    | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `emailVerified`                                                                            | *bool*                                                                                     | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `organizationId`                                                                           | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `avatarUrl`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `modifiedAt`                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                              | :heavy_check_mark:                                                                         | Last modification timestamp of the object.                                                 |
| `name`                                                                                     | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `billingAddress`                                                                           | [Components\Address](../../Models/Components/Address.md)                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `taxId`                                                                                    | array<[string\|Components\TaxIDFormat](../../Models/Components/LicenseKeyCustomerTaxId.md)> | :heavy_check_mark:                                                                         | N/A                                                                                        |