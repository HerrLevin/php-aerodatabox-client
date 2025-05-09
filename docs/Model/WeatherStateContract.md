# # WeatherStateContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | [**\OpenAPI\Client\Model\GeoCoordinatesContract**](GeoCoordinatesContract.md) | Location where solar information is calculated |
**air_temperature** | [**\OpenAPI\Client\Model\Temperature**](Temperature.md) | Air temperature | [optional]
**dew_point** | [**\OpenAPI\Client\Model\Temperature**](Temperature.md) | Dew point | [optional]
**pressure** | [**\OpenAPI\Client\Model\Pressure**](Pressure.md) | Atmospheric pressure | [optional]
**wind** | [**\OpenAPI\Client\Model\WindContract**](WindContract.md) | Wind information | [optional]
**visibility** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Visibility | [optional]
**report** | **string** | Aviation weather report   (typically a METAR or TAF string, as applicable) | [optional]
**cloud_base** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Cloud base | [optional]
**cloud_cover** | [**\OpenAPI\Client\Model\CloudCover**](CloudCover.md) | Cloud cover | [optional]
**phenomena_groups** | [**\OpenAPI\Client\Model\PhenomenaGroup[]**](PhenomenaGroup.md) | Weather phenomena groups | [optional]
**valid_from** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Valid from |
**valid_to** | [**\OpenAPI\Client\Model\DateTimeContract**](DateTimeContract.md) | Valid to |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
