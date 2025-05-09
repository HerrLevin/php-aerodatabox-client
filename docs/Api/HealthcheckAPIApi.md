# OpenAPI\Client\HealthcheckAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirportFeedStatus()**](HealthcheckAPIApi.md#getAirportFeedStatus) | **GET** /health/services/airports/{icao}/feeds | Data feed services status by ICAO code [FREE TIER] |
| [**getFeedAirports()**](HealthcheckAPIApi.md#getFeedAirports) | **GET** /health/services/feeds/{service}/airports | Airports supporting data feed service [FREE TIER] |
| [**getFeedServiceStatus()**](HealthcheckAPIApi.md#getFeedServiceStatus) | **GET** /health/services/feeds/{service} | General status of data feed services [FREE TIER] |


## `getAirportFeedStatus()`

```php
getAirportFeedStatus($icao): \OpenAPI\Client\Model\AirportFeedServiceStatusContract
```

Data feed services status by ICAO code [FREE TIER]

**What is the status of data updates for the airport?**    At the moment airports having both ICAO and IATA code are present in database only.    *Returns:* Current status of airport data feed services (live flight updates, flight schedules, etc.) for requested airport.

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


$apiInstance = new OpenAPI\Client\Api\HealthcheckAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$icao = 'icao_example'; // string | 4-digit ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.). Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportFeedStatus($icao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckAPIApi->getAirportFeedStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **icao** | **string**| 4-digit ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.). Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\AirportFeedServiceStatusContract**](../Model/AirportFeedServiceStatusContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedAirports()`

```php
getFeedAirports($service): \OpenAPI\Client\Model\StringCollectionContract
```

Airports supporting data feed service [FREE TIER]

**Which airports support flight schedules?** or **Which airports support live flight updates?**     At the moment airports having both ICAO and IATA code are present in database only.     *Returns:* Collection ICAO codes of airports supporting specified airport data feed service.

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


$apiInstance = new OpenAPI\Client\Api\HealthcheckAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = 'service_example'; // \OpenAPIClientModelFeedServiceEnum | Airport data feed service name

try {
    $result = $apiInstance->getFeedAirports($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckAPIApi->getFeedAirports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service** | **\OpenAPIClientModelFeedServiceEnum**| Airport data feed service name | |

### Return type

[**\OpenAPI\Client\Model\StringCollectionContract**](../Model/StringCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedServiceStatus()`

```php
getFeedServiceStatus($service, $with_http_code): \OpenAPI\Client\Model\FeedServiceStatusContract
```

General status of data feed services [FREE TIER]

**Which is the general health of the data feed service?**     *Returns:* Status of the service in general, regardless of the airports

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


$apiInstance = new OpenAPI\Client\Api\HealthcheckAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = 'service_example'; // \OpenAPIClientModelFeedServiceEnum | Data feed service name
$with_http_code = false; // bool | If true, reflect status of the service in the HTTP code of the response (if the service is down, HTTP code will be 503).

try {
    $result = $apiInstance->getFeedServiceStatus($service, $with_http_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckAPIApi->getFeedServiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service** | **\OpenAPIClientModelFeedServiceEnum**| Data feed service name | |
| **with_http_code** | **bool**| If true, reflect status of the service in the HTTP code of the response (if the service is down, HTTP code will be 503). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FeedServiceStatusContract**](../Model/FeedServiceStatusContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
