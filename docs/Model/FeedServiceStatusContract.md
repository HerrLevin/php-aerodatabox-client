# # FeedServiceStatusContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service** | [**\OpenAPI\Client\Model\FeedServiceEnum**](FeedServiceEnum.md) | Airport feed service defininitions&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - FlightSchedules&lt;/b&gt;: Flight schedules data feed for this airport (static schedules data without actual updates)&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - FlightLiveUpdates&lt;/b&gt;: Actual flight status and time updates for this airport&lt;/li&gt; &lt;li&gt;&lt;b&gt;2 - AdsbUpdates&lt;/b&gt;: Flight updates derived from ADS-B data for this airport: runway, actual/estimated time on the runway, call-sign, ModeS 24-bit ICAO code, aircraft registration&lt;/li&gt; &lt;/ul&gt; |
**status** | [**\OpenAPI\Client\Model\FeedServiceStatus**](FeedServiceStatus.md) | Status of the service&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - Down&lt;/b&gt;: Service is provided, but is currently down&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - Degraded&lt;/b&gt;: Service is up and running, but performance is degraded: delays and disruptions are likely&lt;/li&gt; &lt;li&gt;&lt;b&gt;2 - OKPartial&lt;/b&gt;: Service is up and running normally, but updates vailable for not all or only few flights&lt;/li&gt; &lt;li&gt;&lt;b&gt;3 - OK&lt;/b&gt;: Service is up and running normally&lt;/li&gt; &lt;li&gt;&lt;b&gt;-2 - Unknown&lt;/b&gt;: Status of service is unknown&lt;/li&gt; &lt;li&gt;&lt;b&gt;-1 - Unavailable&lt;/b&gt;: Service is not provided&lt;/li&gt; &lt;/ul&gt; |
**min_available_local_date** | **\DateTime** | Date of the oldest flight stored (based on scheduled local times) | [optional]
**max_available_local_date** | **\DateTime** | Date of the most recent flight stored (based on scheduled local times) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
