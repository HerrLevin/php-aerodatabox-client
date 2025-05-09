# # FlightLocationContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pressure_altitude** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Pressure altitude adjusted to ISA |
**altitude** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Altitude adjusted to pressure setting (QNH)  Gives approximately the altitude above mean sea level (MSL) |
**pressure** | [**\OpenAPI\Client\Model\Pressure**](Pressure.md) | Pressure setting (QNH) used to calculate altitude from pressure altitude |
**ground_speed** | [**\OpenAPI\Client\Model\Speed**](Speed.md) | Ground speed |
**true_track** | [**\OpenAPI\Client\Model\Azimuth**](Azimuth.md) | True track |
**reported_at_utc** | **\DateTime** | Time (UTC) of when this positional data was reported |
**lat** | **float** | Latitude, in degrees |
**lon** | **float** | Longitude, in degrees |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
