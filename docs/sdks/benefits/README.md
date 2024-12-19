# Benefits
(*benefits*)

## Overview

### Available Operations

* [create](#create) - Create Benefit
* [delete](#delete) - Delete Benefit
* [get](#get) - Get Benefit
* [grants](#grants) - List Benefit Grants
* [list](#list) - List Benefits
* [update](#update) - Update Benefit

## create

Create a benefit.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\BenefitDiscordCreate(
    description: 'delightfully fumigate convection though zowie up bulky electronics',
    properties: new Components\BenefitDiscordCreateProperties(
        guildToken: '<value>',
        roleId: '<id>',
    ),
);

$response = $sdk->benefits->create(
    request: $request
);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                 | Type                                                                                                                                                                                                                                                      | Required                                                                                                                                                                                                                                                  | Description                                                                                                                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                                                                | [Components\BenefitCustomCreate\|Components\BenefitAdsCreate\|Components\BenefitDiscordCreate\|Components\BenefitGitHubRepositoryCreate\|Components\BenefitDownloadablesCreate\|Components\BenefitLicenseKeysCreate](../../Models/Components/BenefitCreate.md) | :heavy_check_mark:                                                                                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                                                                                |

### Response

**[?Operations\BenefitsCreateResponse](../../Models/Operations/BenefitsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a benefit.

> [!WARNING]
> Every grants associated with the benefit will be revoked.
> Users will lose access to the benefit.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->benefits->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\BenefitsDeleteResponse](../../Models/Operations/BenefitsDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a benefit by ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->benefits->get(
    id: '<value>'
);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\BenefitsGetResponse](../../Models/Operations/BenefitsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## grants

List the individual grants for a benefit.

It's especially useful to check if a user has been granted a benefit.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Operations\BenefitsGrantsRequest(
    id: '<value>',
);

$responses = $sdk->benefits->grants(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\BenefitsGrantsRequest](../../Models/Operations/BenefitsGrantsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\BenefitsGrantsResponse](../../Models/Operations/BenefitsGrantsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List benefits.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$responses = $sdk->benefits->list(
    page: 1,
    limit: 10,
    organizationId: [
        '<value>',
    ],
    typeFilter: [
        Components\BenefitType::Downloadables,
    ]

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `page`                                                                                     | *?int*                                                                                     | :heavy_minus_sign:                                                                         | Page number, defaults to 1.                                                                |
| `limit`                                                                                    | *?int*                                                                                     | :heavy_minus_sign:                                                                         | Size of a page, defaults to 10. Maximum is 100.                                            |
| `organizationId`                                                                           | [string\|array\|null](../../Models/Operations/BenefitsListQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                         | Filter by organization ID.                                                                 |
| `typeFilter`                                                                               | [Components\BenefitType\|array\|null](../../Models/Operations/BenefitTypeFilter.md)        | :heavy_minus_sign:                                                                         | Filter by benefit type.                                                                    |

### Response

**[?Operations\BenefitsListResponse](../../Models/Operations/BenefitsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a benefit.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->benefits->update(
    id: '<value>',
    requestBody: new Components\BenefitLicenseKeysUpdate()

);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                                                                                    | *string*                                                                                                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                                      | N/A                                                                                                                                                                                                                                                                     |
| `requestBody`                                                                                                                                                                                                                                                           | [Components\BenefitAdsUpdate\|Components\BenefitCustomUpdate\|Components\BenefitDiscordUpdate\|Components\BenefitGitHubRepositoryUpdate\|Components\BenefitDownloadablesUpdate\|Components\BenefitLicenseKeysUpdate](../../Models/Operations/BenefitsUpdateBenefitUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                                                                      | N/A                                                                                                                                                                                                                                                                     |

### Response

**[?Operations\BenefitsUpdateResponse](../../Models/Operations/BenefitsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |