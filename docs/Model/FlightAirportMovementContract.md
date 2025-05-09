# # FlightAirportMovementContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport** | [**\OpenAPI\Client\Model\ListingAirportContract**](ListingAirportContract.md) | Airport information |
**scheduled_time** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Scheduled time of arrival or departure of the flight | [optional]
**revised_time** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Actual or estimated time of arrival or departure the flight.  If RunwayTime is specified, this time is time of departure/arrival to the gate.   Otherwise, it can be either time at gate or on runway. | [optional]
**predicted_time** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Predicted time based on historical data (experimental). May significantly differ with &#x60;RevisedTime&#x60;.  Only available for non-completed or unknown-status flights arriving, departing within a week and only via Flight Status endpoint.                For arriving flights:  Predicted time of arrival based on departure time. Not available if departure times are unavailable.    For departing flights:  Predicted time of departure based on arrival time. Only available if departure times are unavailable. | [optional]
**runway_time** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Time of landing for arriving or take-off of the departing flight, if known. | [optional]
**terminal** | **string** | Terminal of the flight | [optional]
**check_in_desk** | **string** | Check-in desk(s) for the flight (only for departing flights) | [optional]
**gate** | **string** | Gate of (un)boarding for the flight | [optional]
**baggage_belt** | **string** | Baggage belt(s) for the flight (only for arriving flights) | [optional]
**runway** | **string** | Name of a runway of landing (for arriving flights) or take-off (for departing flights), if known. | [optional]
**quality** | [**\OpenAPI\Client\Model\FlightAirportMovementQualityEnum[]**](FlightAirportMovementQualityEnum.md) | Array of quality characteristics of the data. Check this to know which information  you can expect within this contract (basic, live and/or approximate data). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
