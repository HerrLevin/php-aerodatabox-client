# OpenAPIClient-php

**AeroDataBox API** is an enthusiast-driven cost-effective aviation and flight data API tailored for small and medium businesses, individual developers, researchers, and students. It offers a wide range of data, including flight status, schedules, aircraft information, airport details, statistics, historical data, and more. Designed for seamless integration using REST and web hooks and available through major API marketplaces, it enables users to incorporate aviation information effortlessly into their systems at affordable rates.

## Sign Up
Access AeroDataBox API for a price of a cup of coffee! 
Sign up through one of the supported API marketplaces, each offering various pricing models to suit your specific needs.
- **[RapidAPI](https://rapid.aerodatabox.com/) - most tried & tested**
- **[API.Market](https://apimarket.aerodatabox.com/) - free plan available**
- **[Sulu Hub](https://sulu.aerodatabox.com/) - pay-per-use, no subscription, crypto accepted**

Pricing details for each marketplace can be found on the [pricing page](https://aerodatabox.com/pricing).

## Follow Updates

Our API constantly evolves! Visit our [web-site](https://aerodatabox.com) and join our newsletter to stay in the loop. 
Recent updates can be found on the [News & Updates](https://aerodatabox.com/news) page

## Must-Reads
* **⚠️ [Terms of Use](https://aerodatabox.com/terms) &lt;- BY SUBSCRIBING TO THE API YOU AUTOMATICALLY ACCEPT THESE TERMS**
* **⚠️ [Pricing](https://aerodatabox.com/pricing)  &lt;- CALLS ARE NOT PRICED EQUALLY**
* **⚠️ [Data Coverage](https://aerodatabox.com/data-coverage) &lt;- BE AWARE OF OUR LIMITATIONS**
* [Documentation & OpenAPI Specification](https://doc.aerodatabox.com/ )
* [FAQ](https://aerodatabox.com/faq)
* [For Students & Researchers](https://aerodatabox.com/students)

## API Supported Response Formats
* JSON (default, `Accept: application/json`)
* XML (`Accept: application/xml`)

## API Features

### Flights API

🗓️ FIDS & Schedules *(the list of current, future, and historical flights operating in a specific airport)*

🗓️ Flight Status (single day) *(current, future, and historical data about a specific flight operating on a specific or nearest date, found by flight number, ATC call-sign, aircraft registration, or 24-bit ICAO Mode-S address)*

🗓️ Flight History & Schedule (range of dates) *(the list of current, future, and historical flights operating within a specific range of dates, found by flight number, ATC call-sign, aircraft registration, or 24-bit ICAO Mode-S address)*

🗓️ Flight Departure / Arrival Dates *(dates when a flight operates, found by flight number, ATC call sign, aircraft registration, or 24-bit ICAO Mode-S address)*

🗓️ Search Flight Numbers By Term *(lookup available flight numbers by term - useful for implmenting auto-complete features)*

### Flight Alert API
🔔 *PUSH API powered by webhooks.  If you are running your own web service, you can subscribe to flights by number or airport code. After that, your HTTP endpoint will be called whenever the flight information gets updated.*

### Aircraft API

✈️ Get aircraft *(aircraft information by aircraft tail number / registration or 24-bit ICAO Mode-S address)*

✈️ Aircraft Registrations *(history of current and all previous registrations of an aircraft found by aircraft tail number / registration or 24-bit ICAO Mode-S address)*

✈️ Airline Fleet [BETA] *- list of active aircraft of an airline*

✈️ Aircraft Photo [BETA] - *aircraft image by tail number (registration)*

✈️ Identify an Aircraft by a Photo [BETA] - *aircraft information found by uploading an aircraft photo containing a visible tail number (registration)*

✈️ Search Aircraft Tail Numbers By Term *(lookup active aircraft tail numbers by term - useful for implmenting auto-complete features)*

### Airport API

🌎 Get Airport *(airport information retrieved by IATA or ICAO codes, incl. name, location, administrative information, elevation, etc.)*

🌎 Airport Runways *(Information about airport runways: threshold, dimensions, lighting, surface, number, heading, etc. by IATA or ICAO code)*

🌎 Search of Closest Airports by Location *(find airports closest to specified location)*

🌎 Search of Closest Airports by IP Geolocation *(geo-locate specified IP address and find airports closest to this location)*

🌎 Airports Free-text Search *(look up an airport by free text, useful for implementing auto-complete functionality)*

### Industry API

🏭 FAA LADD Aircraft Status.
*Easy access to the status of the aircraft in the Limiting Aircraft Displayed program of the Federal Aviation Administration of the U.S. Department of Transportation (FAA LADD)*

### Statistical API

📊 Airport & Global Worldwide delays.
*How many flights are delayed or canceled right now or in the past? Delay statistics and delay index at an airport now and back then.*

📊 Airport Daily Routes Statistics.
*Where flights are going from this airport and how many flights a day occur in these directions?*
    
📊 Flight Delay Statistics.
*How often is the flight delayed and how much? Detailed statistics grouped by hours and airport of departure/arrival, delay brackets and percentiles*

### Miscellaneous API

🕝 Local Time at the Airport
*Get local time by specifying just an IATA or ICAO code of the airport*

🌅 Solar and Day Time at the Airport.
*Calculation of sunset, sunrise, civil, nautical and astronomical dusk / dawn times, golden and blue hours, sun elevation and azimuth.*

🌎 Distance between airports.
*Calculate the great-circle distance between airports*

⏱️ Flight Time between Airports.
*Calculate theoretical and realistic (🤖 machine-learning baand hsed) flight time between specified airports*

🌨️Weather / Forecast at the Airport.
*Current weather and forecast for up to 48 hours, METARs, TAFs*

🌎 List of all countries

### Other Reads
* 🤖 [Machine Learning-Based Realistic Flight Time Calculation](https://aerodatabox.com/ml-flight-time/)
* [Airport Delays](https://aerodatabox.com/api-airport-delays/)
* [Runway detection](https://aerodatabox.com/flight-take-off-and-landing-time-runway-detection-based-on-ads-b-data-more-flights-and-status-updates/)
* [FAA LADD](https://aerodatabox.com/faa-ladd)

## Is it good for my case?

AeroDataBox is a niche enthusiast-driven aviation and flights API with [certain limitations](https://aerodatabox.com/data-coverage) that we openly communicate. We do our best to under-promise and over-deliver. But is an enthusiast-driven API good for your case anyway? That depends!

If you’re developing a small or medium business (SMB / SME) or an application developer who does not require a tough service-level agreement (SLA) or an exhaustive worldwide coverage, our API is just right for you! However, at this point we discourage (and even [do not allow](https://aerodatabox.com/terms) in some cases) using our API for mission-critical or enterprise-level products where people may be hurt or severe damage can occur if the API fails for any reason.

Having said that, we’re are working hard to improve this. We expect to implement SLAs and direct access to our API and other data services with extra stability and high availability under special premium terms soon. Read more in our [FAQ](https://aerodatabox.com/faq).

If you need it earlier or should you have special needs, please do [contact us](https://aerodatabox.com/contact) and tell us your story! We already have a record of implementing custom solutions tailored for needs of our customers.

## Support

For direct contact, please reach out to us via e-mail at info@aerodatabox.com.

Before sending a message, please take some time to review the documentation and must-read website pages (at least data coverage and FAQ). These pages address roughly 80% of the questions we receive on day-to-day basis.

## API Availability
Last 7 days

![](https://app.statuscake.com/button/index.php?Track=1iySKWJj1E&amp;Days=7&amp;Design=2)

Last 30 days

![](https://app.statuscake.com/button/index.php?Track=1iySKWJj1E&amp;Days=30&amp;Design=2)

[Uptime Status](https://status.aerodatabox.com)

## Endpoint Labes
🤖 - endpoint uses or may use AI/ML algorithms

`[TIER 1]..[TIER 4]` - the tier level of the endpoint, where TIER 4 is the highest and TIER 1 is the lowest. The tier level is used to determine the pricing of the endpoint. Depending on the marketplace, different pricing models may be used, but you can expect that higher tier endpoints will be more expensive than lower tier endpoints.

`[FREE TIER]` - the endpoint is available for free on all marketplaces.

Pricing details can be found on the [pricing page](https://aerodatabox.com/pricing).


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: X-RapidAPI-Host
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Host', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Host', 'Bearer');

// Configure API key authorization: X-RapidAPI-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AircraftAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_by = 'search_by_example'; // \OpenAPIClientModelAircraftSearchByEnum | Criteria to search aircraft by
$search_param = 'search_param_example'; // string | Value of the search criteria. If `searchBy` is:   * `id`: then this field should be an ID of an aircraft (as specified in the database of this API);  * `reg`: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * `icao24`, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned.
$with_image = false; // bool | Should include aircraft image (default: false).
$with_registrations = false; // bool | Should include the history of aircraft registrations (default: false).

try {
    $result = $apiInstance->getAircraft($search_by, $search_param, $with_image, $with_registrations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AircraftAPIApi->getAircraft: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://aerodatabox.p.rapidapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AircraftAPIApi* | [**getAircraft**](docs/Api/AircraftAPIApi.md#getaircraft) | **GET** /aircrafts/{searchBy}/{searchParam} | Single aircraft (by tail-number, Mode-S or ID) [TIER 1]
*AircraftAPIApi* | [**getAircraftImageByRegistration**](docs/Api/AircraftAPIApi.md#getaircraftimagebyregistration) | **GET** /aircrafts/reg/{reg}/image/beta | Aircraft image by tail-number (BETA) [TIER 2]
*AircraftAPIApi* | [**getAircraftRegistrations**](docs/Api/AircraftAPIApi.md#getaircraftregistrations) | **GET** /aircrafts/{searchBy}/{searchParam}/registrations | Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]
*AircraftAPIApi* | [**getAirlineFleet**](docs/Api/AircraftAPIApi.md#getairlinefleet) | **GET** /airlines/{airlineCode}/aircrafts | Airline fleet / Aircraft list by airline code (BETA) [TIER 3]
*AircraftAPIApi* | [**getAllAircraft**](docs/Api/AircraftAPIApi.md#getallaircraft) | **GET** /aircrafts/{searchBy}/{searchParam}/all | Aircraft by tail-number, Mode-S or ID [TIER 1]
*AircraftAPIApi* | [**recognizeAircraft**](docs/Api/AircraftAPIApi.md#recognizeaircraft) | **POST** /aircrafts/recognize/beta | Aicraft image recognition (BETA) [TIER 3]
*AircraftAPIApi* | [**searchAircraftByTerm**](docs/Api/AircraftAPIApi.md#searchaircraftbyterm) | **GET** /aircrafts/search/term | Search active aircraft tail numbers by term [TIER 2]
*AirportAPIApi* | [**getAirport**](docs/Api/AirportAPIApi.md#getairport) | **GET** /airports/{codeType}/{code} | Airport by code [TIER 1]
*AirportAPIApi* | [**getAirportRunways**](docs/Api/AirportAPIApi.md#getairportrunways) | **GET** /airports/{codeType}/{code}/runways | Airport runways [TIER 1]
*AirportAPIApi* | [**searchAirportByTerm**](docs/Api/AirportAPIApi.md#searchairportbyterm) | **GET** /airports/search/term | Search airports by free text [TIER 2]
*AirportAPIApi* | [**searchAirportsByIpGeoLocation**](docs/Api/AirportAPIApi.md#searchairportsbyipgeolocation) | **GET** /airports/search/ip | Search airports by IP address geolocation [TIER 2]
*AirportAPIApi* | [**searchAirportsByLocation**](docs/Api/AirportAPIApi.md#searchairportsbylocation) | **GET** /airports/search/location | Search airports by location [TIER 2]
*FlightAPIApi* | [**getAirportFlights**](docs/Api/FlightAPIApi.md#getairportflights) | **GET** /flights/airports/{codeType}/{code}/{fromLocal}/{toLocal} | FIDS (airport departures and arrivals) - by local time range [TIER 2]
*FlightAPIApi* | [**getAirportFlightsRelative**](docs/Api/FlightAPIApi.md#getairportflightsrelative) | **GET** /flights/airports/{codeType}/{code} | FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]
*FlightAPIApi* | [**getFlightDatesFlightDatesAll**](docs/Api/FlightAPIApi.md#getflightdatesflightdatesall) | **GET** /flights/{searchBy}/{searchParam}/dates | Flight departure dates [TIER 2]
*FlightAPIApi* | [**getFlightDatesFlightDatesInRange**](docs/Api/FlightAPIApi.md#getflightdatesflightdatesinrange) | **GET** /flights/{searchBy}/{searchParam}/dates/{fromLocal}/{toLocal} | Flight departure dates [TIER 2]
*FlightAPIApi* | [**getFlightFlightNearest**](docs/Api/FlightAPIApi.md#getflightflightnearest) | **GET** /flights/{searchBy}/{searchParam} | Flight Status (single day) [TIER 2]
*FlightAPIApi* | [**getFlightFlightOnSpecificDate**](docs/Api/FlightAPIApi.md#getflightflightonspecificdate) | **GET** /flights/{searchBy}/{searchParam}/{dateLocal} | Flight Status (single day) [TIER 2]
*FlightAPIApi* | [**getFlightHistoryFlightHistory**](docs/Api/FlightAPIApi.md#getflighthistoryflighthistory) | **GET** /flights/{searchBy}/{searchParam}/{dateFromLocal}/{dateToLocal} | Flight History and Schedule (range of days) [TIER 3]
*FlightAPIApi* | [**searchFlightsByTerm**](docs/Api/FlightAPIApi.md#searchflightsbyterm) | **GET** /flights/search/term | Search flight numbers by term [TIER 2]
*FlightAlertAPIApi* | [**getWebhook**](docs/Api/FlightAlertAPIApi.md#getwebhook) | **GET** /subscriptions/webhook/{subscriptionId} | Get web-hook subscription [FREE TIER]
*FlightAlertAPIApi* | [**getWebhookList**](docs/Api/FlightAlertAPIApi.md#getwebhooklist) | **GET** /subscriptions/webhook | List web-hook subscriptions [FREE TIER]
*FlightAlertAPIApi* | [**refreshWebhook**](docs/Api/FlightAlertAPIApi.md#refreshwebhook) | **PATCH** /subscriptions/webhook/{subscriptionId}/refresh | Refresh web-hook subscription [TIER 4]
*FlightAlertAPIApi* | [**subscribeWebhook**](docs/Api/FlightAlertAPIApi.md#subscribewebhook) | **POST** /subscriptions/webhook/{subjectType}/{subjectId} | Create web-hook subscription [TIER 4]
*FlightAlertAPIApi* | [**unsubscribeWebhook**](docs/Api/FlightAlertAPIApi.md#unsubscribewebhook) | **DELETE** /subscriptions/webhook/{subscriptionId} | Remove web-hook subscription [FREE TIER]
*HealthcheckAPIApi* | [**getAirportFeedStatus**](docs/Api/HealthcheckAPIApi.md#getairportfeedstatus) | **GET** /health/services/airports/{icao}/feeds | Data feed services status by ICAO code [FREE TIER]
*HealthcheckAPIApi* | [**getFeedAirports**](docs/Api/HealthcheckAPIApi.md#getfeedairports) | **GET** /health/services/feeds/{service}/airports | Airports supporting data feed service [FREE TIER]
*HealthcheckAPIApi* | [**getFeedServiceStatus**](docs/Api/HealthcheckAPIApi.md#getfeedservicestatus) | **GET** /health/services/feeds/{service} | General status of data feed services [FREE TIER]
*IndustryAPIApi* | [**getFaaLaddAircraftStatus**](docs/Api/IndustryAPIApi.md#getfaaladdaircraftstatus) | **GET** /industry/faa-ladd/{id}/status | FAA LADD Aircraft Status [TIER 3]
*MiscellaneousAPIApi* | [**getAirportDistanceTime**](docs/Api/MiscellaneousAPIApi.md#getairportdistancetime) | **GET** /airports/{codeType}/{codeFrom}/distance-time/{codeTo} | 🤖 Distance and flight time between airports [TIER 2]
*MiscellaneousAPIApi* | [**getAirportLocalTime**](docs/Api/MiscellaneousAPIApi.md#getairportlocaltime) | **GET** /airports/{codeType}/{code}/time/local | Current local time at the airport [TIER 1]
*MiscellaneousAPIApi* | [**getAirportSolarTimeSolarTimeCurrent**](docs/Api/MiscellaneousAPIApi.md#getairportsolartimesolartimecurrent) | **GET** /airports/{codeType}/{code}/time/solar | Solar and day time at the airport [TIER 1]
*MiscellaneousAPIApi* | [**getAirportSolarTimeSolarTimeSpecificDate**](docs/Api/MiscellaneousAPIApi.md#getairportsolartimesolartimespecificdate) | **GET** /airports/{codeType}/{code}/time/solar/{dateLocal} | Solar and day time at the airport [TIER 1]
*MiscellaneousAPIApi* | [**getAirportWeatherWeatherCurrent**](docs/Api/MiscellaneousAPIApi.md#getairportweatherweathercurrent) | **GET** /airports/{codeType}/{code}/weather | Weather / forecast at the airport [TIER 2]
*MiscellaneousAPIApi* | [**getAirportWeatherWeatherForTimeRange**](docs/Api/MiscellaneousAPIApi.md#getairportweatherweatherfortimerange) | **GET** /airports/{codeType}/{code}/weather/{fromLocal}/{toLocal} | Weather / forecast at the airport [TIER 2]
*MiscellaneousAPIApi* | [**getCountries**](docs/Api/MiscellaneousAPIApi.md#getcountries) | **GET** /countries | Get all countries [TIER 1]
*StatisticalAPIApi* | [**getAirportDelayDelaysCurrent**](docs/Api/StatisticalAPIApi.md#getairportdelaydelayscurrent) | **GET** /airports/{codeType}/{code}/delays | Airport delays (current or historical moment) [TIER 3]
*StatisticalAPIApi* | [**getAirportDelayDelaysHistorical**](docs/Api/StatisticalAPIApi.md#getairportdelaydelayshistorical) | **GET** /airports/{codeType}/{code}/delays/{dateLocal} | Airport delays (current or historical moment) [TIER 3]
*StatisticalAPIApi* | [**getAirportDelays**](docs/Api/StatisticalAPIApi.md#getairportdelays) | **GET** /airports/{codeType}/{code}/delays/{dateFromLocal}/{dateToLocal} | Airport delays (historical period) [TIER 3]
*StatisticalAPIApi* | [**getFlightDelays**](docs/Api/StatisticalAPIApi.md#getflightdelays) | **GET** /flights/{number}/delays | Flight delay statistics by flight number [TIER 3]
*StatisticalAPIApi* | [**getGlobalDelaysGlobalDelaysAtSpecificDate**](docs/Api/StatisticalAPIApi.md#getglobaldelaysglobaldelaysatspecificdate) | **GET** /airports/delays/{dateUtc} | Global delays (current or historical moment) [TIER 3]
*StatisticalAPIApi* | [**getGlobalDelaysGlobalDelaysCurent**](docs/Api/StatisticalAPIApi.md#getglobaldelaysglobaldelayscurent) | **GET** /airports/delays | Global delays (current or historical moment) [TIER 3]
*StatisticalAPIApi* | [**getRouteDailyStatisticsRoutesDailAtSpecificDate**](docs/Api/StatisticalAPIApi.md#getroutedailystatisticsroutesdailatspecificdate) | **GET** /airports/{codeType}/{code}/stats/routes/daily/{dateLocal} | Airport routes and daily flight destinations [TIER 3]
*StatisticalAPIApi* | [**getRouteDailyStatisticsRoutesDailyCurrent**](docs/Api/StatisticalAPIApi.md#getroutedailystatisticsroutesdailycurrent) | **GET** /airports/{codeType}/{code}/stats/routes/daily | Airport routes and daily flight destinations [TIER 3]

## Models

- [AircraftContract](docs/Model/AircraftContract.md)
- [AircraftContractPagedCollectionContract](docs/Model/AircraftContractPagedCollectionContract.md)
- [AircraftRecognitionResultContract](docs/Model/AircraftRecognitionResultContract.md)
- [AircraftRegistrationContract](docs/Model/AircraftRegistrationContract.md)
- [AircraftSearchByEnum](docs/Model/AircraftSearchByEnum.md)
- [AirportCodesByEnum](docs/Model/AirportCodesByEnum.md)
- [AirportContract](docs/Model/AirportContract.md)
- [AirportDelayContract](docs/Model/AirportDelayContract.md)
- [AirportDistanceTimeContract](docs/Model/AirportDistanceTimeContract.md)
- [AirportFeedServiceStatusContract](docs/Model/AirportFeedServiceStatusContract.md)
- [AirportFidsContract](docs/Model/AirportFidsContract.md)
- [AirportFlightContract](docs/Model/AirportFlightContract.md)
- [AirportLocalTimeContract](docs/Model/AirportLocalTimeContract.md)
- [AirportUrlsContract](docs/Model/AirportUrlsContract.md)
- [Angle](docs/Model/Angle.md)
- [Azimuth](docs/Model/Azimuth.md)
- [CloudCover](docs/Model/CloudCover.md)
- [CodeshareStatus](docs/Model/CodeshareStatus.md)
- [ContinentContract](docs/Model/ContinentContract.md)
- [CountryContract](docs/Model/CountryContract.md)
- [CreateWebHookSubscription](docs/Model/CreateWebHookSubscription.md)
- [DailyRouteStatContract](docs/Model/DailyRouteStatContract.md)
- [DailyRouteStatRecordContract](docs/Model/DailyRouteStatRecordContract.md)
- [DateTimeContract](docs/Model/DateTimeContract.md)
- [DayTime](docs/Model/DayTime.md)
- [DelayBracketContract](docs/Model/DelayBracketContract.md)
- [Distance](docs/Model/Distance.md)
- [EngineType](docs/Model/EngineType.md)
- [ErrorContract](docs/Model/ErrorContract.md)
- [FaaLaddAircraftStatusContract](docs/Model/FaaLaddAircraftStatusContract.md)
- [FeedServiceEnum](docs/Model/FeedServiceEnum.md)
- [FeedServiceStatus](docs/Model/FeedServiceStatus.md)
- [FeedServiceStatusContract](docs/Model/FeedServiceStatusContract.md)
- [FlightAircraftContract](docs/Model/FlightAircraftContract.md)
- [FlightAirlineContract](docs/Model/FlightAirlineContract.md)
- [FlightAirportMovementContract](docs/Model/FlightAirportMovementContract.md)
- [FlightAirportMovementQualityEnum](docs/Model/FlightAirportMovementQualityEnum.md)
- [FlightBatchDelayContract](docs/Model/FlightBatchDelayContract.md)
- [FlightContract](docs/Model/FlightContract.md)
- [FlightDataGeneralAvailabilityContract](docs/Model/FlightDataGeneralAvailabilityContract.md)
- [FlightDelayContract](docs/Model/FlightDelayContract.md)
- [FlightDirection](docs/Model/FlightDirection.md)
- [FlightLegDelayContract](docs/Model/FlightLegDelayContract.md)
- [FlightLocationContract](docs/Model/FlightLocationContract.md)
- [FlightNotificationContract](docs/Model/FlightNotificationContract.md)
- [FlightNotificationItemContract](docs/Model/FlightNotificationItemContract.md)
- [FlightSearchByEnum](docs/Model/FlightSearchByEnum.md)
- [FlightSearchItemContract](docs/Model/FlightSearchItemContract.md)
- [FlightStatus](docs/Model/FlightStatus.md)
- [GeoCoordinatesContract](docs/Model/GeoCoordinatesContract.md)
- [GeoCoordinatesContractListingAirportContractSearchResultCollectionContract](docs/Model/GeoCoordinatesContractListingAirportContractSearchResultCollectionContract.md)
- [LicenseType](docs/Model/LicenseType.md)
- [ListingAirportContract](docs/Model/ListingAirportContract.md)
- [ModelFlightTimeEnum](docs/Model/ModelFlightTimeEnum.md)
- [PercentileBracketContract](docs/Model/PercentileBracketContract.md)
- [PhenomenaGroup](docs/Model/PhenomenaGroup.md)
- [Pressure](docs/Model/Pressure.md)
- [ResourceContract](docs/Model/ResourceContract.md)
- [RunwayContract](docs/Model/RunwayContract.md)
- [SolarStateContract](docs/Model/SolarStateContract.md)
- [Speed](docs/Model/Speed.md)
- [StatisticClass](docs/Model/StatisticClass.md)
- [StringAircraftContractSearchResultCollectionContract](docs/Model/StringAircraftContractSearchResultCollectionContract.md)
- [StringCollectionContract](docs/Model/StringCollectionContract.md)
- [StringFlightSearchItemContractSearchResultCollectionContract](docs/Model/StringFlightSearchItemContractSearchResultCollectionContract.md)
- [StringListingAirportContractSearchResultCollectionContract](docs/Model/StringListingAirportContractSearchResultCollectionContract.md)
- [SubscriberContract](docs/Model/SubscriberContract.md)
- [SubscriptionContract](docs/Model/SubscriptionContract.md)
- [SubscriptionSubjectContract](docs/Model/SubscriptionSubjectContract.md)
- [SubscriptionSubjectType](docs/Model/SubscriptionSubjectType.md)
- [SurfaceType](docs/Model/SurfaceType.md)
- [Temperature](docs/Model/Temperature.md)
- [WeatherStateContract](docs/Model/WeatherStateContract.md)
- [WindContract](docs/Model/WindContract.md)

## Authorization

Authentication schemes defined for the API:
### X-RapidAPI-Key

- **Type**: API key
- **API key parameter name**: X-RapidAPI-Key
- **Location**: HTTP header


### X-RapidAPI-Host

- **Type**: API key
- **API key parameter name**: X-RapidAPI-Host
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@aerodatabox.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.9.0.0`
    - Generator version: `7.14.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
