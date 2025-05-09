<?php
/**
 * AirportAPIApi
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
 * AirportAPIApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AirportAPIApi
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
        'getAirport' => [
            'application/json',
        ],
        'getAirportRunways' => [
            'application/json',
        ],
        'searchAirportByTerm' => [
            'application/json',
        ],
        'searchAirportsByIpGeoLocation' => [
            'application/json',
        ],
        'searchAirportsByLocation' => [
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
     * Operation getAirport
     *
     * Airport by code [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  bool|null $with_runways Include runways data (default - false) (optional, default to false)
     * @param  bool|null $with_time Include current local time (default - false) (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirport'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportContract
     */
    public function getAirport($code_type, $code, $with_runways = false, $with_time = false, string $contentType = self::contentTypes['getAirport'][0])
    {
        list($response) = $this->getAirportWithHttpInfo($code_type, $code, $with_runways, $with_time, $contentType);
        return $response;
    }

    /**
     * Operation getAirportWithHttpInfo
     *
     * Airport by code [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  bool|null $with_runways Include runways data (default - false) (optional, default to false)
     * @param  bool|null $with_time Include current local time (default - false) (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirport'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportWithHttpInfo($code_type, $code, $with_runways = false, $with_time = false, string $contentType = self::contentTypes['getAirport'][0])
    {
        $request = $this->getAirportRequest($code_type, $code, $with_runways, $with_time, $contentType);

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
                        '\OpenAPI\Client\Model\AirportContract',
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
                '\OpenAPI\Client\Model\AirportContract',
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
                        '\OpenAPI\Client\Model\AirportContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportAsync
     *
     * Airport by code [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  bool|null $with_runways Include runways data (default - false) (optional, default to false)
     * @param  bool|null $with_time Include current local time (default - false) (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportAsync($code_type, $code, $with_runways = false, $with_time = false, string $contentType = self::contentTypes['getAirport'][0])
    {
        return $this->getAirportAsyncWithHttpInfo($code_type, $code, $with_runways, $with_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportAsyncWithHttpInfo
     *
     * Airport by code [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  bool|null $with_runways Include runways data (default - false) (optional, default to false)
     * @param  bool|null $with_time Include current local time (default - false) (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportAsyncWithHttpInfo($code_type, $code, $with_runways = false, $with_time = false, string $contentType = self::contentTypes['getAirport'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportContract';
        $request = $this->getAirportRequest($code_type, $code, $with_runways, $with_time, $contentType);

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
     * Create request for operation 'getAirport'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  bool|null $with_runways Include runways data (default - false) (optional, default to false)
     * @param  bool|null $with_time Include current local time (default - false) (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportRequest($code_type, $code, $with_runways = false, $with_time = false, string $contentType = self::contentTypes['getAirport'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirport'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling AirportAPIApi.getAirport, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirport'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling AirportAPIApi.getAirport, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling AirportAPIApi.getAirport, must be bigger than or equal to 3.');
        }
        



        $resourcePath = '/airports/{codeType}/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_runways,
            'withRunways', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_time,
            'withTime', // param base name
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
     * Operation getAirportRunways
     *
     * Airport runways [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportRunways'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\RunwayContract[]
     */
    public function getAirportRunways($code_type, $code, string $contentType = self::contentTypes['getAirportRunways'][0])
    {
        list($response) = $this->getAirportRunwaysWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getAirportRunwaysWithHttpInfo
     *
     * Airport runways [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportRunways'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\RunwayContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportRunwaysWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportRunways'][0])
    {
        $request = $this->getAirportRunwaysRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\RunwayContract[]',
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
                '\OpenAPI\Client\Model\RunwayContract[]',
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
                        '\OpenAPI\Client\Model\RunwayContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportRunwaysAsync
     *
     * Airport runways [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportRunways'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportRunwaysAsync($code_type, $code, string $contentType = self::contentTypes['getAirportRunways'][0])
    {
        return $this->getAirportRunwaysAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportRunwaysAsyncWithHttpInfo
     *
     * Airport runways [TIER 1]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportRunways'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportRunwaysAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportRunways'][0])
    {
        $returnType = '\OpenAPI\Client\Model\RunwayContract[]';
        $request = $this->getAirportRunwaysRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getAirportRunways'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportRunways'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportRunwaysRequest($code_type, $code, string $contentType = self::contentTypes['getAirportRunways'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportRunways'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling AirportAPIApi.getAirportRunways, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportRunways'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling AirportAPIApi.getAirportRunways, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling AirportAPIApi.getAirportRunways, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/runways';
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
     * Operation searchAirportByTerm
     *
     * Search airports by free text [TIER 2]
     *
     * @param  string $q Search query (min. 3 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) (optional, default to 10)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  bool|null $with_search_by_code If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract
     */
    public function searchAirportByTerm($q, $limit = 10, $with_flight_info_only = false, $with_search_by_code = true, string $contentType = self::contentTypes['searchAirportByTerm'][0])
    {
        list($response) = $this->searchAirportByTermWithHttpInfo($q, $limit, $with_flight_info_only, $with_search_by_code, $contentType);
        return $response;
    }

    /**
     * Operation searchAirportByTermWithHttpInfo
     *
     * Search airports by free text [TIER 2]
     *
     * @param  string $q Search query (min. 3 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) (optional, default to 10)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  bool|null $with_search_by_code If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportByTerm'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAirportByTermWithHttpInfo($q, $limit = 10, $with_flight_info_only = false, $with_search_by_code = true, string $contentType = self::contentTypes['searchAirportByTerm'][0])
    {
        $request = $this->searchAirportByTermRequest($q, $limit, $with_flight_info_only, $with_search_by_code, $contentType);

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
                        '\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract',
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
                '\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract',
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
                        '\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchAirportByTermAsync
     *
     * Search airports by free text [TIER 2]
     *
     * @param  string $q Search query (min. 3 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) (optional, default to 10)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  bool|null $with_search_by_code If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportByTermAsync($q, $limit = 10, $with_flight_info_only = false, $with_search_by_code = true, string $contentType = self::contentTypes['searchAirportByTerm'][0])
    {
        return $this->searchAirportByTermAsyncWithHttpInfo($q, $limit, $with_flight_info_only, $with_search_by_code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAirportByTermAsyncWithHttpInfo
     *
     * Search airports by free text [TIER 2]
     *
     * @param  string $q Search query (min. 3 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) (optional, default to 10)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  bool|null $with_search_by_code If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportByTermAsyncWithHttpInfo($q, $limit = 10, $with_flight_info_only = false, $with_search_by_code = true, string $contentType = self::contentTypes['searchAirportByTerm'][0])
    {
        $returnType = '\OpenAPI\Client\Model\StringListingAirportContractSearchResultCollectionContract';
        $request = $this->searchAirportByTermRequest($q, $limit, $with_flight_info_only, $with_search_by_code, $contentType);

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
     * Create request for operation 'searchAirportByTerm'
     *
     * @param  string $q Search query (min. 3 non whitespace characters length) (required)
     * @param  int|null $limit Maximum number of airports to be returned (max. 250, defaut &#x3D; 10) (optional, default to 10)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  bool|null $with_search_by_code If set to true, will attempt to interpret short words within the search query as IATA or ICAO code  and prioritize exact matches by these codes (they will appear higher than others).   Otherwise, the search by code will be completely excluded (only the name of an airport or its city will be searched).   Default &#x3D; true. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportByTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAirportByTermRequest($q, $limit = 10, $with_flight_info_only = false, $with_search_by_code = true, string $contentType = self::contentTypes['searchAirportByTerm'][0])
    {

        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling searchAirportByTerm'
            );
        }





        $resourcePath = '/airports/search/term';
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_flight_info_only,
            'withFlightInfoOnly', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_search_by_code,
            'withSearchByCode', // param base name
            'boolean', // openApiType
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
     * Operation searchAirportsByIpGeoLocation
     *
     * Search airports by IP address geolocation [TIER 2]
     *
     * @param  string $q A valid public IP v4 address (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByIpGeoLocation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract
     */
    public function searchAirportsByIpGeoLocation($q, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByIpGeoLocation'][0])
    {
        list($response) = $this->searchAirportsByIpGeoLocationWithHttpInfo($q, $radius_km, $limit, $with_flight_info_only, $contentType);
        return $response;
    }

    /**
     * Operation searchAirportsByIpGeoLocationWithHttpInfo
     *
     * Search airports by IP address geolocation [TIER 2]
     *
     * @param  string $q A valid public IP v4 address (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByIpGeoLocation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAirportsByIpGeoLocationWithHttpInfo($q, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByIpGeoLocation'][0])
    {
        $request = $this->searchAirportsByIpGeoLocationRequest($q, $radius_km, $limit, $with_flight_info_only, $contentType);

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
                        '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
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
                '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
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
                        '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchAirportsByIpGeoLocationAsync
     *
     * Search airports by IP address geolocation [TIER 2]
     *
     * @param  string $q A valid public IP v4 address (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByIpGeoLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportsByIpGeoLocationAsync($q, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByIpGeoLocation'][0])
    {
        return $this->searchAirportsByIpGeoLocationAsyncWithHttpInfo($q, $radius_km, $limit, $with_flight_info_only, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAirportsByIpGeoLocationAsyncWithHttpInfo
     *
     * Search airports by IP address geolocation [TIER 2]
     *
     * @param  string $q A valid public IP v4 address (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByIpGeoLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportsByIpGeoLocationAsyncWithHttpInfo($q, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByIpGeoLocation'][0])
    {
        $returnType = '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract';
        $request = $this->searchAirportsByIpGeoLocationRequest($q, $radius_km, $limit, $with_flight_info_only, $contentType);

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
     * Create request for operation 'searchAirportsByIpGeoLocation'
     *
     * @param  string $q A valid public IP v4 address (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByIpGeoLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAirportsByIpGeoLocationRequest($q, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByIpGeoLocation'][0])
    {

        // verify the required parameter 'q' is set
        if ($q === null || (is_array($q) && count($q) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $q when calling searchAirportsByIpGeoLocation'
            );
        }

        // verify the required parameter 'radius_km' is set
        if ($radius_km === null || (is_array($radius_km) && count($radius_km) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $radius_km when calling searchAirportsByIpGeoLocation'
            );
        }

        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling searchAirportsByIpGeoLocation'
            );
        }



        $resourcePath = '/airports/search/ip';
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
            $radius_km,
            'radiusKm', // param base name
            'integer', // openApiType
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
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_flight_info_only,
            'withFlightInfoOnly', // param base name
            'boolean', // openApiType
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
     * Operation searchAirportsByLocation
     *
     * Search airports by location [TIER 2]
     *
     * @param  float $lat Latitude location coordinate in decimal format (between -90 and 90) (required)
     * @param  float $lon Longitude location coordinate in decimal format (between -180 and 180) (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByLocation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract
     */
    public function searchAirportsByLocation($lat, $lon, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByLocation'][0])
    {
        list($response) = $this->searchAirportsByLocationWithHttpInfo($lat, $lon, $radius_km, $limit, $with_flight_info_only, $contentType);
        return $response;
    }

    /**
     * Operation searchAirportsByLocationWithHttpInfo
     *
     * Search airports by location [TIER 2]
     *
     * @param  float $lat Latitude location coordinate in decimal format (between -90 and 90) (required)
     * @param  float $lon Longitude location coordinate in decimal format (between -180 and 180) (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByLocation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchAirportsByLocationWithHttpInfo($lat, $lon, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByLocation'][0])
    {
        $request = $this->searchAirportsByLocationRequest($lat, $lon, $radius_km, $limit, $with_flight_info_only, $contentType);

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
                        '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
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
                '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
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
                        '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchAirportsByLocationAsync
     *
     * Search airports by location [TIER 2]
     *
     * @param  float $lat Latitude location coordinate in decimal format (between -90 and 90) (required)
     * @param  float $lon Longitude location coordinate in decimal format (between -180 and 180) (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportsByLocationAsync($lat, $lon, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByLocation'][0])
    {
        return $this->searchAirportsByLocationAsyncWithHttpInfo($lat, $lon, $radius_km, $limit, $with_flight_info_only, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAirportsByLocationAsyncWithHttpInfo
     *
     * Search airports by location [TIER 2]
     *
     * @param  float $lat Latitude location coordinate in decimal format (between -90 and 90) (required)
     * @param  float $lon Longitude location coordinate in decimal format (between -180 and 180) (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAirportsByLocationAsyncWithHttpInfo($lat, $lon, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByLocation'][0])
    {
        $returnType = '\OpenAPI\Client\Model\GeoCoordinatesContractListingAirportContractSearchResultCollectionContract';
        $request = $this->searchAirportsByLocationRequest($lat, $lon, $radius_km, $limit, $with_flight_info_only, $contentType);

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
     * Create request for operation 'searchAirportsByLocation'
     *
     * @param  float $lat Latitude location coordinate in decimal format (between -90 and 90) (required)
     * @param  float $lon Longitude location coordinate in decimal format (between -180 and 180) (required)
     * @param  int $radius_km Radius of search around specified location in kilometers (max. 1000 km) (required)
     * @param  int $limit Maximum number of airports to be returned (max. 250) (required)
     * @param  bool|null $with_flight_info_only If set to true, will only return airports which have flight data (scheduled or live) available. Default &#x3D; false. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchAirportsByLocation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchAirportsByLocationRequest($lat, $lon, $radius_km, $limit, $with_flight_info_only = false, string $contentType = self::contentTypes['searchAirportsByLocation'][0])
    {

        // verify the required parameter 'lat' is set
        if ($lat === null || (is_array($lat) && count($lat) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lat when calling searchAirportsByLocation'
            );
        }

        // verify the required parameter 'lon' is set
        if ($lon === null || (is_array($lon) && count($lon) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lon when calling searchAirportsByLocation'
            );
        }

        // verify the required parameter 'radius_km' is set
        if ($radius_km === null || (is_array($radius_km) && count($radius_km) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $radius_km when calling searchAirportsByLocation'
            );
        }

        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling searchAirportsByLocation'
            );
        }



        $resourcePath = '/airports/search/location';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $lat,
            'lat', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $lon,
            'lon', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $radius_km,
            'radiusKm', // param base name
            'integer', // openApiType
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
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $with_flight_info_only,
            'withFlightInfoOnly', // param base name
            'boolean', // openApiType
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
