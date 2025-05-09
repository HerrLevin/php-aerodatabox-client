# # RunwayContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the runway. E.g.: 27L, 06, 36C, etc. |
**true_hdg** | **float** | True heading of the runway in degrees |
**length** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Length of the runway | [optional]
**width** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Width of the runway | [optional]
**is_closed** | **bool** | Marker, if runway is closed |
**location** | [**\OpenAPI\Client\Model\GeoCoordinatesContract**](GeoCoordinatesContract.md) | Coordinates of intersection of the threshold and centerline | [optional]
**surface** | [**\OpenAPI\Client\Model\SurfaceType**](SurfaceType.md) | Type of runway surface&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - Unknown&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - Asphalt&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;2 - Concrete&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;3 - Grass&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;4 - Dirt&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;5 - Gravel&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;6 - DryLakebed&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;7 - Water&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;8 - Snow&lt;/b&gt;&lt;/li&gt; &lt;/ul&gt; |
**displaced_threshold** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | The distance to the displaced threshold | [optional]
**has_lighting** | **bool** | Does runway has lights | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
