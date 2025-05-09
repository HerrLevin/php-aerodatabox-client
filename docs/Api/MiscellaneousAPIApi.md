# OpenAPI\Client\MiscellaneousAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirportDistanceTime()**](MiscellaneousAPIApi.md#getAirportDistanceTime) | **GET** /airports/{codeType}/{codeFrom}/distance-time/{codeTo} | 🤖 Distance and flight time between airports [TIER 2] |
| [**getAirportLocalTime()**](MiscellaneousAPIApi.md#getAirportLocalTime) | **GET** /airports/{codeType}/{code}/time/local | Current local time at the airport [TIER 1] |
| [**getAirportSolarTimeSolarTimeCurrent()**](MiscellaneousAPIApi.md#getAirportSolarTimeSolarTimeCurrent) | **GET** /airports/{codeType}/{code}/time/solar | Solar and day time at the airport [TIER 1] |
| [**getAirportSolarTimeSolarTimeSpecificDate()**](MiscellaneousAPIApi.md#getAirportSolarTimeSolarTimeSpecificDate) | **GET** /airports/{codeType}/{code}/time/solar/{dateLocal} | Solar and day time at the airport [TIER 1] |
| [**getAirportWeatherWeatherCurrent()**](MiscellaneousAPIApi.md#getAirportWeatherWeatherCurrent) | **GET** /airports/{codeType}/{code}/weather | Weather / forecast at the airport [TIER 2] |
| [**getAirportWeatherWeatherForTimeRange()**](MiscellaneousAPIApi.md#getAirportWeatherWeatherForTimeRange) | **GET** /airports/{codeType}/{code}/weather/{fromLocal}/{toLocal} | Weather / forecast at the airport [TIER 2] |
| [**getCountries()**](MiscellaneousAPIApi.md#getCountries) | **GET** /countries | Get all countries [TIER 1] |


## `getAirportDistanceTime()`

```php
getAirportDistanceTime($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model): \OpenAPI\Client\Model\AirportDistanceTimeContract
```

🤖 Distance and flight time between airports [TIER 2]

**What is the great circle distance between airports?**   **What is approximate flight time between airports?**  ** What is the flight time between airports based on history of flights and/or aircraft type?** (machine-learning based)    Use `flightTimeModel` = <a href=\"#model-ModelFlightTimeEnum\">ML01</a> to get more accurate results based on historical performance of flights on a specific route   and aircraft type.    *Returns:* Distance and approximate flight time between airports, if both airports found.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code_from = 'code_from_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$code_to = 'code_to_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * `local`, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable.
$aircraft_name = 'aircraft_name_example'; // string | Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result.
$flight_time_model = 'Standard'; // \OpenAPIClientModelModelFlightTimeEnum | Model of calculation of the flight time. Default is <a href=\"#model-ModelFlightTimeEnum\"></a>  More advanced model(s) is available, including machine learning-based models.  See <a href=\"#model-ModelFlightTimeEnum\">ModelFlightTimeEnum</a> for details.

try {
    $result = $apiInstance->getAirportDistanceTime($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportDistanceTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code_from** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **code_to** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. | |
| **aircraft_name** | **string**| Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. | [optional] |
| **flight_time_model** | **\OpenAPIClientModelModelFlightTimeEnum**| Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. | [optional] [default to &#39;Standard&#39;] |

### Return type

[**\OpenAPI\Client\Model\AirportDistanceTimeContract**](../Model/AirportDistanceTimeContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportLocalTime()`

```php
getAirportLocalTime($code_type, $code): \OpenAPI\Client\Model\AirportLocalTimeContract
```

Current local time at the airport [TIER 1]

**What is the current local time at the airport?**    At the moment airports having both ICAO and IATA code are present in database only.    *Returns:* Local time at the airport, if airport is found.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportLocalTime($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportLocalTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\AirportLocalTimeContract**](../Model/AirportLocalTimeContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportSolarTimeSolarTimeCurrent()`

```php
getAirportSolarTimeSolarTimeCurrent($code_type, $code): \OpenAPI\Client\Model\SolarStateContract
```

Solar and day time at the airport [TIER 1]

**What is the sun position in the sky now at a specific time at the airport?** or  **When does the sun rise and set at the airport today or on the other day at the airport?** or  **Is it dark now or is it day at the airport?**    At the moment airports having both ICAO and IATA code are present in database only.    *Returns:* If airport is found, returns various solar-related information: sun position in the sky,  daytime (day, night, twilight: civil, nautical, astronomical, golden/blue hours),   sunrise and sunset times, etc.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportSolarTimeSolarTimeCurrent($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportSolarTimeSolarTimeCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\SolarStateContract**](../Model/SolarStateContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportSolarTimeSolarTimeSpecificDate()`

```php
getAirportSolarTimeSolarTimeSpecificDate($code_type, $code, $date_local): \OpenAPI\Client\Model\SolarStateContract
```

Solar and day time at the airport [TIER 1]

**What is the sun position in the sky now at a specific time at the airport?** or  **When does the sun rise and set at the airport today or on the other day at the airport?** or  **Is it dark now or is it day at the airport?**    At the moment airports having both ICAO and IATA code are present in database only.    *Returns:* If airport is found, returns various solar-related information: sun position in the sky,  daytime (day, night, twilight: civil, nautical, astronomical, golden/blue hours),   sunrise and sunset times, etc.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$date_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time.

try {
    $result = $apiInstance->getAirportSolarTimeSolarTimeSpecificDate($code_type, $code, $date_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportSolarTimeSolarTimeSpecificDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **date_local** | **\DateTime**| The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. | |

### Return type

[**\OpenAPI\Client\Model\SolarStateContract**](../Model/SolarStateContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportWeatherWeatherCurrent()`

```php
getAirportWeatherWeatherCurrent($code_type, $code): \OpenAPI\Client\Model\WeatherStateContract[]
```

Weather / forecast at the airport [TIER 2]

**What is the current weather at the airport?** and **What the the weather forecast for the airport?**    Please note: this endpoint is designed to give a brief simplified weather overview for the airport on-demand. This miscellaneous endpoint  is currently not designed to provide extensive weather information and is in no way replacement for specialized weather APIs.    *Returns:* Collection of a single or multiple weather records for the airport, if airport is found and weather information could be retrieved.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportWeatherWeatherCurrent($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportWeatherWeatherCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\WeatherStateContract[]**](../Model/WeatherStateContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportWeatherWeatherForTimeRange()`

```php
getAirportWeatherWeatherForTimeRange($code_type, $code, $from_local, $to_local): \OpenAPI\Client\Model\WeatherStateContract[]
```

Weather / forecast at the airport [TIER 2]

**What is the current weather at the airport?** and **What the the weather forecast for the airport?**    Please note: this endpoint is designed to give a brief simplified weather overview for the airport on-demand. This miscellaneous endpoint  is currently not designed to provide extensive weather information and is in no way replacement for specialized weather APIs.    *Returns:* Collection of a single or multiple weather records for the airport, if airport is found and weather information could be retrieved.

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$from_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time.
$to_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in `fromLocal`, up to 48 hours in future.  Default equal to `fromLocal`.

try {
    $result = $apiInstance->getAirportWeatherWeatherForTimeRange($code_type, $code, $from_local, $to_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getAirportWeatherWeatherForTimeRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **from_local** | **\DateTime**| Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. | |
| **to_local** | **\DateTime**| End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\WeatherStateContract[]**](../Model/WeatherStateContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountries()`

```php
getCountries(): \OpenAPI\Client\Model\CountryContract[]
```

Get all countries [TIER 1]

*Returns:* The list of all countries in the database

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


$apiInstance = new OpenAPI\Client\Api\MiscellaneousAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousAPIApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CountryContract[]**](../Model/CountryContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
