# Organizations
(*organizations*)

## Overview

### Available Operations

* [create](#create) - Create Organization
* [get](#get) - Get Organization
* [list](#list) - List Organizations
* [update](#update) - Update Organization

## create

Create an organization.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\OrganizationCreate(
    name: '<value>',
    slug: '<value>',
);

$response = $sdk->organizations->create(
    request: $request
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\OrganizationCreate](../../Models/Components/OrganizationCreate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\OrganizationsCreateResponse](../../Models/Operations/OrganizationsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get an organization by ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->organizations->get(
    id: '<value>'
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\OrganizationsGetResponse](../../Models/Operations/OrganizationsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List organizations.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$responses = $sdk->organizations->list(
    page: 1,
    limit: 10,
    slug: '<value>',
    sorting: [
        Components\OrganizationSortProperty::MinusName,
    ]

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `page`                                                                                                                                                                  | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Page number, defaults to 1.                                                                                                                                             |
| `limit`                                                                                                                                                                 | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Size of a page, defaults to 10. Maximum is 100.                                                                                                                         |
| `slug`                                                                                                                                                                  | *?string*                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                      | Filter by slug.                                                                                                                                                         |
| `sorting`                                                                                                                                                               | array<[Components\OrganizationSortProperty](../../Models/Components/OrganizationSortProperty.md)>                                                                       | :heavy_minus_sign:                                                                                                                                                      | Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order. |

### Response

**[?Operations\OrganizationsListResponse](../../Models/Operations/OrganizationsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an organization.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$organizationUpdate = new Components\OrganizationUpdate();

$response = $sdk->organizations->update(
    id: '<value>',
    organizationUpdate: $organizationUpdate

);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `id`                                                                           | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `organizationUpdate`                                                           | [Components\OrganizationUpdate](../../Models/Components/OrganizationUpdate.md) | :heavy_check_mark:                                                             | N/A                                                                            |

### Response

**[?Operations\OrganizationsUpdateResponse](../../Models/Operations/OrganizationsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |