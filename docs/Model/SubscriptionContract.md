# # SubscriptionContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of a subscription.   Use this ID to control the subscription in future (e.g. update or delete). |
**is_active** | **bool** | Specifies if the subscription is active |
**activate_before_utc** | **\DateTime** | Time (UTC) before which subscription must be activated (may be applicable to   some non-active newly created subscriptions) | [optional]
**expires_on_utc** | **\DateTime** | Time (UTC) when subscription expires and will be removed.    If not specified, subscription never expires. | [optional]
**created_on_utc** | **\DateTime** | Time (UTC) when subscription was created |
**subject** | [**\OpenAPI\Client\Model\SubscriptionSubjectContract**](SubscriptionSubjectContract.md) | Subscription subject (e.g. flight: such subscription will notify  its consumer about flight updates). |
**subscriber** | [**\OpenAPI\Client\Model\SubscriberContract**](SubscriberContract.md) | Subscription consumer: where notifications will be sent   (e.g. web-hook with a URL) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
