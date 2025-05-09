# # SolarStateContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | [**\OpenAPI\Client\Model\GeoCoordinatesContract**](GeoCoordinatesContract.md) | Location where solar information is calculated |
**sun_elevation** | [**\OpenAPI\Client\Model\Angle**](Angle.md) | Elevation of the Sun |
**sun_azimuth** | [**\OpenAPI\Client\Model\Azimuth**](Azimuth.md) | Azimuth of the Sun |
**day_time** | [**\OpenAPI\Client\Model\DayTime[]**](DayTime.md) | Daytime states |
**dawn_astronomical** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the astronomical dawn (the Sun rises above 18 degrees below the horizon).  May be absent during polar day / night. | [optional]
**dawn_nautical** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the nautical dawn (the Sun rises above 12 degrees below the horizon).  May be absent during polar day / night. | [optional]
**dawn_civil** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the civil dawn (the Sun rises above 6 degrees below the horizon).  May be absent during polar day / night. | [optional]
**sunrise** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Time of the sunrise.  May be absent during polar day / night. | [optional]
**noon_true** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the true solar noon.  May be absent during polar day / night. | [optional]
**sunset** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Time of the sunset.  May be absent during polar day / night. | [optional]
**dusk_civil** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the civil dawn (the Sun sets below 6 degrees below the horizon).  May be absent during polar day / night. | [optional]
**dusk_nautical** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the nautical dawn (the Sun sets below 12 degrees below the horizon).  May be absent during polar day / night. | [optional]
**dusk_astronomical** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | The time of the astronomical dawn (the Sun sets below 18 degrees below the horizon).  May be absent during polar day / night. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
