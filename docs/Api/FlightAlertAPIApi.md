# OpenAPI\Client\FlightAlertAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebhook()**](FlightAlertAPIApi.md#getWebhook) | **GET** /subscriptions/webhook/{subscriptionId} | Get web-hook subscription [FREE TIER] |
| [**getWebhookList()**](FlightAlertAPIApi.md#getWebhookList) | **GET** /subscriptions/webhook | List web-hook subscriptions [FREE TIER] |
| [**refreshWebhook()**](FlightAlertAPIApi.md#refreshWebhook) | **PATCH** /subscriptions/webhook/{subscriptionId}/refresh | Refresh web-hook subscription [TIER 4] |
| [**subscribeWebhook()**](FlightAlertAPIApi.md#subscribeWebhook) | **POST** /subscriptions/webhook/{subjectType}/{subjectId} | Create web-hook subscription [TIER 4] |
| [**unsubscribeWebhook()**](FlightAlertAPIApi.md#unsubscribeWebhook) | **DELETE** /subscriptions/webhook/{subscriptionId} | Remove web-hook subscription [FREE TIER] |


## `getWebhook()`

```php
getWebhook($subscription_id): \OpenAPI\Client\Model\SubscriptionContract
```

Get web-hook subscription [FREE TIER]

*This endpoitns is a part of Flight alert PUSH API currently powered by webhooks.    If you are running your own web service, you can subscribe to flights by number or airport code.   After that, your HTTP endpoint will be called (notified) whenever the flight information gets   updated.*    Gets information about an existing active web-hook subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FlightAlertAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Subscription ID

try {
    $result = $apiInstance->getWebhook($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAlertAPIApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Subscription ID | |

### Return type

[**\OpenAPI\Client\Model\SubscriptionContract**](../Model/SubscriptionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookList()`

```php
getWebhookList(): \OpenAPI\Client\Model\SubscriptionContract[]
```

List web-hook subscriptions [FREE TIER]

*This endpoitns is a part of Flight alert PUSH API currently powered by webhooks.    If you are running your own web service, you can subscribe to flights by number or airport code.   After that, your HTTP endpoint will be called (notified) whenever the flight information gets   updated.*    Get the list of existing active web-hook subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FlightAlertAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhookList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAlertAPIApi->getWebhookList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SubscriptionContract[]**](../Model/SubscriptionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshWebhook()`

```php
refreshWebhook($subscription_id): \OpenAPI\Client\Model\SubscriptionContract
```

Refresh web-hook subscription [TIER 4]

*This endpoitns is a part of Flight alert PUSH API currently powered by webhooks.    If you are running your own web service, you can subscribe to flights by number or airport code.   After that, your HTTP endpoint will be called (notified) whenever the flight information gets   updated.*    Refreshes an existing web-hook subscription    If the subscription had an expiration date-time set when created, this endpoint   will extend it by the same period of time as the one it was originally created with.   E.g., if subscription was originally created for 7 days, this endpoint will  add extra 7 days to the expiration date-time. Note, that web-hook subscriptions  cannot be extended beyond the sliding window of 60 days from the current date-time.     If the subscription had no expiration date-time set, nothing occurs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FlightAlertAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Subscription ID

try {
    $result = $apiInstance->refreshWebhook($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAlertAPIApi->refreshWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Subscription ID | |

### Return type

[**\OpenAPI\Client\Model\SubscriptionContract**](../Model/SubscriptionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeWebhook()`

```php
subscribeWebhook($subject_type, $subject_id, $create_web_hook_subscription): \OpenAPI\Client\Model\SubscriptionContract
```

Create web-hook subscription [TIER 4]

*This endpoitns is a part of Flight alert PUSH API currently powered by webhooks.    If you are running your own web service, you can subscribe to flights by number or airport code.   After that, your HTTP endpoint will be called (notified) whenever the flight information gets   updated.*    Creates a web-hook subscription on a subject (e.g., flight alerts by number or by airport code).  Returns information about created subscription. Subscription ID contained in it  can be used to refresh or remove it.    If subscription contains an expiration date-time, it will auto-expire automatically  on this time. If you want to prevent expiration, use `webhook/{subscriptionId}/refresh`   endpoint to refresh the subscription.    Every time a subject gets updated, a HTTP request will be sent to  the URL specified in `url` parameter. Request will be of a POST type   and contain JSON-formatted `FlightNotificationContract` object containing subscription  and flights information in  the body (see example response for status code 199  of this endpoint documentation).    All flight alerts / notifications are delivered in best-effort manner. They might be missing  or delayed. If there was an error delivering a notification for any reason,  there will be 2 more retries after 5 and 15 minutes (precise numbers might change).    If subscribed to a specific flight or to flights operated in a specific airport:  * Ensure that the flight is within the live updates / ADS-B data coverage. There is no sense in subscribing to a flight which operates in airports having poor or  no live updates or ADS-B coverage: there simply will be no updates. To check if an airport is tracked and on which level, use `/health/services/airports/{icao}/feeds` endpoint. You can also use `/health/services/feeds/{service}/airports` to get the list of covered airports. Read more about coverage here: https://www.aerodatabox.com/data-coverage.  * Notifications will cover updates for flights commencing from 6 hours ago up to 72 hours in future.  * Among these, notifications will contain only those flight items which were actually updated this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FlightAlertAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_type = 'subject_type_example'; // \OpenAPIClientModelSubscriptionSubjectType | Subject type
$subject_id = 'subject_id_example'; // string | Subject ID. If `subjectType` is:   * `FlightByNumber`, then this field must be a flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395);  * `FlightByAirportIcao`, then this field must be a 4-character ICAO-code of the airport where flights are operated (e.g.: EHAM, KLAX, UUEE, etc.);
$create_web_hook_subscription = new \OpenAPI\Client\Model\CreateWebHookSubscription(); // \OpenAPI\Client\Model\CreateWebHookSubscription | Command containing parameters for web-hook subscription creation

try {
    $result = $apiInstance->subscribeWebhook($subject_type, $subject_id, $create_web_hook_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAlertAPIApi->subscribeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_type** | **\OpenAPIClientModelSubscriptionSubjectType**| Subject type | |
| **subject_id** | **string**| Subject ID. If &#x60;subjectType&#x60; is:   * &#x60;FlightByNumber&#x60;, then this field must be a flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395);  * &#x60;FlightByAirportIcao&#x60;, then this field must be a 4-character ICAO-code of the airport where flights are operated (e.g.: EHAM, KLAX, UUEE, etc.); | |
| **create_web_hook_subscription** | [**\OpenAPI\Client\Model\CreateWebHookSubscription**](../Model/CreateWebHookSubscription.md)| Command containing parameters for web-hook subscription creation | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubscriptionContract**](../Model/SubscriptionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeWebhook()`

```php
unsubscribeWebhook($subscription_id)
```

Remove web-hook subscription [FREE TIER]

*This endpoitns is a part of Flight alert PUSH API currently powered by webhooks.    If you are running your own web service, you can subscribe to flights by number or airport code.   After that, your HTTP endpoint will be called (notified) whenever the flight information gets   updated.*    Removes the subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FlightAlertAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Subscription ID

try {
    $apiInstance->unsubscribeWebhook($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling FlightAlertAPIApi->unsubscribeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Subscription ID | |

### Return type

void (empty response body)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
