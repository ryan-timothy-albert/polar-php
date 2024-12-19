# WebhookCheckoutUpdatedPayload

Sent when a checkout is updated.

**Discord & Slack support:** Basic


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `type`                                                                                                       | [Components\WebhookCheckoutUpdatedPayloadType](../../Models/Components/WebhookCheckoutUpdatedPayloadType.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `data`                                                                                                       | [Components\Checkout](../../Models/Components/Checkout.md)                                                   | :heavy_check_mark:                                                                                           | Checkout session data retrieved using an access token.                                                       |