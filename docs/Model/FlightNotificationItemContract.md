# # FlightNotificationItemContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_summary** | **string** | Human-readable summary of the flight status update | [optional]
**notification_remark** | **string** | Human-readable remark to the flight status update | [optional]
**great_circle_distance** | [**\OpenAPI\Client\Model\Distance**](Distance.md) | Great circle distance measured directly between origin and destination of the flight (if both are known) | [optional]
**departure** | [**\OpenAPI\Client\Model\FlightAirportMovementContract**](FlightAirportMovementContract.md) | Departure information |
**arrival** | [**\OpenAPI\Client\Model\FlightAirportMovementContract**](FlightAirportMovementContract.md) | Arrival information |
**last_updated_utc** | **\DateTime** | Time (UTC) of the latest update of flight information (excluding Location) |
**number** | **string** | Flight Number |
**call_sign** | **string** | ATC call-sign of the flight | [optional]
**status** | [**\OpenAPI\Client\Model\FlightStatus**](FlightStatus.md) | Flight progress status&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - Unknown&lt;/b&gt;: Status is not available for this flight&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - Expected&lt;/b&gt;: Expected&lt;/li&gt; &lt;li&gt;&lt;b&gt;2 - EnRoute&lt;/b&gt;: En route&lt;/li&gt; &lt;li&gt;&lt;b&gt;3 - CheckIn&lt;/b&gt;: Check-in is open&lt;/li&gt; &lt;li&gt;&lt;b&gt;4 - Boarding&lt;/b&gt;: Boarding in progress / Last call&lt;/li&gt; &lt;li&gt;&lt;b&gt;5 - GateClosed&lt;/b&gt;: Gate closed&lt;/li&gt; &lt;li&gt;&lt;b&gt;6 - Departed&lt;/b&gt;: Departed&lt;/li&gt; &lt;li&gt;&lt;b&gt;7 - Delayed&lt;/b&gt;: Delayed&lt;/li&gt; &lt;li&gt;&lt;b&gt;8 - Approaching&lt;/b&gt;: On approach to destination&lt;/li&gt; &lt;li&gt;&lt;b&gt;9 - Arrived&lt;/b&gt;: Arrived&lt;/li&gt; &lt;li&gt;&lt;b&gt;10 - Canceled&lt;/b&gt;: Cancelled&lt;/li&gt; &lt;li&gt;&lt;b&gt;11 - Diverted&lt;/b&gt;: Diverted to another destination&lt;/li&gt; &lt;li&gt;&lt;b&gt;12 - CanceledUncertain&lt;/b&gt;: Status of the flight is uncertain&lt;/li&gt; &lt;/ul&gt; |
**codeshare_status** | [**\OpenAPI\Client\Model\CodeshareStatus**](CodeshareStatus.md) | Flight code-share status&lt;p&gt;Possible values:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;0 - Unknown&lt;/b&gt;: Code-sharing information is unavailable for this flight. Flight might be operated both by airline owning the flight number as well as by another airliner.&lt;/li&gt; &lt;li&gt;&lt;b&gt;1 - IsOperator&lt;/b&gt;: Flight is operated by an airline owning the flight number (the same code)&lt;/li&gt; &lt;li&gt;&lt;b&gt;2 - IsCodeshared&lt;/b&gt;: Flight is code-shared (operated by an airline other than airline owning the flight number)&lt;/li&gt; &lt;/ul&gt; |
**is_cargo** | **bool** | Is cargo flight |
**aircraft** | [**\OpenAPI\Client\Model\FlightAircraftContract**](FlightAircraftContract.md) | Aicraft operating the flight | [optional]
**airline** | [**\OpenAPI\Client\Model\FlightAirlineContract**](FlightAirlineContract.md) | Airline owning the flight | [optional]
**location** | [**\OpenAPI\Client\Model\FlightLocationContract**](FlightLocationContract.md) | Real-time flight location, altitude, speed and track, if requested and available. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
