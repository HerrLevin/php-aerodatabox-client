<?php
/**
 * AircraftAPIApi
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
 * AircraftAPIApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AircraftAPIApi
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
        'getAircraft' => [
            'application/json',
        ],
        'getAircraftImageByRegistration' => [
            'application/json',
        ],
        'getAircraftRegistrations' => [
            'application/json',
        ],
        'getAirlineFleet' => [
            'application/json',
        ],
        'getAllAircraft' => [
            'application/json',
        ],
        'recognizeAircraft' => [
            'multipart/form-data',
        ],
        'searchAircraftByTerm' => [
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
     * Operation getAircraft
     *
     * Single aircraft (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContract
     */
    public function getAircraft($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAircraft'][0])
    {
        list($response) = $this->getAircraftWithHttpInfo($search_by, $search_param, $with_image, $with_registrations, $contentType);
        return $response;
    }

    /**
     * Operation getAircraftWithHttpInfo
     *
     * Single aircraft (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAircraftWithHttpInfo($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAircraft'][0])
    {
        $request = $this->getAircraftRequest($search_by, $search_param, $with_image, $with_registrations, $contentType);

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
                        '\OpenAPI\Client\Model\AircraftContract',
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
                '\OpenAPI\Client\Model\AircraftContract',
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
                        '\OpenAPI\Client\Model\AircraftContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAircraftAsync
     *
     * Single aircraft (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftAsync($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAircraft'][0])
    {
        return $this->getAircraftAsyncWithHttpInfo($search_by, $search_param, $with_image, $with_registrations, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAircraftAsyncWithHttpInfo
     *
     * Single aircraft (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftAsyncWithHttpInfo($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAircraft'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AircraftContract';
        $request = $this->getAircraftRequest($search_by, $search_param, $with_image, $with_registrations, $contentType);

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
     * Create request for operation 'getAircraft'
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;: then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;: then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:*    There cannot be more than one aircraft actively flying with the same tail-number or ICAO 24-bit Mode-S address at any moment of time.   However, historically aircraft tail-numbers or addresses may be used multiple times by different aircraft.  This endpoint is supposed to return a **single** aircraft data. In case if multiple aircraft satisfy the search criteria, the best match will be chosen as follows:  * If an active aircraft is found according to the requested critera, it is returned.  * Otherwise, an aircraft that used requested tail-number/address the most recently is returned.   * If usage time may not be determined, the aircraft stored in the database the most recently is returned. (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAircraftRequest($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAircraft'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getAircraft'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling AircraftAPIApi.getAircraft, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getAircraft'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling AircraftAPIApi.getAircraft, must be smaller than or equal to 10.');
        }
        



        $resourcePath = '/aircrafts/{searchBy}/{searchParam}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_image,
            'withImage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_registrations,
            'withRegistrations', // param base name
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
     * Operation getAircraftImageByRegistration
     *
     * Aircraft image by tail-number (BETA) [TIER 2]
     *
     * @param  string $reg Tail-number of the aircraft (full, stripped and any case formats are acceptable). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftImageByRegistration'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ResourceContract
     */
    public function getAircraftImageByRegistration($reg, string $contentType = self::contentTypes['getAircraftImageByRegistration'][0])
    {
        list($response) = $this->getAircraftImageByRegistrationWithHttpInfo($reg, $contentType);
        return $response;
    }

    /**
     * Operation getAircraftImageByRegistrationWithHttpInfo
     *
     * Aircraft image by tail-number (BETA) [TIER 2]
     *
     * @param  string $reg Tail-number of the aircraft (full, stripped and any case formats are acceptable). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftImageByRegistration'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ResourceContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAircraftImageByRegistrationWithHttpInfo($reg, string $contentType = self::contentTypes['getAircraftImageByRegistration'][0])
    {
        $request = $this->getAircraftImageByRegistrationRequest($reg, $contentType);

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
                        '\OpenAPI\Client\Model\ResourceContract',
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
                '\OpenAPI\Client\Model\ResourceContract',
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
                        '\OpenAPI\Client\Model\ResourceContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAircraftImageByRegistrationAsync
     *
     * Aircraft image by tail-number (BETA) [TIER 2]
     *
     * @param  string $reg Tail-number of the aircraft (full, stripped and any case formats are acceptable). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftImageByRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftImageByRegistrationAsync($reg, string $contentType = self::contentTypes['getAircraftImageByRegistration'][0])
    {
        return $this->getAircraftImageByRegistrationAsyncWithHttpInfo($reg, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAircraftImageByRegistrationAsyncWithHttpInfo
     *
     * Aircraft image by tail-number (BETA) [TIER 2]
     *
     * @param  string $reg Tail-number of the aircraft (full, stripped and any case formats are acceptable). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftImageByRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftImageByRegistrationAsyncWithHttpInfo($reg, string $contentType = self::contentTypes['getAircraftImageByRegistration'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ResourceContract';
        $request = $this->getAircraftImageByRegistrationRequest($reg, $contentType);

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
     * Create request for operation 'getAircraftImageByRegistration'
     *
     * @param  string $reg Tail-number of the aircraft (full, stripped and any case formats are acceptable). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftImageByRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAircraftImageByRegistrationRequest($reg, string $contentType = self::contentTypes['getAircraftImageByRegistration'][0])
    {

        // verify the required parameter 'reg' is set
        if ($reg === null || (is_array($reg) && count($reg) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reg when calling getAircraftImageByRegistration'
            );
        }


        $resourcePath = '/aircrafts/reg/{reg}/image/beta';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($reg !== null) {
            $resourcePath = str_replace(
                '{' . 'reg' . '}',
                ObjectSerializer::toPathValue($reg),
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
     * Operation getAircraftRegistrations
     *
     * Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftRegistrations'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftRegistrationContract[]
     */
    public function getAircraftRegistrations($search_by, $search_param, string $contentType = self::contentTypes['getAircraftRegistrations'][0])
    {
        list($response) = $this->getAircraftRegistrationsWithHttpInfo($search_by, $search_param, $contentType);
        return $response;
    }

    /**
     * Operation getAircraftRegistrationsWithHttpInfo
     *
     * Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftRegistrations'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftRegistrationContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAircraftRegistrationsWithHttpInfo($search_by, $search_param, string $contentType = self::contentTypes['getAircraftRegistrations'][0])
    {
        $request = $this->getAircraftRegistrationsRequest($search_by, $search_param, $contentType);

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
                        '\OpenAPI\Client\Model\AircraftRegistrationContract[]',
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
                '\OpenAPI\Client\Model\AircraftRegistrationContract[]',
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
                        '\OpenAPI\Client\Model\AircraftRegistrationContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAircraftRegistrationsAsync
     *
     * Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftRegistrations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftRegistrationsAsync($search_by, $search_param, string $contentType = self::contentTypes['getAircraftRegistrations'][0])
    {
        return $this->getAircraftRegistrationsAsyncWithHttpInfo($search_by, $search_param, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAircraftRegistrationsAsyncWithHttpInfo
     *
     * Single aircraft registration history (by tail-number, Mode-S or ID) [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftRegistrations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAircraftRegistrationsAsyncWithHttpInfo($search_by, $search_param, string $contentType = self::contentTypes['getAircraftRegistrations'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AircraftRegistrationContract[]';
        $request = $this->getAircraftRegistrationsRequest($search_by, $search_param, $contentType);

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
     * Create request for operation 'getAircraftRegistrations'
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ), multiple matches are possible - see below;  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD), multiple matches are possible - see below.    *If multiple matches are possible:* see similar remark to &#x60;Single aircraft&#x60; endpoint. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAircraftRegistrations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAircraftRegistrationsRequest($search_by, $search_param, string $contentType = self::contentTypes['getAircraftRegistrations'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getAircraftRegistrations'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling AircraftAPIApi.getAircraftRegistrations, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getAircraftRegistrations'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling AircraftAPIApi.getAircraftRegistrations, must be smaller than or equal to 10.');
        }
        

        $resourcePath = '/aircrafts/{searchBy}/{searchParam}/registrations';
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
     * Operation getAirlineFleet
     *
     * Airline fleet / Aircraft list by airline code (BETA) [TIER 3]
     *
     * @param  string $airline_code 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. (required)
     * @param  int $page_size The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. (required)
     * @param  int|null $page_offset The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). (optional, default to 0)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirlineFleet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContractPagedCollectionContract
     */
    public function getAirlineFleet($airline_code, $page_size, $page_offset = 0, $with_registrations = false, string $contentType = self::contentTypes['getAirlineFleet'][0])
    {
        list($response) = $this->getAirlineFleetWithHttpInfo($airline_code, $page_size, $page_offset, $with_registrations, $contentType);
        return $response;
    }

    /**
     * Operation getAirlineFleetWithHttpInfo
     *
     * Airline fleet / Aircraft list by airline code (BETA) [TIER 3]
     *
     * @param  string $airline_code 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. (required)
     * @param  int $page_size The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. (required)
     * @param  int|null $page_offset The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). (optional, default to 0)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirlineFleet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContractPagedCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirlineFleetWithHttpInfo($airline_code, $page_size, $page_offset = 0, $with_registrations = false, string $contentType = self::contentTypes['getAirlineFleet'][0])
    {
        $request = $this->getAirlineFleetRequest($airline_code, $page_size, $page_offset, $with_registrations, $contentType);

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
                        '\OpenAPI\Client\Model\AircraftContractPagedCollectionContract',
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
                '\OpenAPI\Client\Model\AircraftContractPagedCollectionContract',
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
                        '\OpenAPI\Client\Model\AircraftContractPagedCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirlineFleetAsync
     *
     * Airline fleet / Aircraft list by airline code (BETA) [TIER 3]
     *
     * @param  string $airline_code 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. (required)
     * @param  int $page_size The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. (required)
     * @param  int|null $page_offset The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). (optional, default to 0)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirlineFleet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirlineFleetAsync($airline_code, $page_size, $page_offset = 0, $with_registrations = false, string $contentType = self::contentTypes['getAirlineFleet'][0])
    {
        return $this->getAirlineFleetAsyncWithHttpInfo($airline_code, $page_size, $page_offset, $with_registrations, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirlineFleetAsyncWithHttpInfo
     *
     * Airline fleet / Aircraft list by airline code (BETA) [TIER 3]
     *
     * @param  string $airline_code 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. (required)
     * @param  int $page_size The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. (required)
     * @param  int|null $page_offset The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). (optional, default to 0)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirlineFleet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirlineFleetAsyncWithHttpInfo($airline_code, $page_size, $page_offset = 0, $with_registrations = false, string $contentType = self::contentTypes['getAirlineFleet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AircraftContractPagedCollectionContract';
        $request = $this->getAirlineFleetRequest($airline_code, $page_size, $page_offset, $with_registrations, $contentType);

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
     * Create request for operation 'getAirlineFleet'
     *
     * @param  string $airline_code 3-character ICAO-code of the airliner (e.g., KLM, ACA); or  2-character IATA-code of the airline (e.g., KL, AC).                Please note that more than one active airline may have the same IATA code, therefore IATA codes are not recommended for this endpoint. (required)
     * @param  int $page_size The number of returned records will be capped at this value.  Must be a positive value and not exceed the limit stipulated by your pricing plan. (required)
     * @param  int|null $page_offset The number of records to skip before listing a page of records. In conjunction with &#x60;pageSize&#x60; effectively determines the page number (default  - 0). (optional, default to 0)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirlineFleet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirlineFleetRequest($airline_code, $page_size, $page_offset = 0, $with_registrations = false, string $contentType = self::contentTypes['getAirlineFleet'][0])
    {

        // verify the required parameter 'airline_code' is set
        if ($airline_code === null || (is_array($airline_code) && count($airline_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $airline_code when calling getAirlineFleet'
            );
        }
        if (strlen($airline_code) > 3) {
            throw new \InvalidArgumentException('invalid length for "$airline_code" when calling AircraftAPIApi.getAirlineFleet, must be smaller than or equal to 3.');
        }
        if (strlen($airline_code) < 2) {
            throw new \InvalidArgumentException('invalid length for "$airline_code" when calling AircraftAPIApi.getAirlineFleet, must be bigger than or equal to 2.');
        }
        
        // verify the required parameter 'page_size' is set
        if ($page_size === null || (is_array($page_size) && count($page_size) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page_size when calling getAirlineFleet'
            );
        }
        if ($page_size > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling AircraftAPIApi.getAirlineFleet, must be smaller than or equal to 2147483647.');
        }
        if ($page_size < 0) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling AircraftAPIApi.getAirlineFleet, must be bigger than or equal to 0.');
        }
        
        if ($page_offset !== null && $page_offset > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$page_offset" when calling AircraftAPIApi.getAirlineFleet, must be smaller than or equal to 2147483647.');
        }
        if ($page_offset !== null && $page_offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$page_offset" when calling AircraftAPIApi.getAirlineFleet, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/airlines/{airlineCode}/aircrafts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_offset,
            'pageOffset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_registrations,
            'withRegistrations', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($airline_code !== null) {
            $resourcePath = str_replace(
                '{' . 'airlineCode' . '}',
                ObjectSerializer::toPathValue($airline_code),
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
     * Operation getAllAircraft
     *
     * Aircraft by tail-number, Mode-S or ID [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContract[]
     */
    public function getAllAircraft($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAllAircraft'][0])
    {
        list($response) = $this->getAllAircraftWithHttpInfo($search_by, $search_param, $with_image, $with_registrations, $contentType);
        return $response;
    }

    /**
     * Operation getAllAircraftWithHttpInfo
     *
     * Aircraft by tail-number, Mode-S or ID [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllAircraftWithHttpInfo($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAllAircraft'][0])
    {
        $request = $this->getAllAircraftRequest($search_by, $search_param, $with_image, $with_registrations, $contentType);

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
                        '\OpenAPI\Client\Model\AircraftContract[]',
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
                '\OpenAPI\Client\Model\AircraftContract[]',
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
                        '\OpenAPI\Client\Model\AircraftContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAllAircraftAsync
     *
     * Aircraft by tail-number, Mode-S or ID [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAircraftAsync($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAllAircraft'][0])
    {
        return $this->getAllAircraftAsyncWithHttpInfo($search_by, $search_param, $with_image, $with_registrations, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllAircraftAsyncWithHttpInfo
     *
     * Aircraft by tail-number, Mode-S or ID [TIER 1]
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAircraftAsyncWithHttpInfo($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAllAircraft'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AircraftContract[]';
        $request = $this->getAllAircraftRequest($search_by, $search_param, $with_image, $with_registrations, $contentType);

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
     * Create request for operation 'getAllAircraft'
     *
     * @param  \OpenAPIClientModelAircraftSearchByEnum $search_by Criteria to search aircraft by (required)
     * @param  string $search_param Value of the search criteria. If &#x60;searchBy&#x60; is:   * &#x60;id&#x60;, then this field should be an ID of an aircraft (as specified in the database of this API);  * &#x60;reg&#x60;, then this field should be a tail-number of an aircraft (with or without spaces or dashes, any case formats are acceptable, e.g.PH-BXO, DeMhJ);  * &#x60;icao24&#x60;, then this field should be a ICAO 24-bit Mode-S address of an aircraft specified in hexadecimal format (e.g. 484161, 483EFD). (required)
     * @param  bool|null $with_image Should include aircraft image (default: false). (optional, default to false)
     * @param  bool|null $with_registrations Should include the history of aircraft registrations (default: false). (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllAircraftRequest($search_by, $search_param, $with_image = false, $with_registrations = false, string $contentType = self::contentTypes['getAllAircraft'][0])
    {

        // verify the required parameter 'search_by' is set
        if ($search_by === null || (is_array($search_by) && count($search_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_by when calling getAllAircraft'
            );
        }
        if (strlen($search_by) > 8) {
            throw new \InvalidArgumentException('invalid length for "$search_by" when calling AircraftAPIApi.getAllAircraft, must be smaller than or equal to 8.');
        }
        
        // verify the required parameter 'search_param' is set
        if ($search_param === null || (is_array($search_param) && count($search_param) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_param when calling getAllAircraft'
            );
        }
        if (strlen($search_param) > 10) {
            throw new \InvalidArgumentException('invalid length for "$search_param" when calling AircraftAPIApi.getAllAircraft, must be smaller than or equal to 10.');
        }
        



        $resourcePath = '/aircrafts/{searchBy}/{searchParam}/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_image,
            'withImage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_registrations,
            'withRegistrations', // param base name
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
     * Operation recognizeAircraft
     *
     * Aicraft image recognition (BETA) [TIER 3]
     *
     * @param  \SplFileObject $photo Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['recognizeAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftRecognitionResultContract
     */
    public function recognizeAircraft($photo, string $contentType = self::contentTypes['recognizeAircraft'][0])
    {
        list($response) = $this->recognizeAircraftWithHttpInfo($photo, $contentType);
        return $response;
    }

    /**
     * Operation recognizeAircraftWithHttpInfo
     *
     * Aicraft image recognition (BETA) [TIER 3]
     *
     * @param  \SplFileObject $photo Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['recognizeAircraft'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AircraftRecognitionResultContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function recognizeAircraftWithHttpInfo($photo, string $contentType = self::contentTypes['recognizeAircraft'][0])
    {
        $request = $this->recognizeAircraftRequest($photo, $contentType);

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
                        '\OpenAPI\Client\Model\AircraftRecognitionResultContract',
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
                '\OpenAPI\Client\Model\AircraftRecognitionResultContract',
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
                        '\OpenAPI\Client\Model\AircraftRecognitionResultContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation recognizeAircraftAsync
     *
     * Aicraft image recognition (BETA) [TIER 3]
     *
     * @param  \SplFileObject $photo Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['recognizeAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recognizeAircraftAsync($photo, string $contentType = self::contentTypes['recognizeAircraft'][0])
    {
        return $this->recognizeAircraftAsyncWithHttpInfo($photo, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation recognizeAircraftAsyncWithHttpInfo
     *
     * Aicraft image recognition (BETA) [TIER 3]
     *
     * @param  \SplFileObject $photo Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['recognizeAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recognizeAircraftAsyncWithHttpInfo($photo, string $contentType = self::contentTypes['recognizeAircraft'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AircraftRecognitionResultContract';
        $request = $this->recognizeAircraftRequest($photo, $contentType);

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
     * Create request for operation 'recognizeAircraft'
     *
     * @param  \SplFileObject $photo Image containing aircraft. It should be image-type file (JPEG, PNG or BMP).     To improve results:   - ensure that aircraft registration is as much as possible visible on the image;  - other inscriptions are visible as least as possible or absent on the image (although algorithm strives to filter these  out as much as possible, false results are still possible). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['recognizeAircraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function recognizeAircraftRequest($photo, string $contentType = self::contentTypes['recognizeAircraft'][0])
    {

        // verify the required parameter 'photo' is set
        if ($photo === null || (is_array($photo) && count($photo) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $photo when calling recognizeAircraft'
            );
        }


        $resourcePath = '/aircrafts/recognize/beta';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        $formDataProcessor = new FormDataProcessor();

        $formData = $formDataProcessor->prepare([
            'photo' => $photo,
        ]);

        $formParams = $formDataProcessor->flatten($formData);
        $multipart = $formDataProcessor->has_file;

        $multipart = true;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchAircraftByTerm
     *
     * Search active aircraft tail numbers by term [TIER 2]
     *
     * @param  string $q Search term (min. 4 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 10, defaut &#x3D; 5) (optional, default to 5)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAircraftByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract
     */
    public function searchAircraftByTerm($q, $limit = 5, string $contentType = self::contentTypes['searchAircraftByTerm'][0])
    {
        list($response) = $this->searchAircraftByTermWithHttpInfo($q, $limit, $contentType);
        return $response;
    }

    /**
     * Operation searchAircraftByTermWithHttpInfo
     *
     * Search active aircraft tail numbers by term [TIER 2]
     *
     * @param  string $q Search term (min. 4 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 10, defaut &#x3D; 5) (optional, default to 5)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAircraftByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAircraftByTermWithHttpInfo($q, $limit = 5, string $contentType = self::contentTypes['searchAircraftByTerm'][0])
    {
        $request = $this->searchAircraftByTermRequest($q, $limit, $contentType);

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
                        '\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract',
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
                '\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract',
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
                        '\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchAircraftByTermAsync
     *
     * Search active aircraft tail numbers by term [TIER 2]
     *
     * @param  string $q Search term (min. 4 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 10, defaut &#x3D; 5) (optional, default to 5)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAircraftByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAircraftByTermAsync($q, $limit = 5, string $contentType = self::contentTypes['searchAircraftByTerm'][0])
    {
        return $this->searchAircraftByTermAsyncWithHttpInfo($q, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAircraftByTermAsyncWithHttpInfo
     *
     * Search active aircraft tail numbers by term [TIER 2]
     *
     * @param  string $q Search term (min. 4 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 10, defaut &#x3D; 5) (optional, default to 5)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAircraftByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAircraftByTermAsyncWithHttpInfo($q, $limit = 5, string $contentType = self::contentTypes['searchAircraftByTerm'][0])
    {
        $returnType = '\OpenAPI\Client\Model\StringAircraftContractSearchResultCollectionContract';
        $request = $this->searchAircraftByTermRequest($q, $limit, $contentType);

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
     * Create request for operation 'searchAircraftByTerm'
     *
     * @param  string $q Search term (min. 4 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of items to be returned (max. 10, defaut &#x3D; 5) (optional, default to 5)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAircraftByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAircraftByTermRequest($q, $limit = 5, string $contentType = self::contentTypes['searchAircraftByTerm'][0])
    {

        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling searchAircraftByTerm'
            );
        }



        $resourcePath = '/aircrafts/search/term';
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
