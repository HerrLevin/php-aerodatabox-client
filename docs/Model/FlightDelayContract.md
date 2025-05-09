# # FlightDelayContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport_icao** | **string** | ICAO code of the airport at which statistics is observed |
**class** | [**\OpenAPI\Client\Model\StatisticClass**](StatisticClass.md) | Class of statistics&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - Flight&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - FlightAndHour&lt;/b&gt;&lt;/li&gt; &lt;/ul&gt; |
**scheduled_hour_utc** | **int** | Hour on which flight is scheduled (represented in UTC).    If provided, it separates the statistics for the same flight departing/arriving at different time of day  on different days within the observed period. | [optional]
**median_delay** | **string** | Median historic delay of the flight (format: [-]hh:mm:ss).  Value can be negative (therefore, means early occurence). |
**delay_percentiles** | [**\OpenAPI\Client\Model\PercentileBracketContract[]**](PercentileBracketContract.md) | Distribution of historic delays of the flight in percentiles from 5 percentile to 95 percentile in steps of 5 percentile,   allowing for a more detailed analysis of delay patterns beyond simple averages or medians. |
**num_considered_flights** | **int** | The number of flight movements taken into account to calculate this  statistics. |
**num_flights_delayed_brackets** | [**\OpenAPI\Client\Model\DelayBracketContract[]**](DelayBracketContract.md) | Brackets containing information more detailed information about  how many flights were delayed/early per specific delay range brackets  (e.g. late from 15 to 30 minutes, from 30 to 60, etc.) |
**from_utc** | **\DateTime** | The beginning of the time range within which flght delay information is calculated (represented in UTC time) |
**to_utc** | **\DateTime** | The end of the time range within which flght delay information is calculated (represented in UTC time) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
