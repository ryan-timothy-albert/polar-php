# Metrics
(*metrics*)

## Overview

### Available Operations

* [get](#get) - Get Metrics
* [limits](#limits) - Get Metrics Limits

## get

Get metrics about your orders and subscriptions.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Operations\MetricsGetRequest(
    startDate: LocalDate::parse('2024-02-07'),
    endDate: LocalDate::parse('2023-09-05'),
    interval: Components\Interval::Week,
);

$response = $sdk->metrics->get(
    request: $request
);

if ($response->metricsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\MetricsGetRequest](../../Models/Operations/MetricsGetRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\MetricsGetResponse](../../Models/Operations/MetricsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## limits

Get the interval limits for the metrics endpoint.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->metrics->limits(

);

if ($response->metricsLimits !== null) {
    // handle response
}
```

### Response

**[?Operations\MetricsLimitsResponse](../../Models/Operations/MetricsLimitsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |