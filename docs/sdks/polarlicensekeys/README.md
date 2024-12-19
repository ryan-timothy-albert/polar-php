# PolarLicenseKeys
(*customerPortal->licenseKeys*)

## Overview

### Available Operations

* [activate](#activate) - Activate License Key
* [deactivate](#deactivate) - Deactivate License Key
* [get](#get) - Get License Key
* [list](#list) - List License Keys
* [validate](#validate) - Validate License Key

## activate

Activate a license key instance.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\LicenseKeyActivate(
    key: '<key>',
    organizationId: '<value>',
    label: '<value>',
);

$response = $sdk->customerPortal->licenseKeys->activate(
    request: $request
);

if ($response->licenseKeyActivationRead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\LicenseKeyActivate](../../Models/Components/LicenseKeyActivate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CustomerPortalLicenseKeysActivateResponse](../../Models/Operations/CustomerPortalLicenseKeysActivateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## deactivate

Deactivate a license key instance.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\LicenseKeyDeactivate(
    key: '<key>',
    organizationId: '<value>',
    activationId: '<value>',
);

$response = $sdk->customerPortal->licenseKeys->deactivate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Components\LicenseKeyDeactivate](../../Models/Components/LicenseKeyDeactivate.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CustomerPortalLicenseKeysDeactivateResponse](../../Models/Operations/CustomerPortalLicenseKeysDeactivateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a license key.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->customerPortal->licenseKeys->get(
    id: '<value>'
);

if ($response->licenseKeyWithActivations !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerPortalLicenseKeysGetResponse](../../Models/Operations/CustomerPortalLicenseKeysGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List License Keys

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$responses = $sdk->customerPortal->licenseKeys->list(
    page: 1,
    limit: 10,
    organizationId: [
        '<value>',
    ],
    benefitId: '<value>'

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `page`                                                                                                      | *?int*                                                                                                      | :heavy_minus_sign:                                                                                          | Page number, defaults to 1.                                                                                 |
| `limit`                                                                                                     | *?int*                                                                                                      | :heavy_minus_sign:                                                                                          | Size of a page, defaults to 10. Maximum is 100.                                                             |
| `organizationId`                                                                                            | [string\|array\|null](../../Models/Operations/CustomerPortalLicenseKeysListQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                                          | Filter by organization ID.                                                                                  |
| `benefitId`                                                                                                 | *?string*                                                                                                   | :heavy_minus_sign:                                                                                          | Filter by a specific benefit                                                                                |

### Response

**[?Operations\CustomerPortalLicenseKeysListResponse](../../Models/Operations/CustomerPortalLicenseKeysListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## validate

Validate a license key.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\LicenseKeyValidate(
    key: '<key>',
    organizationId: '<value>',
);

$response = $sdk->customerPortal->licenseKeys->validate(
    request: $request
);

if ($response->validatedLicenseKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\LicenseKeyValidate](../../Models/Components/LicenseKeyValidate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CustomerPortalLicenseKeysValidateResponse](../../Models/Operations/CustomerPortalLicenseKeysValidateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |