# # SubscriptionSubjectContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\SubscriptionSubjectType**](SubscriptionSubjectType.md) | Subject type of a subscription. Often complemented with SubjectId.     E.g. SubjectType &#x3D; \&quot;FlightNumber\&quot; and SubjectId &#x3D; \&quot;DL 47\&quot; means that this  subscription is for all updates of flight with number DL47.&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - FlightByNumber&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - FlightByAirportIcao&lt;/b&gt;&lt;/li&gt; &lt;/ul&gt; |
**id** | **string** | Subject ID of a subscription. Complements SubjectType.    E.g. SubjectType &#x3D; \&quot;FlightNumber\&quot; and SubjectId &#x3D; \&quot;DL 47\&quot; means that this  subscription is for all updates of flight with number DL47. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
