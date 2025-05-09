<?php
/**
 * FlightAPIApi
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AeroDataBox API
 *
 * **AeroDataBox API** is an enthusiast-driven cost-effective aviation and flight data API tailored for small and medium businesses, individual developers, researchers, and students. It offers a wide range of data, including flight status, schedules, aircraft information, airport details, statistics, historical data, and more. Designed for seamless integration using REST and web hooks and available through major API marketplaces, it enables users to incorporate aviation information effortlessly into their systems at affordable rates.  ## Sign Up Access AeroDataBox API for a price of a cup of coffee!  Sign up through one of the supported API marketplaces, each offering various pricing models to suit your specific needs. - **[RapidAPI](https://rapid.aerodatabox.com/) - most tried & tested** - **[API.Market](https://apimarket.aerodatabox.com/) - free plan available** - **[Sulu Hub](https://sulu.aerodatabox.com/) - pay-per-use, no subscription, crypto accepted**  Pricing details for each marketplace can be found on the [pricing page](https://aerodatabox.com/pricing).  ## Follow Updates  Our API constantly evolves! Visit our [web-site](https://aerodatabox.com) and join our newsletter to stay in the loop.  Recent updates can be found on the [News & Updates](https://aerodatabox.com/news) page  ## Must-Reads * **⚠️ [Terms of Use](https://aerodatabox.com/terms) &lt;- BY SUBSCRIBING TO THE API YOU AUTOMATICALLY ACCEPT THESE TERMS** * **⚠️ [Pricing](https://aerodatabox.com/pricing)  &lt;- CALLS ARE NOT PRICED EQUALLY** * **⚠️ [Data Coverage](https://aerodatabox.com/data-coverage) &lt;- BE AWARE OF OUR LIMITATIONS** * [Documentation & OpenAPI Specification](https://doc.aerodatabox.com/ ) * [FAQ](https://aerodatabox.com/faq) * [For Students & Researchers](https://aerodatabox.com/students)  ## API Supported Response Formats * JSON (default, `Accept: application/json`) * XML (`Accept: application/xml`)  ## API Features  ### Flights API  🗓️ FIDS & Schedules *(the list of current, future, and historical flights operating in a specific airport)*  🗓️ Flight Status (single day) *(current, future, and historical data about a specific flight operating on a specific or nearest date, found by flight number, ATC call-sign, aircraft registration, or 24-bit ICAO Mode-S address)*  🗓️ Flight History & Schedule (range of dates) *(the list of current, future, and historical flights operating within a specific range of dates, found by flight number, ATC call-sign, aircraft registration, or 24-bit ICAO Mode-S address)*  🗓️ Flight Departure / Arrival Dates *(dates when a flight operates, found by flight number, ATC call sign, aircraft registration, or 24-bit ICAO Mode-S address)*  🗓️ Search Flight Numbers By Term *(lookup available flight numbers by term - useful for implmenting auto-complete features)*  ### Flight Alert API 🔔 *PUSH API powered by webhooks.  If you are running your own web service, you can subscribe to flights by number or airport code. After that, your HTTP endpoint will be called whenever the flight information gets updated.*  ### Aircraft API  ✈️ Get aircraft *(aircraft information by aircraft tail number / registration or 24-bit ICAO Mode-S address)*  ✈️ Aircraft Registrations *(history of current and all previous registrations of an aircraft found by aircraft tail number / registration or 24-bit ICAO Mode-S address)*  ✈️ Airline Fleet [BETA] *- list of active aircraft of an airline*  ✈️ Aircraft Photo [BETA] - *aircraft image by tail number (registration)*  ✈️ Identify an Aircraft by a Photo [BETA] - *aircraft information found by uploading an aircraft photo containing a visible tail number (registration)*  ✈️ Search Aircraft Tail Numbers By Term *(lookup active aircraft tail numbers by term - useful for implmenting auto-complete features)*  ### Airport API  🌎 Get Airport *(airport information retrieved by IATA or ICAO codes, incl. name, location, administrative information, elevation, etc.)*  🌎 Airport Runways *(Information about airport runways: threshold, dimensions, lighting, surface, number, heading, etc. by IATA or ICAO code)*  🌎 Search of Closest Airports by Location *(find airports closest to specified location)*  🌎 Search of Closest Airports by IP Geolocation *(geo-locate specified IP address and find airports closest to this location)*  🌎 Airports Free-text Search *(look up an airport by free text, useful for implementing auto-complete functionality)*  ### Industry API  🏭 FAA LADD Aircraft Status. *Easy access to the status of the aircraft in the Limiting Aircraft Displayed program of the Federal Aviation Administration of the U.S. Department of Transportation (FAA LADD)*  ### Statistical API  📊 Airport & Global Worldwide delays. *How many flights are delayed or canceled right now or in the past? Delay statistics and delay index at an airport now and back then.*  📊 Airport Daily Routes Statistics. *Where flights are going from this airport and how many flights a day occur in these directions?*      📊 Flight Delay Statistics. *How often is the flight delayed and how much? Detailed statistics grouped by hours and airport of departure/arrival, delay brackets and percentiles*  ### Miscellaneous API  🕝 Local Time at the Airport *Get local time by specifying just an IATA or ICAO code of the airport*  🌅 Solar and Day Time at the Airport. *Calculation of sunset, sunrise, civil, nautical and astronomical dusk / dawn times, golden and blue hours, sun elevation and azimuth.*  🌎 Distance between airports. *Calculate the great-circle distance between airports*  ⏱️ Flight Time between Airports. *Calculate theoretical and realistic (🤖 machine-learning baand hsed) flight time between specified airports*  🌨️Weather / Forecast at the Airport. *Current weather and forecast for up to 48 hours, METARs, TAFs*  🌎 List of all countries  ### Other Reads * 🤖 [Machine Learning-Based Realistic Flight Time Calculation](https://aerodatabox.com/ml-flight-time/) * [Airport Delays](https://aerodatabox.com/api-airport-delays/) * [Runway detection](https://aerodatabox.com/flight-take-off-and-landing-time-runway-detection-based-on-ads-b-data-more-flights-and-status-updates/) * [FAA LADD](https://aerodatabox.com/faa-ladd)  ## Is it good for my case?  AeroDataBox is a niche enthusiast-driven aviation and flights API with [certain limitations](https://aerodatabox.com/data-coverage) that we openly communicate. We do our best to under-promise and over-deliver. But is an enthusiast-driven API good for your case anyway? That depends!  If you’re developing a small or medium business (SMB / SME) or an application developer who does not require a tough service-level agreement (SLA) or an exhaustive worldwide coverage, our API is just right for you! However, at this point we discourage (and even [do not allow](https://aerodatabox.com/terms) in some cases) using our API for mission-critical or enterprise-level products where people may be hurt or severe damage can occur if the API fails for any reason.  Having said that, we’re are working hard to improve this. We expect to implement SLAs and direct access to our API and other data services with extra stability and high availability under special premium terms soon. Read more in our [FAQ](https://aerodatabox.com/faq).  If you need it earlier or should you have special needs, please do [contact us](https://aerodatabox.com/contact) and tell us your story! We already have a record of implementing custom solutions tailored for needs of our customers.  ## Support  For direct contact, please reach out to us via e-mail at info@aerodatabox.com.  Before sending a message, please take some time to review the documentation and must-read website pages (at least data coverage and FAQ). These pages address roughly 80% of the questions we receive on day-to-day basis.  ## API Availability Last 7 days  ![](https://app.statuscake.com/button/index.php?Track=1iySKWJj1E&amp;Days=7&amp;Design=2)  Last 30 days  ![](https://app.statuscake.com/button/index.php?Track=1iySKWJj1E&amp;Days=30&amp;Design=2)  [Uptime Status](https://status.aerodatabox.com)  ## Endpoint Labes 🤖 - endpoint uses or may use AI/ML algorithms  `[TIER 1]..[TIER 4]` - the tier level of the endpoint, where TIER 4 is the highest and TIER 1 is the lowest. The tier level is used to determine the pricing of the endpoint. Depending on the marketplace, different pricing models may be used, but you can expect that higher tier endpoints will be more expensive than lower tier endpoints.  `[FREE TIER]` - the endpoint is available for free on all marketplaces.  Pricing details can be found on the [pricing page](https://aerodatabox.com/pricing).
 *
 * The version of the OpenAPI document: 1.9.0.0
 * Contact: info@aerodatabox.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\FormDataProcessor;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * FlightAPIApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FlightAPIApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getAirportFlights' => [
            'application/json',
        ],
        'getAirportFlightsRelative' => [
            'application/json',
        ],
        'getFlightDatesFlightDatesAll' => [
            'application/json',
        ],
        'getFlightDatesFlightDatesInRange' => [
            'application/json',
        ],
        'getFlightFlightNearest' => [
            'application/json',
        ],
        'getFlightFlightOnSpecificDate' => [
            'application/json',
        ],
        'getFlightHistoryFlightHistory' => [
            'application/json',
        ],
        'searchFlightsByTerm' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAirportFlights
     *
     * FIDS (airport departures and arrivals) - by local time range [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlights'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportFidsContract
     */
    public function getAirportFlights($code_type, $code, $from_local, $to_local, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlights'][0])
    {
        list($response) = $this->getAirportFlightsWithHttpInfo($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);
        return $response;
    }

    /**
     * Operation getAirportFlightsWithHttpInfo
     *
     * FIDS (airport departures and arrivals) - by local time range [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlights'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportFidsContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportFlightsWithHttpInfo($code_type, $code, $from_local, $to_local, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlights'][0])
    {
        $request = $this->getAirportFlightsRequest($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\AirportFidsContract',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\AirportFidsContract',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\AirportFidsContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportFlightsAsync
     *
     * FIDS (airport departures and arrivals) - by local time range [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlights'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportFlightsAsync($code_type, $code, $from_local, $to_local, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlights'][0])
    {
        return $this->getAirportFlightsAsyncWithHttpInfo($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportFlightsAsyncWithHttpInfo
     *
     * FIDS (airport departures and arrivals) - by local time range [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlights'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportFlightsAsyncWithHttpInfo($code_type, $code, $from_local, $to_local, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlights'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportFidsContract';
        $request = $this->getAirportFlightsRequest($code_type, $code, $from_local, $to_local, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAirportFlights'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm). Must be more than beginning of the search range by no more than 12 hours. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlights'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportFlightsRequest($code_type, $code, $from_local, $to_local, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlights'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportFlights'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling FlightAPIApi.getAirportFlights, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportFlights'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling FlightAPIApi.getAirportFlights, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling FlightAPIApi.getAirportFlights, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'from_local' is set
        if ($from_local === null || (is_array($from_local) && count($from_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_local when calling getAirportFlights'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $from_local)) {
            throw new \InvalidArgumentException("invalid value for \"from_local\" when calling FlightAPIApi.getAirportFlights, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        
        // verify the required parameter 'to_local' is set
        if ($to_local === null || (is_array($to_local) && count($to_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_local when calling getAirportFlights'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $to_local)) {
            throw new \InvalidArgumentException("invalid value for \"to_local\" when calling FlightAPIApi.getAirportFlights, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        








        $resourcePath = '/flights/airports/{codeType}/{code}/{fromLocal}/{toLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $direction,
            'direction', // param base name
            'FlightDirection', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_leg,
            'withLeg', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_cancelled,
            'withCancelled', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_codeshared,
            'withCodeshared', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_cargo,
            'withCargo', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_private,
            'withPrivate', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_location,
            'withLocation', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($code_type !== null) {
            $resourcePath = str_replace(
                '{' . 'codeType' . '}',
                ObjectSerializer::toPathValue($code_type),
                $resourcePath
            );
        }
        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }
        // path params
        if ($from_local !== null) {
            $resourcePath = str_replace(
                '{' . 'fromLocal' . '}',
                ObjectSerializer::toPathValue($from_local),
                $resourcePath
            );
        }
        // path params
        if ($to_local !== null) {
            $resourcePath = str_replace(
                '{' . 'toLocal' . '}',
                ObjectSerializer::toPathValue($to_local),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAirportFlightsRelative
     *
     * FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  int|null $offset_minutes Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) (optional, default to -120)
     * @param  int|null $duration_minutes Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) (optional, default to 720)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlightsRelative'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportFidsContract
     */
    public function getAirportFlightsRelative($code_type, $code, $offset_minutes = -120, $duration_minutes = 720, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlightsRelative'][0])
    {
        list($response) = $this->getAirportFlightsRelativeWithHttpInfo($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);
        return $response;
    }

    /**
     * Operation getAirportFlightsRelativeWithHttpInfo
     *
     * FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  int|null $offset_minutes Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) (optional, default to -120)
     * @param  int|null $duration_minutes Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) (optional, default to 720)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlightsRelative'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportFidsContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportFlightsRelativeWithHttpInfo($code_type, $code, $offset_minutes = -120, $duration_minutes = 720, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlightsRelative'][0])
    {
        $request = $this->getAirportFlightsRelativeRequest($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\AirportFidsContract',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\AirportFidsContract',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\AirportFidsContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportFlightsRelativeAsync
     *
     * FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  int|null $offset_minutes Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) (optional, default to -120)
     * @param  int|null $duration_minutes Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) (optional, default to 720)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlightsRelative'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportFlightsRelativeAsync($code_type, $code, $offset_minutes = -120, $duration_minutes = 720, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlightsRelative'][0])
    {
        return $this->getAirportFlightsRelativeAsyncWithHttpInfo($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportFlightsRelativeAsyncWithHttpInfo
     *
     * FIDS (airport departures and arrivals) - by relative time / by current time [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  int|null $offset_minutes Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) (optional, default to -120)
     * @param  int|null $duration_minutes Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) (optional, default to 720)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlightsRelative'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportFlightsRelativeAsyncWithHttpInfo($code_type, $code, $offset_minutes = -120, $duration_minutes = 720, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlightsRelative'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportFidsContract';
        $request = $this->getAirportFlightsRelativeRequest($code_type, $code, $offset_minutes, $duration_minutes, $direction, $with_leg, $with_cancelled, $with_codeshared, $with_cargo, $with_private, $with_location, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAirportFlightsRelative'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  int|null $offset_minutes Beginning of the search range expressed in minutes relative to the current time at the airport (default: &#x60;-120&#x60;) (optional, default to -120)
     * @param  int|null $duration_minutes Length (duration) of the search range expressed in minutes (default: &#x60;720&#x60;) (optional, default to 720)
     * @param  \OpenAPIClientModelFlightDirection|null $direction Direction of flights: Arrival, Departure or Both (default) (optional, default to 'Both')
     * @param  bool|null $with_leg If set to true, the result will include movement information from airport opposite in this flight leg (airport of origin for arriving flight or airport of destination for departing flight).  In this case, Movement property will be replaced with Departure and Arrival properties for each flight.  Default: false. (optional, default to false)
     * @param  bool|null $with_cancelled If set to true, result will include cancelled, divered, likely cancelled (CanceledUncertain) flights.  Default: true. (optional, default to true)
     * @param  bool|null $with_codeshared If set to true, the result will include flights with all code-shared statuses.  Otherwise, code-sharing flights will be exclued. For airports, where no information about code-share statuses  of flights are supplied (all flights are CodeshareStatus&#x3D;Unknown), complex filtering will be applied   to determine which flights are likely to be operational (caution: false results are possible). (optional, default to true)
     * @param  bool|null $with_cargo If set to true, the result will include cargo flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_private If set to true, the result will include private flights (subject to availability). (optional, default to true)
     * @param  bool|null $with_location If set to true, each currently active flight within the result will be populated   with its present real-time location, altitude, speed and track (subject to availability). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportFlightsRelative'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportFlightsRelativeRequest($code_type, $code, $offset_minutes = -120, $duration_minutes = 720, $direction = 'Both', $with_leg = false, $with_cancelled = true, $with_codeshared = true, $with_cargo = true, $with_private = true, $with_location = false, string $contentType = self::contentTypes['getAirportFlightsRelative'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportFlightsRelative'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling FlightAPIApi.getAirportFlightsRelative, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportFlightsRelative'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling FlightAPIApi.getAirportFlightsRelative, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling FlightAPIApi.getAirportFlightsRelative, must be bigger than or equal to 3.');
        }
        










        $resourcePath = '/flights/airports/{codeType}/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset_minutes,
            'offsetMinutes', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $duration_minutes,
            'durationMinutes', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $direction,
            'direction', // param base name
            'FlightDirection', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_leg,
            'withLeg', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_cancelled,
            'withCancelled', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_codeshared,
            'withCodeshared', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_cargo,
            'withCargo', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_private,
            'withPrivate', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_location,
            'withLocation', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($code_type !== null) {
            $resourcePath = str_replace(
                '{' . 'codeType' . '}',
                ObjectSerializer::toPathValue($code_type),
                $resourcePath
            );
        }
        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFlightDatesFlightDatesAll
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesAll'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|string[]
     */
    public function getFlightDatesFlightDatesAll($search_by, $search_param, string $contentType = self::contentTypes['getFlightDatesFlightDatesAll'][0])
    {
        list($response) = $this->getFlightDatesFlightDatesAllWithHttpInfo($search_by, $search_param, $contentType);
        return $response;
    }

    /**
     * Operation getFlightDatesFlightDatesAllWithHttpInfo
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesAll'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightDatesFlightDatesAllWithHttpInfo($search_by, $search_param, string $contentType = self::contentTypes['getFlightDatesFlightDatesAll'][0])
    {
        $request = $this->getFlightDatesFlightDatesAllRequest($search_by, $search_param, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        'string[]',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                'string[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightDatesFlightDatesAllAsync
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesAll'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDatesFlightDatesAllAsync($search_by, $search_param, string $contentType = self::contentTypes['getFlightDatesFlightDatesAll'][0])
    {
        return $this->getFlightDatesFlightDatesAllAsyncWithHttpInfo($search_by, $search_param, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightDatesFlightDatesAllAsyncWithHttpInfo
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesAll'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDatesFlightDatesAllAsyncWithHttpInfo($search_by, $search_param, string $contentType = self::contentTypes['getFlightDatesFlightDatesAll'][0])
    {
        $returnType = 'string[]';
        $request = $this->getFlightDatesFlightDatesAllRequest($search_by, $search_param, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFlightDatesFlightDatesAll'
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesAll'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightDatesFlightDatesAllRequest($search_by, $search_param, string $contentType = self::contentTypes['getFlightDatesFlightDatesAll'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getFlightDatesFlightDatesAll'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling FlightAPIApi.getFlightDatesFlightDatesAll, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getFlightDatesFlightDatesAll'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling FlightAPIApi.getFlightDatesFlightDatesAll, must be smaller than or equal to 10.');
        }
        

        $resourcePath = '/flights/{searchBy}/{searchParam}/dates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($search_by !== null) {
            $resourcePath = str_replace(
                '{' . 'searchBy' . '}',
                ObjectSerializer::toPathValue($search_by),
                $resourcePath
            );
        }
        // path params
        if ($search_param !== null) {
            $resourcePath = str_replace(
                '{' . 'searchParam' . '}',
                ObjectSerializer::toPathValue($search_param),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFlightDatesFlightDatesInRange
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesInRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|string[]
     */
    public function getFlightDatesFlightDatesInRange($search_by, $search_param, $from_local, $to_local, string $contentType = self::contentTypes['getFlightDatesFlightDatesInRange'][0])
    {
        list($response) = $this->getFlightDatesFlightDatesInRangeWithHttpInfo($search_by, $search_param, $from_local, $to_local, $contentType);
        return $response;
    }

    /**
     * Operation getFlightDatesFlightDatesInRangeWithHttpInfo
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesInRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightDatesFlightDatesInRangeWithHttpInfo($search_by, $search_param, $from_local, $to_local, string $contentType = self::contentTypes['getFlightDatesFlightDatesInRange'][0])
    {
        $request = $this->getFlightDatesFlightDatesInRangeRequest($search_by, $search_param, $from_local, $to_local, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        'string[]',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                'string[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightDatesFlightDatesInRangeAsync
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesInRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDatesFlightDatesInRangeAsync($search_by, $search_param, $from_local, $to_local, string $contentType = self::contentTypes['getFlightDatesFlightDatesInRange'][0])
    {
        return $this->getFlightDatesFlightDatesInRangeAsyncWithHttpInfo($search_by, $search_param, $from_local, $to_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightDatesFlightDatesInRangeAsyncWithHttpInfo
     *
     * Flight departure dates [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesInRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDatesFlightDatesInRangeAsyncWithHttpInfo($search_by, $search_param, $from_local, $to_local, string $contentType = self::contentTypes['getFlightDatesFlightDatesInRange'][0])
    {
        $returnType = 'string[]';
        $request = $this->getFlightDatesFlightDatesInRangeRequest($search_by, $search_param, $from_local, $to_local, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFlightDatesFlightDatesInRange'
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If **searchBy** is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;: then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DD) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDatesFlightDatesInRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightDatesFlightDatesInRangeRequest($search_by, $search_param, $from_local, $to_local, string $contentType = self::contentTypes['getFlightDatesFlightDatesInRange'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getFlightDatesFlightDatesInRange'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling FlightAPIApi.getFlightDatesFlightDatesInRange, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getFlightDatesFlightDatesInRange'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling FlightAPIApi.getFlightDatesFlightDatesInRange, must be smaller than or equal to 10.');
        }
        
        // verify the required parameter 'from_local' is set
        if ($from_local === null || (is_array($from_local) && count($from_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_local when calling getFlightDatesFlightDatesInRange'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $from_local)) {
            throw new \InvalidArgumentException("invalid value for \"from_local\" when calling FlightAPIApi.getFlightDatesFlightDatesInRange, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        
        // verify the required parameter 'to_local' is set
        if ($to_local === null || (is_array($to_local) && count($to_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_local when calling getFlightDatesFlightDatesInRange'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $to_local)) {
            throw new \InvalidArgumentException("invalid value for \"to_local\" when calling FlightAPIApi.getFlightDatesFlightDatesInRange, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/flights/{searchBy}/{searchParam}/dates/{fromLocal}/{toLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($search_by !== null) {
            $resourcePath = str_replace(
                '{' . 'searchBy' . '}',
                ObjectSerializer::toPathValue($search_by),
                $resourcePath
            );
        }
        // path params
        if ($search_param !== null) {
            $resourcePath = str_replace(
                '{' . 'searchParam' . '}',
                ObjectSerializer::toPathValue($search_param),
                $resourcePath
            );
        }
        // path params
        if ($from_local !== null) {
            $resourcePath = str_replace(
                '{' . 'fromLocal' . '}',
                ObjectSerializer::toPathValue($from_local),
                $resourcePath
            );
        }
        // path params
        if ($to_local !== null) {
            $resourcePath = str_replace(
                '{' . 'toLocal' . '}',
                ObjectSerializer::toPathValue($to_local),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFlightFlightNearest
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightNearest'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[]
     */
    public function getFlightFlightNearest($search_by, $search_param, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightNearest'][0])
    {
        list($response) = $this->getFlightFlightNearestWithHttpInfo($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location, $contentType);
        return $response;
    }

    /**
     * Operation getFlightFlightNearestWithHttpInfo
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightNearest'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightFlightNearestWithHttpInfo($search_by, $search_param, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightNearest'][0])
    {
        $request = $this->getFlightFlightNearestRequest($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\FlightContract[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightFlightNearestAsync
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightNearest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightFlightNearestAsync($search_by, $search_param, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightNearest'][0])
    {
        return $this->getFlightFlightNearestAsyncWithHttpInfo($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightFlightNearestAsyncWithHttpInfo
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightNearest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightFlightNearestAsyncWithHttpInfo($search_by, $search_param, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightNearest'][0])
    {
        $returnType = '\OpenAPI\Client\Model\FlightContract[]';
        $request = $this->getFlightFlightNearestRequest($search_by, $search_param, $date_local_role, $with_aircraft_image, $with_location, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFlightFlightNearest'
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightNearest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightFlightNearestRequest($search_by, $search_param, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightNearest'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getFlightFlightNearest'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling FlightAPIApi.getFlightFlightNearest, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getFlightFlightNearest'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling FlightAPIApi.getFlightFlightNearest, must be smaller than or equal to 10.');
        }
        




        $resourcePath = '/flights/{searchBy}/{searchParam}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_local_role,
            'dateLocalRole', // param base name
            'FlightDirection', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_aircraft_image,
            'withAircraftImage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_location,
            'withLocation', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($search_by !== null) {
            $resourcePath = str_replace(
                '{' . 'searchBy' . '}',
                ObjectSerializer::toPathValue($search_by),
                $resourcePath
            );
        }
        // path params
        if ($search_param !== null) {
            $resourcePath = str_replace(
                '{' . 'searchParam' . '}',
                ObjectSerializer::toPathValue($search_param),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFlightFlightOnSpecificDate
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_local Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightOnSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[]
     */
    public function getFlightFlightOnSpecificDate($search_by, $search_param, $date_local, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightOnSpecificDate'][0])
    {
        list($response) = $this->getFlightFlightOnSpecificDateWithHttpInfo($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location, $contentType);
        return $response;
    }

    /**
     * Operation getFlightFlightOnSpecificDateWithHttpInfo
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_local Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightOnSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightFlightOnSpecificDateWithHttpInfo($search_by, $search_param, $date_local, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightOnSpecificDate'][0])
    {
        $request = $this->getFlightFlightOnSpecificDateRequest($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\FlightContract[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightFlightOnSpecificDateAsync
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_local Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightOnSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightFlightOnSpecificDateAsync($search_by, $search_param, $date_local, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightOnSpecificDate'][0])
    {
        return $this->getFlightFlightOnSpecificDateAsyncWithHttpInfo($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightFlightOnSpecificDateAsyncWithHttpInfo
     *
     * Flight Status (single day) [TIER 2]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_local Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightOnSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightFlightOnSpecificDateAsyncWithHttpInfo($search_by, $search_param, $date_local, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightOnSpecificDate'][0])
    {
        $returnType = '\OpenAPI\Client\Model\FlightContract[]';
        $request = $this->getFlightFlightOnSpecificDateRequest($search_by, $search_param, $date_local, $date_local_role, $with_aircraft_image, $with_location, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFlightFlightOnSpecificDate'
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_local Local date of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable date is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateLocal parameter shall be considered as both departure and arrival date. If a flight departs OR arrives on that date (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateLocal parameter shall be considered as departure date only. Only the flights departing on that date (in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateLocal parameter shall be considered as arrival date only. Only the flights arriving on that date (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  bool|null $with_aircraft_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_location Should include real-time positional data, e.g.: location, speed, altitude, etc., if available (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightFlightOnSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightFlightOnSpecificDateRequest($search_by, $search_param, $date_local, $date_local_role = 'Both', $with_aircraft_image = false, $with_location = false, string $contentType = self::contentTypes['getFlightFlightOnSpecificDate'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getFlightFlightOnSpecificDate'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling FlightAPIApi.getFlightFlightOnSpecificDate, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getFlightFlightOnSpecificDate'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling FlightAPIApi.getFlightFlightOnSpecificDate, must be smaller than or equal to 10.');
        }
        
        // verify the required parameter 'date_local' is set
        if ($date_local === null || (is_array($date_local) && count($date_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_local when calling getFlightFlightOnSpecificDate'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_local\" when calling FlightAPIApi.getFlightFlightOnSpecificDate, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        




        $resourcePath = '/flights/{searchBy}/{searchParam}/{dateLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_local_role,
            'dateLocalRole', // param base name
            'FlightDirection', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_aircraft_image,
            'withAircraftImage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_location,
            'withLocation', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($search_by !== null) {
            $resourcePath = str_replace(
                '{' . 'searchBy' . '}',
                ObjectSerializer::toPathValue($search_by),
                $resourcePath
            );
        }
        // path params
        if ($search_param !== null) {
            $resourcePath = str_replace(
                '{' . 'searchParam' . '}',
                ObjectSerializer::toPathValue($search_param),
                $resourcePath
            );
        }
        // path params
        if ($date_local !== null) {
            $resourcePath = str_replace(
                '{' . 'dateLocal' . '}',
                ObjectSerializer::toPathValue($date_local),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFlightHistoryFlightHistory
     *
     * Flight History and Schedule (range of days) [TIER 3]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_from_local Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \DateTime $date_to_local End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightHistoryFlightHistory'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[]
     */
    public function getFlightHistoryFlightHistory($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role = 'Both', string $contentType = self::contentTypes['getFlightHistoryFlightHistory'][0])
    {
        list($response) = $this->getFlightHistoryFlightHistoryWithHttpInfo($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role, $contentType);
        return $response;
    }

    /**
     * Operation getFlightHistoryFlightHistoryWithHttpInfo
     *
     * Flight History and Schedule (range of days) [TIER 3]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_from_local Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \DateTime $date_to_local End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightHistoryFlightHistory'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightHistoryFlightHistoryWithHttpInfo($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role = 'Both', string $contentType = self::contentTypes['getFlightHistoryFlightHistory'][0])
    {
        $request = $this->getFlightHistoryFlightHistoryRequest($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\FlightContract[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\FlightContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightHistoryFlightHistoryAsync
     *
     * Flight History and Schedule (range of days) [TIER 3]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_from_local Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \DateTime $date_to_local End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightHistoryFlightHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightHistoryFlightHistoryAsync($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role = 'Both', string $contentType = self::contentTypes['getFlightHistoryFlightHistory'][0])
    {
        return $this->getFlightHistoryFlightHistoryAsyncWithHttpInfo($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightHistoryFlightHistoryAsyncWithHttpInfo
     *
     * Flight History and Schedule (range of days) [TIER 3]
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_from_local Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \DateTime $date_to_local End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightHistoryFlightHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightHistoryFlightHistoryAsyncWithHttpInfo($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role = 'Both', string $contentType = self::contentTypes['getFlightHistoryFlightHistory'][0])
    {
        $returnType = '\OpenAPI\Client\Model\FlightContract[]';
        $request = $this->getFlightHistoryFlightHistoryRequest($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFlightHistoryFlightHistory'
     *
     * @param  \OpenAPIClientModelFlightSearchByEnum $search_by Criteria to search flight by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;number&#x60;, then this field shoud be Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395)  * &#x60;callsign&#x60;, then this field should be ATC call-sign of the flight (with or without spaces, any case formats are acceptable, e.g.AFL1482, nca 008X);  * &#x60;reg&#x60;, then this field should be Aircraft tail-number (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be Aircraft ICAO 24-bit Mode-S address specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  \DateTime $date_from_local Beginning of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. (required)
     * @param  \DateTime $date_to_local End of the range of local dates of departure or arrival (in format: YYYY-MM-DD, e.g.: 2019-08-29). Maximum/minimum allowable value is determined by the current data coverage limitations and your pricing plan. This date must be bigger than the dateFromLocal. The maximum difference between this date and dateFromLocal is limited and is determined by your pricing plan (ranging from 7 to 30 days as per moment of writing). (required)
     * @param  \OpenAPIClientModelFlightDirection|null $date_local_role * If set to &#x60;Both&#x60; (default, recommended for best results) then the dateFromLocal and dateToLocal parameters shall be considered as both departure and arrival dates. If a flight departs OR arrives on dates within the specified range (in the local timezone of the origin or destination, respectively), it will be returned.  * If set to &#x60;Departure&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as departure dates only. Only the flights departing on dates within the specified rang(in the local timezone of origin) will be returned.  * If set to &#x60;Arrival&#x60; then the dateFromLocal and dateToLocal  parameters shall be considered as arrival dates only. Only the flights arriving on dates within the specified rangd (in the local timezone of destination) will be returned. (optional, default to 'Both')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightHistoryFlightHistory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightHistoryFlightHistoryRequest($search_by, $search_param, $date_from_local, $date_to_local, $date_local_role = 'Both', string $contentType = self::contentTypes['getFlightHistoryFlightHistory'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getFlightHistoryFlightHistory'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling FlightAPIApi.getFlightHistoryFlightHistory, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getFlightHistoryFlightHistory'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling FlightAPIApi.getFlightHistoryFlightHistory, must be smaller than or equal to 10.');
        }
        
        // verify the required parameter 'date_from_local' is set
        if ($date_from_local === null || (is_array($date_from_local) && count($date_from_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from_local when calling getFlightHistoryFlightHistory'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_from_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_from_local\" when calling FlightAPIApi.getFlightHistoryFlightHistory, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        
        // verify the required parameter 'date_to_local' is set
        if ($date_to_local === null || (is_array($date_to_local) && count($date_to_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_to_local when calling getFlightHistoryFlightHistory'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_to_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_to_local\" when calling FlightAPIApi.getFlightHistoryFlightHistory, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        


        $resourcePath = '/flights/{searchBy}/{searchParam}/{dateFromLocal}/{dateToLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_local_role,
            'dateLocalRole', // param base name
            'FlightDirection', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($search_by !== null) {
            $resourcePath = str_replace(
                '{' . 'searchBy' . '}',
                ObjectSerializer::toPathValue($search_by),
                $resourcePath
            );
        }
        // path params
        if ($search_param !== null) {
            $resourcePath = str_replace(
                '{' . 'searchParam' . '}',
                ObjectSerializer::toPathValue($search_param),
                $resourcePath
            );
        }
        // path params
        if ($date_from_local !== null) {
            $resourcePath = str_replace(
                '{' . 'dateFromLocal' . '}',
                ObjectSerializer::toPathValue($date_from_local),
                $resourcePath
            );
        }
        // path params
        if ($date_to_local !== null) {
            $resourcePath = str_replace(
                '{' . 'dateToLocal' . '}',
                ObjectSerializer::toPathValue($date_to_local),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchFlightsByTerm
     *
     * Search flight numbers by term [TIER 2]
     *
     * @param  string $q Search query (min. 2 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 100, defaut &#x3D; 10) (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFlightsByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract
     */
    public function searchFlightsByTerm($q, $limit = 10, string $contentType = self::contentTypes['searchFlightsByTerm'][0])
    {
        list($response) = $this->searchFlightsByTermWithHttpInfo($q, $limit, $contentType);
        return $response;
    }

    /**
     * Operation searchFlightsByTermWithHttpInfo
     *
     * Search flight numbers by term [TIER 2]
     *
     * @param  string $q Search query (min. 2 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 100, defaut &#x3D; 10) (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFlightsByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchFlightsByTermWithHttpInfo($q, $limit = 10, string $contentType = self::contentTypes['searchFlightsByTerm'][0])
    {
        $request = $this->searchFlightsByTermRequest($q, $limit, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 451:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\ErrorContract',
                        $request,
                        $response,
                    );
                case 200:
                    return $this->handleResponseWithDataType(
                        '\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 451:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchFlightsByTermAsync
     *
     * Search flight numbers by term [TIER 2]
     *
     * @param  string $q Search query (min. 2 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 100, defaut &#x3D; 10) (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFlightsByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFlightsByTermAsync($q, $limit = 10, string $contentType = self::contentTypes['searchFlightsByTerm'][0])
    {
        return $this->searchFlightsByTermAsyncWithHttpInfo($q, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchFlightsByTermAsyncWithHttpInfo
     *
     * Search flight numbers by term [TIER 2]
     *
     * @param  string $q Search query (min. 2 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 100, defaut &#x3D; 10) (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFlightsByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFlightsByTermAsyncWithHttpInfo($q, $limit = 10, string $contentType = self::contentTypes['searchFlightsByTerm'][0])
    {
        $returnType = '\OpenAPI\Client\Model\StringFlightSearchItemContractSearchResultCollectionContract';
        $request = $this->searchFlightsByTermRequest($q, $limit, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchFlightsByTerm'
     *
     * @param  string $q Search query (min. 2 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 100, defaut &#x3D; 10) (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFlightsByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchFlightsByTermRequest($q, $limit = 10, string $contentType = self::contentTypes['searchFlightsByTerm'][0])
    {

        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling searchFlightsByTerm'
            );
        }



        $resourcePath = '/flights/search/term';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $q,
            'q', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Host');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Host'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-RapidAPI-Key');
        if ($apiKey !== null) {
            $headers['X-RapidAPI-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
