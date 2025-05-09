# OpenAPI\Client\AircraftAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAircraft()**](AircraftAPIApi.md#getAircraft) | **GET** /aircrafts/{searchBy}/{searchParam} | Single aircraft (by tail-number, Mode-S or ID) [TIER 1] |
| [**getAircraftImageByRegistration()**](AircraftAPIApi.md#getAircraftImageByRegistration) | **GET** /aircrafts/reg/{reg}/image/beta | Aircraft image by tail-number (BETA) [TIER 2] |
| [**getAircraftRegistrations()**](AircraftAPIApi.md#getAircraftRegistrations) | **GET** /aircrafts/{searchBy}/{searchParam}/registrations | Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1] |
| [**getAirlineFleet()**](AircraftAPIApi.md#getAirlineFleet) | **GET** /airlines/{airlineCode}/aircrafts | Airline fleet / Aircraft list by airline code (BETA) [TIER 3] |
| [**getAllAircraft()**](AircraftAPIApi.md#getAllAircraft) | **GET** /aircrafts/{searchBy}/{searchParam}/all | Aircraft by tail-number, Mode-S or ID [TIER 1] |
| [**recognizeAircraft()**](AircraftAPIApi.md#recognizeAircraft) | **POST** /aircrafts/recognize/beta | Aicraft image recognition (BETA) [TIER 3] |
| [**searchAircraftByTerm()**](AircraftAPIApi.md#searchAircraftByTerm) | **GET** /aircrafts/search/term | Search active aircraft tail numbers by term [TIER 2] |


## `getAircraft()`

```php
getAircraft($search_by, $search_param, $with_image, $with_registrations): \OpenAPI\Client\Model\AircraftContract
```

Single aircraft (by tail-number, Mode-S or ID) [TIER 1]

*Returns:* Single aircraft, *best* matching specified search criteria, if found. Please note that all found aircraft will be impersonated with registration information matching the requested tail number or Mode-S even though an aircraft might be flying under a different registration right now.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelAircraftSearchByEnum | Criteria to search aircraft by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `id`: then this field should be an ID of an aircraft (as specified in the database of this API);  * `reg`: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * `icao24`, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned.
$with_image = false; // bool | Should include aircraft image (default: false).
$with_registrations = false; // bool | Should include the history of aircraft registrations (default: false).

try {
    $result = $apiInstance->getAircraft($search_by, $search_param, $with_image, $with_registrations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAircraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelAircraftSearchByEnum**| Criteria to search aircraft by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. | |
| **with_image** | **bool**| Should include aircraft image (default: false). | [optional] [default to false] |
| **with_registrations** | **bool**| Should include the history of aircraft registrations (default: false). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AircraftContract**](../Model/AircraftContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAircraftImageByRegistration()`

```php
getAircraftImageByRegistration($reg): \OpenAPI\Client\Model\ResourceContract
```

Aircraft image by tail-number (BETA) [TIER 2]

**What is the aircraft photo?**    Aircraft images are being searched in external sources by certain criteria without any manual intervention.   Therefore, false matches may be returned. Only images with licenses approved for commercial use are returned. Please be advised that you may be required to mention author attribution before using the image.    *Returns:* Image data with medium-sized direct image URL and licence approved for commercial use  is returned.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reg = 'reg_example'; // string | Tail-number of the aircraft (full, stripped and any case formats are acceptable).

try {
    $result = $apiInstance->getAircraftImageByRegistration($reg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAircraftImageByRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reg** | **string**| Tail-number of the aircraft (full, stripped and any case formats are acceptable). | |

### Return type

[**\OpenAPI\Client\Model\ResourceContract**](../Model/ResourceContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAircraftRegistrations()`

```php
getAircraftRegistrations($search_by, $search_param): \OpenAPI\Client\Model\AircraftRegistrationContract[]
```

Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]

*Returns:* A list of all known registrations of a single aircraft, *best* matching specified search criteria, if found

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelAircraftSearchByEnum | Criteria to search aircraft by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `id`, then this field should be an ID of an aircraft (as specified in the database of this API);  * `reg`, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * `icao24`, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to `Single aircraft` endpoint.

try {
    $result = $apiInstance->getAircraftRegistrations($search_by, $search_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAircraftRegistrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelAircraftSearchByEnum**| Criteria to search aircraft by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. | |

### Return type

[**\OpenAPI\Client\Model\AircraftRegistrationContract[]**](../Model/AircraftRegistrationContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirlineFleet()`

```php
getAirlineFleet($airline_code, $page_size, $page_offset, $with_registrations): \OpenAPI\Client\Model\AircraftContractPagedCollectionContract
```

Airline fleet / Aircraft list by airline code (BETA) [TIER 3]

*Returns:* A paged list of aircraft in the fleet of the specified airline.     That will include *active* aircraft currently flying in an *active* airline, verfified through more than one source.  Unconfirmed sightings of an aircraft will not qualify said aircraft to be listed in the fleet.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$airline_code = 'airline_code_example'; // string | 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint.
$page_size = 56; // int | The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan.
$page_offset = 0; // int | The number of records to skip before listing a page of records. In conjunction with `pageSize` effectively determines the page number (default  - 0).
$with_registrations = false; // bool | Should include the history of aircraft registrations (default: false).

try {
    $result = $apiInstance->getAirlineFleet($airline_code, $page_size, $page_offset, $with_registrations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAirlineFleet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **airline_code** | **string**| 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. | |
| **page_size** | **int**| The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. | |
| **page_offset** | **int**| The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). | [optional] [default to 0] |
| **with_registrations** | **bool**| Should include the history of aircraft registrations (default: false). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AircraftContractPagedCollectionContract**](../Model/AircraftContractPagedCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAircraft()`

```php
getAllAircraft($search_by, $search_param, $with_image, $with_registrations): \OpenAPI\Client\Model\AircraftContract[]
```

Aircraft by tail-number, Mode-S or ID [TIER 1]

*Returns:* A list of all aircraft ever matched the requested criteria. Please note that all found aircraft will be impersonated with registration information matching the requested tail number or Mode-S even though an aircraft might be flying under a different registration right now.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelAircraftSearchByEnum | Criteria to search aircraft by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `id`, then this field should be an ID of an aircraft (as specified in the database of this API);  * `reg`, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD).
$with_image = false; // bool | Should include aircraft image (default: false).
$with_registrations = false; // bool | Should include the history of aircraft registrations (default: false).

try {
    $result = $apiInstance->getAllAircraft($search_by, $search_param, $with_image, $with_registrations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAllAircraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelAircraftSearchByEnum**| Criteria to search aircraft by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). | |
| **with_image** | **bool**| Should include aircraft image (default: false). | [optional] [default to false] |
| **with_registrations** | **bool**| Should include the history of aircraft registrations (default: false). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AircraftContract[]**](../Model/AircraftContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recognizeAircraft()`

```php
recognizeAircraft($photo): \OpenAPI\Client\Model\AircraftRecognitionResultContract
```

Aicraft image recognition (BETA) [TIER 3]

**What aircrafts are depicted on this photo?**    This endpoint recognizes aircrafts on uploaded image and returns information about all detected aircrafts. It is based on computer vision technology and therefore results may be imprecise.   It relies on detecting aircrafts' registrations and, once detected, attempting to match these registration with records in aircrafts database.    *Returns:* Data about found and recognized aircrafts.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$photo = '/path/to/file.txt'; // \SplFileObject | Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible).

try {
    $result = $apiInstance->recognizeAircraft($photo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->recognizeAircraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **photo** | **\SplFileObject****\SplFileObject**| Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). | |

### Return type

[**\OpenAPI\Client\Model\AircraftRecognitionResultContract**](../Model/AircraftRecognitionResultContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAircraftByTerm()`

```php
searchAircraftByTerm($q, $limit): \OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract
```

Search active aircraft tail numbers by term [TIER 2]

*Returns:* List of active aircraft registrations with tail numbers starting from the term.

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


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search term (min. 4 non whitespace characters length)
$limit = 5; // int | Maximum number of items to be returned (max. 10, defaut = 5)

try {
    $result = $apiInstance->searchAircraftByTerm($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->searchAircraftByTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search term (min. 4 non whitespace characters length) | |
| **limit** | **int**| Maximum number of items to be returned (max. 10, defaut &#x3D; 5) | [optional] [default to 5] |

### Return type

[**\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract**](../Model/StringAircraftContractSearchResultCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
