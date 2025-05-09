<?php
/**
 * MiscellaneousAPIApi
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
 * MiscellaneousAPIApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MiscellaneousAPIApi
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
        'getAirportDistanceTime' => [
            'application/json',
        ],
        'getAirportLocalTime' => [
            'application/json',
        ],
        'getAirportSolarTimeSolarTimeCurrent' => [
            'application/json',
        ],
        'getAirportSolarTimeSolarTimeSpecificDate' => [
            'application/json',
        ],
        'getAirportWeatherWeatherCurrent' => [
            'application/json',
        ],
        'getAirportWeatherWeatherForTimeRange' => [
            'application/json',
        ],
        'getCountries' => [
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
     * Operation getAirportDistanceTime
     *
     * 🤖 Distance and flight time between airports [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code_from If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $code_to If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. (required)
     * @param  string|null $aircraft_name Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. (optional)
     * @param  \OpenAPIClientModelModelFlightTimeEnum|null $flight_time_model Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. (optional, default to 'Standard')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDistanceTime'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDistanceTimeContract
     */
    public function getAirportDistanceTime($code_type, $code_from, $code_to, $aircraft_name = null, $flight_time_model = 'Standard', string $contentType = self::contentTypes['getAirportDistanceTime'][0])
    {
        list($response) = $this->getAirportDistanceTimeWithHttpInfo($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model, $contentType);
        return $response;
    }

    /**
     * Operation getAirportDistanceTimeWithHttpInfo
     *
     * 🤖 Distance and flight time between airports [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code_from If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $code_to If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. (required)
     * @param  string|null $aircraft_name Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. (optional)
     * @param  \OpenAPIClientModelModelFlightTimeEnum|null $flight_time_model Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. (optional, default to 'Standard')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDistanceTime'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDistanceTimeContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportDistanceTimeWithHttpInfo($code_type, $code_from, $code_to, $aircraft_name = null, $flight_time_model = 'Standard', string $contentType = self::contentTypes['getAirportDistanceTime'][0])
    {
        $request = $this->getAirportDistanceTimeRequest($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model, $contentType);

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
                        '\OpenAPI\Client\Model\AirportDistanceTimeContract',
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
                '\OpenAPI\Client\Model\AirportDistanceTimeContract',
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
                        '\OpenAPI\Client\Model\AirportDistanceTimeContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportDistanceTimeAsync
     *
     * 🤖 Distance and flight time between airports [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code_from If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $code_to If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. (required)
     * @param  string|null $aircraft_name Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. (optional)
     * @param  \OpenAPIClientModelModelFlightTimeEnum|null $flight_time_model Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. (optional, default to 'Standard')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDistanceTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDistanceTimeAsync($code_type, $code_from, $code_to, $aircraft_name = null, $flight_time_model = 'Standard', string $contentType = self::contentTypes['getAirportDistanceTime'][0])
    {
        return $this->getAirportDistanceTimeAsyncWithHttpInfo($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportDistanceTimeAsyncWithHttpInfo
     *
     * 🤖 Distance and flight time between airports [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code_from If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $code_to If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. (required)
     * @param  string|null $aircraft_name Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. (optional)
     * @param  \OpenAPIClientModelModelFlightTimeEnum|null $flight_time_model Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. (optional, default to 'Standard')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDistanceTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDistanceTimeAsyncWithHttpInfo($code_type, $code_from, $code_to, $aircraft_name = null, $flight_time_model = 'Standard', string $contentType = self::contentTypes['getAirportDistanceTime'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDistanceTimeContract';
        $request = $this->getAirportDistanceTimeRequest($code_type, $code_from, $code_to, $aircraft_name, $flight_time_model, $contentType);

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
     * Create request for operation 'getAirportDistanceTime'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code_from If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $code_to If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the destination airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the destination  airport (e.g.: AMS, SFO, LAX, etc.);  * &#x60;local&#x60;, then the format of this field is subject to specific standards of relevant national or local airport codification systems.    Full, stripped and any case formats are acceptable. (required)
     * @param  string|null $aircraft_name Aircraft type name (free text).   If specified, the aircraft type will be attempted to be taken into account to provide more accurate result. (optional)
     * @param  \OpenAPIClientModelModelFlightTimeEnum|null $flight_time_model Model of calculation of the flight time. Default is &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;&lt;/a&gt;  More advanced model(s) is available, including machine learning-based models.  See &lt;a href&#x3D;\&quot;#model-ModelFlightTimeEnum\&quot;&gt;ModelFlightTimeEnum&lt;/a&gt; for details. (optional, default to 'Standard')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDistanceTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportDistanceTimeRequest($code_type, $code_from, $code_to, $aircraft_name = null, $flight_time_model = 'Standard', string $contentType = self::contentTypes['getAirportDistanceTime'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportDistanceTime'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportDistanceTime, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code_from' is set
        if ($code_from === null || (is_array($code_from) && count($code_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_from when calling getAirportDistanceTime'
            );
        }
        if (strlen($code_from) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code_from" when calling MiscellaneousAPIApi.getAirportDistanceTime, must be smaller than or equal to 4.');
        }
        if (strlen($code_from) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code_from" when calling MiscellaneousAPIApi.getAirportDistanceTime, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'code_to' is set
        if ($code_to === null || (is_array($code_to) && count($code_to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_to when calling getAirportDistanceTime'
            );
        }
        if (strlen($code_to) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code_to" when calling MiscellaneousAPIApi.getAirportDistanceTime, must be smaller than or equal to 4.');
        }
        if (strlen($code_to) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code_to" when calling MiscellaneousAPIApi.getAirportDistanceTime, must be bigger than or equal to 3.');
        }
        



        $resourcePath = '/airports/{codeType}/{codeFrom}/distance-time/{codeTo}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $aircraft_name,
            'aircraftName', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $flight_time_model,
            'flightTimeModel', // param base name
            'ModelFlightTimeEnum', // openApiType
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
        if ($code_from !== null) {
            $resourcePath = str_replace(
                '{' . 'codeFrom' . '}',
                ObjectSerializer::toPathValue($code_from),
                $resourcePath
            );
        }
        // path params
        if ($code_to !== null) {
            $resourcePath = str_replace(
                '{' . 'codeTo' . '}',
                ObjectSerializer::toPathValue($code_to),
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
     * Operation getAirportLocalTime
     *
     * Current local time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportLocalTime'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportLocalTimeContract
     */
    public function getAirportLocalTime($code_type, $code, string $contentType = self::contentTypes['getAirportLocalTime'][0])
    {
        list($response) = $this->getAirportLocalTimeWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getAirportLocalTimeWithHttpInfo
     *
     * Current local time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportLocalTime'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportLocalTimeContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportLocalTimeWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportLocalTime'][0])
    {
        $request = $this->getAirportLocalTimeRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\AirportLocalTimeContract',
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
                '\OpenAPI\Client\Model\AirportLocalTimeContract',
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
                        '\OpenAPI\Client\Model\AirportLocalTimeContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportLocalTimeAsync
     *
     * Current local time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportLocalTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportLocalTimeAsync($code_type, $code, string $contentType = self::contentTypes['getAirportLocalTime'][0])
    {
        return $this->getAirportLocalTimeAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportLocalTimeAsyncWithHttpInfo
     *
     * Current local time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportLocalTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportLocalTimeAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportLocalTime'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportLocalTimeContract';
        $request = $this->getAirportLocalTimeRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getAirportLocalTime'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportLocalTime'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportLocalTimeRequest($code_type, $code, string $contentType = self::contentTypes['getAirportLocalTime'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportLocalTime'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportLocalTime, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportLocalTime'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportLocalTime, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportLocalTime, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/time/local';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getAirportSolarTimeSolarTimeCurrent
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\SolarStateContract
     */
    public function getAirportSolarTimeSolarTimeCurrent($code_type, $code, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeCurrent'][0])
    {
        list($response) = $this->getAirportSolarTimeSolarTimeCurrentWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getAirportSolarTimeSolarTimeCurrentWithHttpInfo
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\SolarStateContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportSolarTimeSolarTimeCurrentWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeCurrent'][0])
    {
        $request = $this->getAirportSolarTimeSolarTimeCurrentRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\SolarStateContract',
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
                '\OpenAPI\Client\Model\SolarStateContract',
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
                        '\OpenAPI\Client\Model\SolarStateContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportSolarTimeSolarTimeCurrentAsync
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportSolarTimeSolarTimeCurrentAsync($code_type, $code, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeCurrent'][0])
    {
        return $this->getAirportSolarTimeSolarTimeCurrentAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportSolarTimeSolarTimeCurrentAsyncWithHttpInfo
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportSolarTimeSolarTimeCurrentAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeCurrent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\SolarStateContract';
        $request = $this->getAirportSolarTimeSolarTimeCurrentRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getAirportSolarTimeSolarTimeCurrent'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportSolarTimeSolarTimeCurrentRequest($code_type, $code, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeCurrent'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportSolarTimeSolarTimeCurrent'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeCurrent, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportSolarTimeSolarTimeCurrent'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeCurrent, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeCurrent, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/time/solar';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getAirportSolarTimeSolarTimeSpecificDate
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\SolarStateContract
     */
    public function getAirportSolarTimeSolarTimeSpecificDate($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'][0])
    {
        list($response) = $this->getAirportSolarTimeSolarTimeSpecificDateWithHttpInfo($code_type, $code, $date_local, $contentType);
        return $response;
    }

    /**
     * Operation getAirportSolarTimeSolarTimeSpecificDateWithHttpInfo
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\SolarStateContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportSolarTimeSolarTimeSpecificDateWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'][0])
    {
        $request = $this->getAirportSolarTimeSolarTimeSpecificDateRequest($code_type, $code, $date_local, $contentType);

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
                        '\OpenAPI\Client\Model\SolarStateContract',
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
                '\OpenAPI\Client\Model\SolarStateContract',
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
                        '\OpenAPI\Client\Model\SolarStateContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportSolarTimeSolarTimeSpecificDateAsync
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportSolarTimeSolarTimeSpecificDateAsync($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'][0])
    {
        return $this->getAirportSolarTimeSolarTimeSpecificDateAsyncWithHttpInfo($code_type, $code, $date_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportSolarTimeSolarTimeSpecificDateAsyncWithHttpInfo
     *
     * Solar and day time at the airport [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportSolarTimeSolarTimeSpecificDateAsyncWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'][0])
    {
        $returnType = '\OpenAPI\Client\Model\SolarStateContract';
        $request = $this->getAirportSolarTimeSolarTimeSpecificDateRequest($code_type, $code, $date_local, $contentType);

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
     * Create request for operation 'getAirportSolarTimeSolarTimeSpecificDate'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time which solar data is request for (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportSolarTimeSolarTimeSpecificDateRequest($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportSolarTimeSolarTimeSpecificDate'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportSolarTimeSolarTimeSpecificDate'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeSpecificDate, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportSolarTimeSolarTimeSpecificDate'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeSpecificDate, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeSpecificDate, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'date_local' is set
        if ($date_local === null || (is_array($date_local) && count($date_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_local when calling getAirportSolarTimeSolarTimeSpecificDate'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_local\" when calling MiscellaneousAPIApi.getAirportSolarTimeSolarTimeSpecificDate, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/{codeType}/{code}/time/solar/{dateLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getAirportWeatherWeatherCurrent
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\WeatherStateContract[]
     */
    public function getAirportWeatherWeatherCurrent($code_type, $code, string $contentType = self::contentTypes['getAirportWeatherWeatherCurrent'][0])
    {
        list($response) = $this->getAirportWeatherWeatherCurrentWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getAirportWeatherWeatherCurrentWithHttpInfo
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\WeatherStateContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportWeatherWeatherCurrentWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportWeatherWeatherCurrent'][0])
    {
        $request = $this->getAirportWeatherWeatherCurrentRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\WeatherStateContract[]',
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
                '\OpenAPI\Client\Model\WeatherStateContract[]',
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
                        '\OpenAPI\Client\Model\WeatherStateContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportWeatherWeatherCurrentAsync
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportWeatherWeatherCurrentAsync($code_type, $code, string $contentType = self::contentTypes['getAirportWeatherWeatherCurrent'][0])
    {
        return $this->getAirportWeatherWeatherCurrentAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportWeatherWeatherCurrentAsyncWithHttpInfo
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportWeatherWeatherCurrentAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportWeatherWeatherCurrent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\WeatherStateContract[]';
        $request = $this->getAirportWeatherWeatherCurrentRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getAirportWeatherWeatherCurrent'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportWeatherWeatherCurrentRequest($code_type, $code, string $contentType = self::contentTypes['getAirportWeatherWeatherCurrent'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportWeatherWeatherCurrent'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportWeatherWeatherCurrent, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportWeatherWeatherCurrent'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportWeatherWeatherCurrent, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportWeatherWeatherCurrent, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/weather';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getAirportWeatherWeatherForTimeRange
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherForTimeRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\WeatherStateContract[]
     */
    public function getAirportWeatherWeatherForTimeRange($code_type, $code, $from_local, $to_local, string $contentType = self::contentTypes['getAirportWeatherWeatherForTimeRange'][0])
    {
        list($response) = $this->getAirportWeatherWeatherForTimeRangeWithHttpInfo($code_type, $code, $from_local, $to_local, $contentType);
        return $response;
    }

    /**
     * Operation getAirportWeatherWeatherForTimeRangeWithHttpInfo
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherForTimeRange'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\WeatherStateContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportWeatherWeatherForTimeRangeWithHttpInfo($code_type, $code, $from_local, $to_local, string $contentType = self::contentTypes['getAirportWeatherWeatherForTimeRange'][0])
    {
        $request = $this->getAirportWeatherWeatherForTimeRangeRequest($code_type, $code, $from_local, $to_local, $contentType);

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
                        '\OpenAPI\Client\Model\WeatherStateContract[]',
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
                '\OpenAPI\Client\Model\WeatherStateContract[]',
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
                        '\OpenAPI\Client\Model\WeatherStateContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportWeatherWeatherForTimeRangeAsync
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherForTimeRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportWeatherWeatherForTimeRangeAsync($code_type, $code, $from_local, $to_local, string $contentType = self::contentTypes['getAirportWeatherWeatherForTimeRange'][0])
    {
        return $this->getAirportWeatherWeatherForTimeRangeAsyncWithHttpInfo($code_type, $code, $from_local, $to_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportWeatherWeatherForTimeRangeAsyncWithHttpInfo
     *
     * Weather / forecast at the airport [TIER 2]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherForTimeRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportWeatherWeatherForTimeRangeAsyncWithHttpInfo($code_type, $code, $from_local, $to_local, string $contentType = self::contentTypes['getAirportWeatherWeatherForTimeRange'][0])
    {
        $returnType = '\OpenAPI\Client\Model\WeatherStateContract[]';
        $request = $this->getAirportWeatherWeatherForTimeRangeRequest($code_type, $code, $from_local, $to_local, $contentType);

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
     * Create request for operation 'getAirportWeatherWeatherForTimeRange'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the origin airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the origin  airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $from_local Beginning of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be in range from current time up to 48 hours in future.  Default - current time. (required)
     * @param  \DateTime $to_local End of the search range (local time, format: YYYY-MM-DDTHH:mm).   Must be equal to or more than beginning of the search range specified in &#x60;fromLocal&#x60;, up to 48 hours in future.  Default equal to &#x60;fromLocal&#x60;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportWeatherWeatherForTimeRange'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportWeatherWeatherForTimeRangeRequest($code_type, $code, $from_local, $to_local, string $contentType = self::contentTypes['getAirportWeatherWeatherForTimeRange'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportWeatherWeatherForTimeRange'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling MiscellaneousAPIApi.getAirportWeatherWeatherForTimeRange, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportWeatherWeatherForTimeRange'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportWeatherWeatherForTimeRange, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling MiscellaneousAPIApi.getAirportWeatherWeatherForTimeRange, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'from_local' is set
        if ($from_local === null || (is_array($from_local) && count($from_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_local when calling getAirportWeatherWeatherForTimeRange'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $from_local)) {
            throw new \InvalidArgumentException("invalid value for \"from_local\" when calling MiscellaneousAPIApi.getAirportWeatherWeatherForTimeRange, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        
        // verify the required parameter 'to_local' is set
        if ($to_local === null || (is_array($to_local) && count($to_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_local when calling getAirportWeatherWeatherForTimeRange'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $to_local)) {
            throw new \InvalidArgumentException("invalid value for \"to_local\" when calling MiscellaneousAPIApi.getAirportWeatherWeatherForTimeRange, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/{codeType}/{code}/weather/{fromLocal}/{toLocal}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getCountries
     *
     * Get all countries [TIER 1]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCountries'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\CountryContract[]
     */
    public function getCountries(string $contentType = self::contentTypes['getCountries'][0])
    {
        list($response) = $this->getCountriesWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getCountriesWithHttpInfo
     *
     * Get all countries [TIER 1]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCountries'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\CountryContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCountriesWithHttpInfo(string $contentType = self::contentTypes['getCountries'][0])
    {
        $request = $this->getCountriesRequest($contentType);

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
                        '\OpenAPI\Client\Model\CountryContract[]',
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
                '\OpenAPI\Client\Model\CountryContract[]',
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
                        '\OpenAPI\Client\Model\CountryContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getCountriesAsync
     *
     * Get all countries [TIER 1]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCountriesAsync(string $contentType = self::contentTypes['getCountries'][0])
    {
        return $this->getCountriesAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCountriesAsyncWithHttpInfo
     *
     * Get all countries [TIER 1]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCountriesAsyncWithHttpInfo(string $contentType = self::contentTypes['getCountries'][0])
    {
        $returnType = '\OpenAPI\Client\Model\CountryContract[]';
        $request = $this->getCountriesRequest($contentType);

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
     * Create request for operation 'getCountries'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCountries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCountriesRequest(string $contentType = self::contentTypes['getCountries'][0])
    {


        $resourcePath = '/countries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
