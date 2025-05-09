# OpenAPI\Client\StatisticalAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirportDelayDelaysCurrent()**](StatisticalAPIApi.md#getAirportDelayDelaysCurrent) | **GET** /airports/{codeType}/{code}/delays | Airport delays (current or historical moment) [TIER 3] |
| [**getAirportDelayDelaysHistorical()**](StatisticalAPIApi.md#getAirportDelayDelaysHistorical) | **GET** /airports/{codeType}/{code}/delays/{dateLocal} | Airport delays (current or historical moment) [TIER 3] |
| [**getAirportDelays()**](StatisticalAPIApi.md#getAirportDelays) | **GET** /airports/{codeType}/{code}/delays/{dateFromLocal}/{dateToLocal} | Airport delays (historical period) [TIER 3] |
| [**getFlightDelays()**](StatisticalAPIApi.md#getFlightDelays) | **GET** /flights/{number}/delays | Flight delay statistics by flight number [TIER 3] |
| [**getGlobalDelaysGlobalDelaysAtSpecificDate()**](StatisticalAPIApi.md#getGlobalDelaysGlobalDelaysAtSpecificDate) | **GET** /airports/delays/{dateUtc} | Global delays (current or historical moment) [TIER 3] |
| [**getGlobalDelaysGlobalDelaysCurent()**](StatisticalAPIApi.md#getGlobalDelaysGlobalDelaysCurent) | **GET** /airports/delays | Global delays (current or historical moment) [TIER 3] |
| [**getRouteDailyStatisticsRoutesDailAtSpecificDate()**](StatisticalAPIApi.md#getRouteDailyStatisticsRoutesDailAtSpecificDate) | **GET** /airports/{codeType}/{code}/stats/routes/daily/{dateLocal} | Airport routes and daily flight destinations [TIER 3] |
| [**getRouteDailyStatisticsRoutesDailyCurrent()**](StatisticalAPIApi.md#getRouteDailyStatisticsRoutesDailyCurrent) | **GET** /airports/{codeType}/{code}/stats/routes/daily | Airport routes and daily flight destinations [TIER 3] |


## `getAirportDelayDelaysCurrent()`

```php
getAirportDelayDelaysCurrent($code_type, $code): \OpenAPI\Client\Model\AirportDelayContract
```

Airport delays (current or historical moment) [TIER 3]

**What is the current or historical average delay in the airport?** or **What is the delay index of the airport right now or at a moment in past?**    Please read more about airport delays on here: https://aerodatabox.com/api-airport-delays/    *Returns*: Statistical delay information about delays (median delay, delay index, cancelled flights) of arrivals and departures for the requested airport, represented by:  * a single `AirportDelayContract` item displaying the delay information based on flight movements within the 2 hours prior to the current moment, if no `dateLocal` is specified;  * a single `AirportDelayContract` item displaying the delay information based on flight movements within the 2 hours prior to the moment requested in `dateLocal`, if `dateLocal` is specified;

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportDelayDelaysCurrent($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getAirportDelayDelaysCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\AirportDelayContract**](../Model/AirportDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportDelayDelaysHistorical()`

```php
getAirportDelayDelaysHistorical($code_type, $code, $date_local): \OpenAPI\Client\Model\AirportDelayContract
```

Airport delays (current or historical moment) [TIER 3]

**What is the current or historical average delay in the airport?** or **What is the delay index of the airport right now or at a moment in past?**    Please read more about airport delays on here: https://aerodatabox.com/api-airport-delays/    *Returns*: Statistical delay information about delays (median delay, delay index, cancelled flights) of arrivals and departures for the requested airport, represented by:  * a single `AirportDelayContract` item displaying the delay information based on flight movements within the 2 hours prior to the current moment, if no `dateLocal` is specified;  * a single `AirportDelayContract` item displaying the delay information based on flight movements within the 2 hours prior to the moment requested in `dateLocal`, if `dateLocal` is specified;

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$date_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time.

try {
    $result = $apiInstance->getAirportDelayDelaysHistorical($code_type, $code, $date_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getAirportDelayDelaysHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **date_local** | **\DateTime**| The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. | |

### Return type

[**\OpenAPI\Client\Model\AirportDelayContract**](../Model/AirportDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportDelays()`

```php
getAirportDelays($code_type, $code, $date_from_local, $date_to_local): \OpenAPI\Client\Model\AirportDelayContract[]
```

Airport delays (historical period) [TIER 3]

**What were the delays within a specific period of time?** or **How the delays changed  within a specific period of time?**    Please read more about airport delays on here: https://aerodatabox.com/api-airport-delays/    *Returns*: Statistical delay information about delays (median delay, delay index, cancelled flights) of arrivals and departures for the requested airport, represented by a collection of `AiportDelayContract` items displaying the delay information at multiple moments within the period between `dateLocal` and `dateToLocal`.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$date_from_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).
$date_to_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).

try {
    $result = $apiInstance->getAirportDelays($code_type, $code, $date_from_local, $date_to_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getAirportDelays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **date_from_local** | **\DateTime**| The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). | |
| **date_to_local** | **\DateTime**| The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). | |

### Return type

[**\OpenAPI\Client\Model\AirportDelayContract[]**](../Model/AirportDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightDelays()`

```php
getFlightDelays($number): \OpenAPI\Client\Model\FlightLegDelayContract
```

Flight delay statistics by flight number [TIER 3]

**By how much the flight is delayed in average?**    Information is only available for flights which were tracked with live updates at least at origin or at destination within the last 90 days.    *Returns:* delay statistics for the flight with specified number.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 'number_example'; // string | Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)

try {
    $result = $apiInstance->getFlightDelays($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getFlightDelays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) | |

### Return type

[**\OpenAPI\Client\Model\FlightLegDelayContract**](../Model/FlightLegDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalDelaysGlobalDelaysAtSpecificDate()`

```php
getGlobalDelaysGlobalDelaysAtSpecificDate($date_utc): \OpenAPI\Client\Model\AirportDelayContract
```

Global delays (current or historical moment) [TIER 3]

**What is the current or historical delay situation in all airports?** or **What is the delay index of all airports globally right now or at a moment in past?**    Please read more about airport delays on here: https://aerodatabox.com/api-airport-delays/    *Returns*: Statistical delay information about delays (median delay, delay index, cancelled flights) of arrivals and departures for all known airports, represented by a collection of items sorted by   the average of arrival and departure index, descending order (from worst to best). Only qualifying and recent enough delay statistics records are returned.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_utc = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time.

try {
    $result = $apiInstance->getGlobalDelaysGlobalDelaysAtSpecificDate($date_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getGlobalDelaysGlobalDelaysAtSpecificDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_utc** | **\DateTime**| The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. | |

### Return type

[**\OpenAPI\Client\Model\AirportDelayContract**](../Model/AirportDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalDelaysGlobalDelaysCurent()`

```php
getGlobalDelaysGlobalDelaysCurent(): \OpenAPI\Client\Model\AirportDelayContract
```

Global delays (current or historical moment) [TIER 3]

**What is the current or historical delay situation in all airports?** or **What is the delay index of all airports globally right now or at a moment in past?**    Please read more about airport delays on here: https://aerodatabox.com/api-airport-delays/    *Returns*: Statistical delay information about delays (median delay, delay index, cancelled flights) of arrivals and departures for all known airports, represented by a collection of items sorted by   the average of arrival and departure index, descending order (from worst to best). Only qualifying and recent enough delay statistics records are returned.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGlobalDelaysGlobalDelaysCurent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getGlobalDelaysGlobalDelaysCurent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AirportDelayContract**](../Model/AirportDelayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRouteDailyStatisticsRoutesDailAtSpecificDate()`

```php
getRouteDailyStatisticsRoutesDailAtSpecificDate($code_type, $code, $date_local): \OpenAPI\Client\Model\DailyRouteStatContract
```

Airport routes and daily flight destinations [TIER 3]

**What are the most popular routes from an airport?** or **Where I can fly from an airport?** or   **How many daily flights to different destinations from an airport?**    The data will only be available for airports which have at least schedules information available.   If the airport is also covered with live or ADS-B coverage, the quality will improve greatly as it will  be based on real data rather than on static scheduled data. To check if an airport is tracked and on which level,   use `/health/services/airports/{icao}/feeds` endpoint. You can also use `/health/services/feeds/{service}/airports` to get   the list of covered airports.     At the moment airports having both ICAO and IATA code and flight schedules are present available only.    *Returns:* List of routes and daily flights amount departing from an airport.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$date_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Local date at the airport (default = null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport.

try {
    $result = $apiInstance->getRouteDailyStatisticsRoutesDailAtSpecificDate($code_type, $code, $date_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getRouteDailyStatisticsRoutesDailAtSpecificDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **date_local** | **\DateTime**| Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. | |

### Return type

[**\OpenAPI\Client\Model\DailyRouteStatContract**](../Model/DailyRouteStatContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRouteDailyStatisticsRoutesDailyCurrent()`

```php
getRouteDailyStatisticsRoutesDailyCurrent($code_type, $code): \OpenAPI\Client\Model\DailyRouteStatContract
```

Airport routes and daily flight destinations [TIER 3]

**What are the most popular routes from an airport?** or **Where I can fly from an airport?** or   **How many daily flights to different destinations from an airport?**    The data will only be available for airports which have at least schedules information available.   If the airport is also covered with live or ADS-B coverage, the quality will improve greatly as it will  be based on real data rather than on static scheduled data. To check if an airport is tracked and on which level,   use `/health/services/airports/{icao}/feeds` endpoint. You can also use `/health/services/feeds/{service}/airports` to get   the list of covered airports.     At the moment airports having both ICAO and IATA code and flight schedules are present available only.    *Returns:* List of routes and daily flights amount departing from an airport.

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


$apiInstance = new OpenAPI\Client\Api\StatisticalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getRouteDailyStatisticsRoutesDailyCurrent($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticalAPIApi->getRouteDailyStatisticsRoutesDailyCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\DailyRouteStatContract**](../Model/DailyRouteStatContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
