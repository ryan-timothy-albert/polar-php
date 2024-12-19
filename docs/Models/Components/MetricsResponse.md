# MetricsResponse

Metrics response schema.


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `periods`                                                                 | array<[Components\MetricPeriod](../../Models/Components/MetricPeriod.md)> | :heavy_check_mark:                                                        | List of data for each timestamp.                                          |
| `metrics`                                                                 | [Components\Metrics](../../Models/Components/Metrics.md)                  | :heavy_check_mark:                                                        | N/A                                                                       |