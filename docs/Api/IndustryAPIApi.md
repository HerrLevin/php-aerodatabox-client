# OpenAPI\Client\IndustryAPIApi

All URIs are relative to https://aerodatabox.p.rapidapi.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFaaLaddAircraftStatus()**](IndustryAPIApi.md#getFaaLaddAircraftStatus) | **GET** /industry/faa-ladd/{id}/status | FAA LADD Aircraft Status [TIER 3] |


## `getFaaLaddAircraftStatus()`

```php
getFaaLaddAircraftStatus($id): \OpenAPI\Client\Model\FaaLaddAircraftStatusContract
```

FAA LADD Aircraft Status [TIER 3]

*Returns:* The **current** status of the specified aircraft in the Limiting Aircraft Displayed program  of the Federal Aviation Administration of the U.S. Department of Transportation (FAA LADD).   The industry list of blocked aircraft is synchrornized weekly with the FAA.   More information about FAA LADD: https://www.faa.gov/pilots/ladd    **DISCLAIMER.** This endpoint is designed to provide easy access to verification against the FAA LADD industry list.  Even though it is based on the official data distributed weekly by the FAA, this is **NOT the official source  of the FAA LADD data**. For the official sources, always contact the FAA directly.

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


$apiInstance = new OpenAPI\Client\Api\IndustryAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Callsign or aircraft tail number

try {
    $result = $apiInstance->getFaaLaddAircraftStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryAPIApi->getFaaLaddAircraftStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Callsign or aircraft tail number | |

### Return type

[**\OpenAPI\Client\Model\FaaLaddAircraftStatusContract**](../Model/FaaLaddAircraftStatusContract.md)

### Authorization

[X-RapidAPI-Host](../../README.md#X-RapidAPI-Host), [X-RapidAPI-Key](../../README.md#X-RapidAPI-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
