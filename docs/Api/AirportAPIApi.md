# OpenAPI\Client\AirportAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirport()**](AirportAPIApi.md#getAirport) | **GET** /airports/{codeType}/{code} | Airport by code [TIER 1] |
| [**getAirportRunways()**](AirportAPIApi.md#getAirportRunways) | **GET** /airports/{codeType}/{code}/runways | Airport runways [TIER 1] |
| [**searchAirportByTerm()**](AirportAPIApi.md#searchAirportByTerm) | **GET** /airports/search/term | Search airports by free text [TIER 2] |
| [**searchAirportsByIpGeoLocation()**](AirportAPIApi.md#searchAirportsByIpGeoLocation) | **GET** /airports/search/ip | Search airports by IP address geolocation [TIER 2] |
| [**searchAirportsByLocation()**](AirportAPIApi.md#searchAirportsByLocation) | **GET** /airports/search/location | Search airports by location [TIER 2] |


## `getAirport()`

```php
getAirport($code_type, $code, $with_runways, $with_time): \OpenAPI\Client\Model\AirportContract
```

Airport by code [TIER 1]

At the moment airports having both ICAO and IATA code are present in database only.    *Returns*: Single airport data, if found.

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


$apiInstance = new OpenAPI\Client\Api\AirportAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$with_runways = false; // bool | Include runways data (default - false)
$with_time = false; // bool | Include current local time (default - false)

try {
    $result = $apiInstance->getAirport($code_type, $code, $with_runways, $with_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportAPIApi->getAirport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **with_runways** | **bool**| Include runways data (default - false) | [optional] [default to false] |
| **with_time** | **bool**| Include current local time (default - false) | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AirportContract**](../Model/AirportContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportRunways()`

```php
getAirportRunways($code_type, $code): \OpenAPI\Client\Model\RunwayContract[]
```

Airport runways [TIER 1]

**Which runways does this airport have?**    At the moment airports having both ICAO and IATA code are present in database only.    *Returns*: Collection of runway data items.

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


$apiInstance = new OpenAPI\Client\Api\AirportAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.

try {
    $result = $apiInstance->getAirportRunways($code_type, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportAPIApi->getAirportRunways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |

### Return type

[**\OpenAPI\Client\Model\RunwayContract[]**](../Model/RunwayContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAirportByTerm()`

```php
searchAirportByTerm($q, $limit, $with_flight_info_only, $with_search_by_code): \OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract
```

Search airports by free text [TIER 2]

At the moment airports having both ICAO and IATA code and flight schedules are present available only.    *Returns:* List of airports with names and city names (and IATA/ICAO code, if enabled) matching the search term.

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


$apiInstance = new OpenAPI\Client\Api\AirportAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search query (min. 3 non whitespace characters length)
$limit = 10; // int | Maximum number of airports to be returned (max. 250, defaut = 10)
$with_flight_info_only = false; // bool | If set to true, will only return airports which have flight data (scheduled or live) available. Default = false.
$with_search_by_code = true; // bool | If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default = true.

try {
    $result = $apiInstance->searchAirportByTerm($q, $limit, $with_flight_info_only, $with_search_by_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportAPIApi->searchAirportByTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search query (min. 3 non whitespace characters length) | |
| **limit** | **int**| Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) | [optional] [default to 10] |
| **with_flight_info_only** | **bool**| If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. | [optional] [default to false] |
| **with_search_by_code** | **bool**| If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract**](../Model/StringListingAirportContractSearchResultCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAirportsByIpGeoLocation()`

```php
searchAirportsByIpGeoLocation($q, $radius_km, $limit, $with_flight_info_only): \OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract
```

Search airports by IP address geolocation [TIER 2]

**What are the airports closest to the customer, based on their IP address?**  **What are the airports closest to the location determined (geo-located) by a IP address?**    This endpoint determines the location by the IP address provided and then returns the list of the nearest airports  in the same way as `Search airports by location` endpoint does.     Please note:  * IP geo-location is not a precise method and it determines an approximate location only.  * At the moment airports having both ICAO and IATA code and flight schedules are present available only.    *Returns:* A list of airports found within the specified radius around the location approximated (geo-located) from the specified IP address.

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


$apiInstance = new OpenAPI\Client\Api\AirportAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | A valid public IP v4 address
$radius_km = 56; // int | Radius of search around specified location in kilometers (max. 1000 km)
$limit = 56; // int | Maximum number of airports to be returned (max. 250)
$with_flight_info_only = false; // bool | If set to true, will only return airports which have flight data (scheduled or live) available. Default = false.

try {
    $result = $apiInstance->searchAirportsByIpGeoLocation($q, $radius_km, $limit, $with_flight_info_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportAPIApi->searchAirportsByIpGeoLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| A valid public IP v4 address | |
| **radius_km** | **int**| Radius of search around specified location in kilometers (max. 1000 km) | |
| **limit** | **int**| Maximum number of airports to be returned (max. 250) | |
| **with_flight_info_only** | **bool**| If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract**](../Model/GeoCoordinatesContractListingAirportContractSearchResultCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAirportsByLocation()`

```php
searchAirportsByLocation($lat, $lon, $radius_km, $limit, $with_flight_info_only): \OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract
```

Search airports by location [TIER 2]

**What are the airports closest to the location?**    At the moment airports having both ICAO and IATA code and flight schedules are present available only.    *Returns:* A list of airports found within the specified radius around the specified location.

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


$apiInstance = new OpenAPI\Client\Api\AirportAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lat = 3.4; // float | Latitude location coordinate in decimal format (between -90 and 90)
$lon = 3.4; // float | Longitude location coordinate in decimal format (between -180 and 180)
$radius_km = 56; // int | Radius of search around specified location in kilometers (max. 1000 km)
$limit = 56; // int | Maximum number of airports to be returned (max. 250)
$with_flight_info_only = false; // bool | If set to true, will only return airports which have flight data (scheduled or live) available. Default = false.

try {
    $result = $apiInstance->searchAirportsByLocation($lat, $lon, $radius_km, $limit, $with_flight_info_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportAPIApi->searchAirportsByLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lat** | **float**| Latitude location coordinate in decimal format (between -90 and 90) | |
| **lon** | **float**| Longitude location coordinate in decimal format (between -180 and 180) | |
| **radius_km** | **int**| Radius of search around specified location in kilometers (max. 1000 km) | |
| **limit** | **int**| Maximum number of airports to be returned (max. 250) | |
| **with_flight_info_only** | **bool**| If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract**](../Model/GeoCoordinatesContractListingAirportContractSearchResultCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
