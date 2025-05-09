# # AirportDelayContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport_icao** | **string** | Airport ICAO code |
**from** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The beginning of the time range within which flght delay information is calculated |
**to** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The end of the time range within which flght delay information is calculated |
**departures_delay_information** | [**\OpenAPI\Client\Model\FlightBatchDelayContract**](FlightBatchDelayContract.md) | Delay information about departures of the airport withn a time range |
**arrivals_delay_information** | [**\OpenAPI\Client\Model\FlightBatchDelayContract**](FlightBatchDelayContract.md) | Delay information about arrivals of the airport withn a time range |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
