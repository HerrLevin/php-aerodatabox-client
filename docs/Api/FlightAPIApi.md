# OpenAPI\Client\FlightAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirportFlights()**](FlightAPIApi.md#getAirportFlights) | **GET** /flights/airports/{codeType}/{code}/{fromLocal}/{toLocal} | FIDS (airport departures and arrivals) - by local time range [TIER 2] |
| [**getAirportFlightsRelative()**](FlightAPIApi.md#getAirportFlightsRelative) | **GET** /flights/airports/{codeType}/{code} | FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2] |
| [**getFlightDatesFlightDatesAll()**](FlightAPIApi.md#getFlightDatesFlightDatesAll) | **GET** /flights/{searchBy}/{searchParam}/dates | Flight departure dates [TIER 2] |
| [**getFlightDatesFlightDatesInRange()**](FlightAPIApi.md#getFlightDatesFlightDatesInRange) | **GET** /flights/{searchBy}/{searchParam}/dates/{fromLocal}/{toLocal} | Flight departure dates [TIER 2] |
| [**getFlightFlightNearest()**](FlightAPIApi.md#getFlightFlightNearest) | **GET** /flights/{searchBy}/{searchParam} | Flight Status (single day) [TIER 2] |
| [**getFlightFlightOnSpecificDate()**](FlightAPIApi.md#getFlightFlightOnSpecificDate) | **GET** /flights/{searchBy}/{searchParam}/{dateLocal} | Flight Status (single day) [TIER 2] |
| [**getFlightHistoryFlightHistory()**](FlightAPIApi.md#getFlightHistoryFlightHistory) | **GET** /flights/{searchBy}/{searchParam}/{dateFromLocal}/{dateToLocal} | Flight History and Schedule (range of days) [TIER 3] |
| [**searchFlightsByTerm()**](FlightAPIApi.md#searchFlightsByTerm) | **GET** /flights/search/term | Search flight numbers by term [TIER 2] |


## `getAirportFlights()`

```php
getAirportFlights($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location): \OpenAPI\Client\Model\AirportFidsContract
```

FIDS (airport departures and arrivals) - by local time range [TIER 2]

**What are current departures or arrivals at the airport?** or **What is the flight schedule at the airport?** or **What is flight history at the airport?**    Flights may contain live updates with corresponding information related to the actual progress of the flight   (including actual/estimated arrival/departure times). In this case this endpoint serves as a FIDS endpoint.   Presense of live updates is subject to data coverage: not all airports have this coverage in our system.    Otherwise flight information will be limited to scheduled only and will not be updated real-time. Much more airports  have this type of coverage. To check if airport is tracked and on which level, use *_/health/services/airports/{icao}/feeds* endpoint.   You can also use *_/health/services/feeds/{service}/airports* to get the list of supported airports for this  or that layer of coverage. To learn more about the data coverage, refer to *https://www.aerodatabox.com/data-coverage*.    *Returns*: the list of arriving and/or departing flights scheduled and/or planned and/or commenced within a specified   time range for a specified airport.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$from_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm)
$to_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours.
$direction = 'Both'; // \OpenAPIClientModelFlightDirection | Direction of flights: Arrival, Departure or Both (default)
$with_leg = false; // bool | If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false.
$with_cancelled = true; // bool | If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true.
$with_codeshared = true; // bool | If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus=Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible).
$with_cargo = true; // bool | If set to true, the result will include cargo flights (subject to availability).
$with_private = true; // bool | If set to true, the result will include private flights (subject to availability).
$with_location = false; // bool | If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability).

try {
    $result = $apiInstance->getAirportFlights($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getAirportFlights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **from_local** | **\DateTime**| Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) | |
| **to_local** | **\DateTime**| End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. | |
| **direction** | **\OpenAPIClientModelFlightDirection**| Direction of flights: Arrival, Departure or Both (default) | [optional] [default to &#39;Both&#39;] |
| **with_leg** | **bool**| If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. | [optional] [default to false] |
| **with_cancelled** | **bool**| If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. | [optional] [default to true] |
| **with_codeshared** | **bool**| If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). | [optional] [default to true] |
| **with_cargo** | **bool**| If set to true, the result will include cargo flights (subject to availability). | [optional] [default to true] |
| **with_private** | **bool**| If set to true, the result will include private flights (subject to availability). | [optional] [default to true] |
| **with_location** | **bool**| If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AirportFidsContract**](../Model/AirportFidsContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirportFlightsRelative()`

```php
getAirportFlightsRelative($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location): \OpenAPI\Client\Model\AirportFidsContract
```

FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]

**What are current departures or arrivals at the airport?** or **What is the flight schedule at the airport?** or **What is flight history at the airport?**    Flights may contain live updates with corresponding information related to the actual progress of the flight   (including actual/estimated arrival/departure times). In this case this endpoint serves as a FIDS endpoint.   Presense of live updates is subject to data coverage: not all airports have this coverage in our system.    Otherwise flight information will be limited to scheduled only and will not be updated real-time. Much more airports  have this type of coverage. To check if airport is tracked and on which level, use *_/health/services/airports/{icao}/feeds* endpoint.   You can also use *_/health/services/feeds/{service}/airports* to get the list of supported airports for this  or that layer of coverage. To learn more about the data coverage, refer to *https://www.aerodatabox.com/data-coverage*.    *Returns*: the list of arriving and/or departing flights scheduled and/or planned and/or commenced within a time range specified   relatively to the current local time at the airport.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code_type = 'code_type_example'; // \OpenAPIClientModelAirportCodesByEnum | Type of code to search airport by (`iata` or `icao`)
$code = 'code_example'; // string | If `codeType` is:  * `icao`, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * `iata`, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable.
$offset_minutes = -120; // int | Beginning of the search range expressed in minutes relative to the current time at the airport (default: `-120`)
$duration_minutes = 720; // int | Length (duration) of the search range expressed in minutes (default: `720`)
$direction = 'Both'; // \OpenAPIClientModelFlightDirection | Direction of flights: Arrival, Departure or Both (default)
$with_leg = false; // bool | If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false.
$with_cancelled = true; // bool | If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true.
$with_codeshared = true; // bool | If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus=Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible).
$with_cargo = true; // bool | If set to true, the result will include cargo flights (subject to availability).
$with_private = true; // bool | If set to true, the result will include private flights (subject to availability).
$with_location = false; // bool | If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability).

try {
    $result = $apiInstance->getAirportFlightsRelative($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getAirportFlightsRelative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code_type** | **\OpenAPIClientModelAirportCodesByEnum**| Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) | |
| **code** | **string**| If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. | |
| **offset_minutes** | **int**| Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) | [optional] [default to -120] |
| **duration_minutes** | **int**| Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) | [optional] [default to 720] |
| **direction** | **\OpenAPIClientModelFlightDirection**| Direction of flights: Arrival, Departure or Both (default) | [optional] [default to &#39;Both&#39;] |
| **with_leg** | **bool**| If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. | [optional] [default to false] |
| **with_cancelled** | **bool**| If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. | [optional] [default to true] |
| **with_codeshared** | **bool**| If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). | [optional] [default to true] |
| **with_cargo** | **bool**| If set to true, the result will include cargo flights (subject to availability). | [optional] [default to true] |
| **with_private** | **bool**| If set to true, the result will include private flights (subject to availability). | [optional] [default to true] |
| **with_location** | **bool**| If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AirportFidsContract**](../Model/AirportFidsContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightDatesFlightDatesAll()`

```php
getFlightDatesFlightDatesAll($search_by, $search_param): string[]
```

Flight departure dates [TIER 2]

**On which days the flight operates?** or **What is the flight schedule?**    Flight can be searched by:  * flight number it's being operated under; or  * ATC-callsign it's being operated under; or  * tail-number of the aircraft it's being operated by; or  * Mode-S 24-bit ICAO Transponder address of the aircraft it's being operated by.    *Returns:* Array of local departure dates in (YYYY-MM-DD) format for flights operated under speified call-sign and within the time range specified.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelFlightSearchByEnum | Criteria to search flight by
$search_param = 'search_param_example'; // string | Value of the search criteria. If **searchBy** is:   * `number`, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * `callsign`, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * `reg`: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD).

try {
    $result = $apiInstance->getFlightDatesFlightDatesAll($search_by, $search_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getFlightDatesFlightDatesAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelFlightSearchByEnum**| Criteria to search flight by | |
| **search_param** | **string**| Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). | |

### Return type

**string[]**

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightDatesFlightDatesInRange()`

```php
getFlightDatesFlightDatesInRange($search_by, $search_param, $from_local, $to_local): string[]
```

Flight departure dates [TIER 2]

**On which days the flight operates?** or **What is the flight schedule?**    Flight can be searched by:  * flight number it's being operated under; or  * ATC-callsign it's being operated under; or  * tail-number of the aircraft it's being operated by; or  * Mode-S 24-bit ICAO Transponder address of the aircraft it's being operated by.    *Returns:* Array of local departure dates in (YYYY-MM-DD) format for flights operated under speified call-sign and within the time range specified.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelFlightSearchByEnum | Criteria to search flight by
$search_param = 'search_param_example'; // string | Value of the search criteria. If **searchBy** is:   * `number`, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * `callsign`, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * `reg`: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD).
$from_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Beginning of the search range (local time, format: YYYY-MM-DD)
$to_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the search range (local time, format: YYYY-MM-DD)

try {
    $result = $apiInstance->getFlightDatesFlightDatesInRange($search_by, $search_param, $from_local, $to_local);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getFlightDatesFlightDatesInRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelFlightSearchByEnum**| Criteria to search flight by | |
| **search_param** | **string**| Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). | |
| **from_local** | **\DateTime**| Beginning of the search range (local time, format: YYYY-MM-DD) | |
| **to_local** | **\DateTime**| End of the search range (local time, format: YYYY-MM-DD) | |

### Return type

**string[]**

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightFlightNearest()`

```php
getFlightFlightNearest($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location): \OpenAPI\Client\Model\FlightContract[]
```

Flight Status (single day) [TIER 2]

**What is the status of a specific flight?**  **What is the historical status or schedule of a specific flight on a specific date in past or in future?**    This endpoint returns data about a specific flight  live flight status (if the flight is within the coverage and not in distant future),   or flight schedule data otherwise.    If `dateLocal` is specified, gets data about flight(s) departing or arriving on the day specified (local time).  Otherwise, gets data about the status of flight(s) operating on the nearest date (either in past or in future).    A flight can be searched by:  * flight number it's being operated under; or  * ATC-callsign it's being operated under; or  * tail-number of the aircraft it's being operated by; or  * Mode-S 24-bit ICAO Transponder address of the aircraft it's being operated by.    Flight data may include airport of arrival and departure, scheduled and actual times, flight status, type of aircraft,   tail-number and aircraft image.    Some flights may have partial data. The data may be absent for either arrival   or departure airport or may not include live updates of time and status. Check quality markers inside the response to   determine which data is available.    Normally, information with live status updates and estimated/actual arrival/departure times is only available   for airports tracked live or with ADS-B by our system. Otherwise flight information will be with scheduled info only   or absent.     To check if an airport is currently tracked and on which level,   use `/health/services/airports/{icao}/feeds` endpoint. You can also use `/health/services/feeds/{service}/airports` to get   the list of covered airports.     Read more about coverage and flight data limitations here: https://www.aerodatabox.com/data-coverage.    Aircraft images are being searched in external sources by certain criteria without any manual intervention.   Therefore, false matches may be returned. Only images with licenses approved for commercial use are returned.   Please be advised that you may be required to mention author attribution before using the image.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelFlightSearchByEnum | Criteria to search flight by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `number`, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * `callsign`, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * `reg`, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD).
$date_local_role = 'Both'; // \OpenAPIClientModelFlightDirection | * If set to `Both` (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to `Departure` then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to `Arrival` then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned.
$with_aircraft_image = false; // bool | Should include aircraft image (default: false).
$with_location = false; // bool | Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false).

try {
    $result = $apiInstance->getFlightFlightNearest($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getFlightFlightNearest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelFlightSearchByEnum**| Criteria to search flight by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). | |
| **date_local_role** | **\OpenAPIClientModelFlightDirection**| * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. | [optional] [default to &#39;Both&#39;] |
| **with_aircraft_image** | **bool**| Should include aircraft image (default: false). | [optional] [default to false] |
| **with_location** | **bool**| Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FlightContract[]**](../Model/FlightContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightFlightOnSpecificDate()`

```php
getFlightFlightOnSpecificDate($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location): \OpenAPI\Client\Model\FlightContract[]
```

Flight Status (single day) [TIER 2]

**What is the status of a specific flight?**  **What is the historical status or schedule of a specific flight on a specific date in past or in future?**    This endpoint returns data about a specific flight  live flight status (if the flight is within the coverage and not in distant future),   or flight schedule data otherwise.    If `dateLocal` is specified, gets data about flight(s) departing or arriving on the day specified (local time).  Otherwise, gets data about the status of flight(s) operating on the nearest date (either in past or in future).    A flight can be searched by:  * flight number it's being operated under; or  * ATC-callsign it's being operated under; or  * tail-number of the aircraft it's being operated by; or  * Mode-S 24-bit ICAO Transponder address of the aircraft it's being operated by.    Flight data may include airport of arrival and departure, scheduled and actual times, flight status, type of aircraft,   tail-number and aircraft image.    Some flights may have partial data. The data may be absent for either arrival   or departure airport or may not include live updates of time and status. Check quality markers inside the response to   determine which data is available.    Normally, information with live status updates and estimated/actual arrival/departure times is only available   for airports tracked live or with ADS-B by our system. Otherwise flight information will be with scheduled info only   or absent.     To check if an airport is currently tracked and on which level,   use `/health/services/airports/{icao}/feeds` endpoint. You can also use `/health/services/feeds/{service}/airports` to get   the list of covered airports.     Read more about coverage and flight data limitations here: https://www.aerodatabox.com/data-coverage.    Aircraft images are being searched in external sources by certain criteria without any manual intervention.   Therefore, false matches may be returned. Only images with licenses approved for commercial use are returned.   Please be advised that you may be required to mention author attribution before using the image.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelFlightSearchByEnum | Criteria to search flight by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `number`, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * `callsign`, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * `reg`, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD).
$date_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan.
$date_local_role = 'Both'; // \OpenAPIClientModelFlightDirection | * If set to `Both` (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to `Departure` then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to `Arrival` then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned.
$with_aircraft_image = false; // bool | Should include aircraft image (default: false).
$with_location = false; // bool | Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false).

try {
    $result = $apiInstance->getFlightFlightOnSpecificDate($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getFlightFlightOnSpecificDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelFlightSearchByEnum**| Criteria to search flight by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). | |
| **date_local** | **\DateTime**| Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. | |
| **date_local_role** | **\OpenAPIClientModelFlightDirection**| * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. | [optional] [default to &#39;Both&#39;] |
| **with_aircraft_image** | **bool**| Should include aircraft image (default: false). | [optional] [default to false] |
| **with_location** | **bool**| Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FlightContract[]**](../Model/FlightContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlightHistoryFlightHistory()`

```php
getFlightHistoryFlightHistory($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role): \OpenAPI\Client\Model\FlightContract[]
```

Flight History and Schedule (range of days) [TIER 3]

**What is the history or schedule of a specific flight within a specific range of dates in past or in future?**    This endpoint is the similar to the `Flight status` endpoint.   The only difference is that instead of returning the flight data on a single date, it returns the data over a range of dates, thus  allowing to get insights on the flight history or schedule within the specified range.    All limitations and considerations applicable to `Flight status` endpoint are applicable to this endpoint as well.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelFlightSearchByEnum | Criteria to search flight by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `number`, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * `callsign`, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * `reg`, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * `icao24`, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD).
$date_from_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan.
$date_to_local = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing).
$date_local_role = 'Both'; // \OpenAPIClientModelFlightDirection | * If set to `Both` (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to `Departure` then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to `Arrival` then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned.

try {
    $result = $apiInstance->getFlightHistoryFlightHistory($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->getFlightHistoryFlightHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_by** | **\OpenAPIClientModelFlightSearchByEnum**| Criteria to search flight by | |
| **search_param** | **string**| Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). | |
| **date_from_local** | **\DateTime**| Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. | |
| **date_to_local** | **\DateTime**| End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). | |
| **date_local_role** | **\OpenAPIClientModelFlightDirection**| * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. | [optional] [default to &#39;Both&#39;] |

### Return type

[**\OpenAPI\Client\Model\FlightContract[]**](../Model/FlightContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFlightsByTerm()`

```php
searchFlightsByTerm($q, $limit): \OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract
```

Search flight numbers by term [TIER 2]

*Returns:* Distinct list of available flight numbers which start with the search query.

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


$apiInstance = new OpenAPI\Client\Api\FlightAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search query (min. 2 non whitespace characters length)
$limit = 10; // int | Maximum number of items to be returned (max. 100, defaut = 10)

try {
    $result = $apiInstance->searchFlightsByTerm($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightAPIApi->searchFlightsByTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search query (min. 2 non whitespace characters length) | |
| **limit** | **int**| Maximum number of items to be returned (max. 100, defaut &#x3D; 10) | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract**](../Model/StringFlightSearchItemContractSearchResultCollectionContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
