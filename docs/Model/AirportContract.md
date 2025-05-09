# # AirportContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**icao** | **string** | ICAO code of the airport | [optional]
**iata** | **string** | IATA code of the airport | [optional]
**local_code** | **string** | Code of the airport within the local or national coding system | [optional]
**short_name** | **string** | Shortened name of the airport | [optional]
**full_name** | **string** | Full name of the airport (derived from own airport name and municipality name) |
**municipality_name** | **string** | Name of the municipality this airport belongs to | [optional]
**location** | [**\OpenAPI\Client\Model\GeoCoordinatesContract**](GeoCoordinatesContract.md) | Location of the airport |
**elevation** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Elevation of the airport |
**country** | [**\OpenAPI\Client\Model\CountryContract**](CountryContract.md) | Country airport belongs to |
**continent** | [**\OpenAPI\Client\Model\ContinentContract**](ContinentContract.md) | Continent airport belongs to |
**time_zone** | **string** | Time zone of the airport in Olson format (e.g. \&quot;Europe/Amsterdam\&quot;) |
**urls** | [**\OpenAPI\Client\Model\AirportUrlsContract**](AirportUrlsContract.md) | Links and URLs related to airport |
**runways** | [**\OpenAPI\Client\Model\RunwayContract[]**](RunwayContract.md) | List of runway information, if requested | [optional]
**current_time** | [**\OpenAPI\Client\Model\AirportLocalTimeContract**](AirportLocalTimeContract.md) | Current time information, if requested | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
