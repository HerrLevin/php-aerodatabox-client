<?php
/**
 * StatisticalAPIApi
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
 * StatisticalAPIApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatisticalAPIApi
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
        'getAirportDelayDelaysCurrent' => [
            'application/json',
        ],
        'getAirportDelayDelaysHistorical' => [
            'application/json',
        ],
        'getAirportDelays' => [
            'application/json',
        ],
        'getFlightDelays' => [
            'application/json',
        ],
        'getGlobalDelaysGlobalDelaysAtSpecificDate' => [
            'application/json',
        ],
        'getGlobalDelaysGlobalDelaysCurent' => [
            'application/json',
        ],
        'getRouteDailyStatisticsRoutesDailAtSpecificDate' => [
            'application/json',
        ],
        'getRouteDailyStatisticsRoutesDailyCurrent' => [
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
     * Operation getAirportDelayDelaysCurrent
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract
     */
    public function getAirportDelayDelaysCurrent($code_type, $code, string $contentType = self::contentTypes['getAirportDelayDelaysCurrent'][0])
    {
        list($response) = $this->getAirportDelayDelaysCurrentWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getAirportDelayDelaysCurrentWithHttpInfo
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportDelayDelaysCurrentWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportDelayDelaysCurrent'][0])
    {
        $request = $this->getAirportDelayDelaysCurrentRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\AirportDelayContract',
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
                '\OpenAPI\Client\Model\AirportDelayContract',
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
                        '\OpenAPI\Client\Model\AirportDelayContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportDelayDelaysCurrentAsync
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelayDelaysCurrentAsync($code_type, $code, string $contentType = self::contentTypes['getAirportDelayDelaysCurrent'][0])
    {
        return $this->getAirportDelayDelaysCurrentAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportDelayDelaysCurrentAsyncWithHttpInfo
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelayDelaysCurrentAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getAirportDelayDelaysCurrent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDelayContract';
        $request = $this->getAirportDelayDelaysCurrentRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getAirportDelayDelaysCurrent'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportDelayDelaysCurrentRequest($code_type, $code, string $contentType = self::contentTypes['getAirportDelayDelaysCurrent'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportDelayDelaysCurrent'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling StatisticalAPIApi.getAirportDelayDelaysCurrent, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportDelayDelaysCurrent'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelayDelaysCurrent, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelayDelaysCurrent, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/delays';
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
     * Operation getAirportDelayDelaysHistorical
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysHistorical'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract
     */
    public function getAirportDelayDelaysHistorical($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportDelayDelaysHistorical'][0])
    {
        list($response) = $this->getAirportDelayDelaysHistoricalWithHttpInfo($code_type, $code, $date_local, $contentType);
        return $response;
    }

    /**
     * Operation getAirportDelayDelaysHistoricalWithHttpInfo
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysHistorical'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportDelayDelaysHistoricalWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportDelayDelaysHistorical'][0])
    {
        $request = $this->getAirportDelayDelaysHistoricalRequest($code_type, $code, $date_local, $contentType);

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
                        '\OpenAPI\Client\Model\AirportDelayContract',
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
                '\OpenAPI\Client\Model\AirportDelayContract',
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
                        '\OpenAPI\Client\Model\AirportDelayContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportDelayDelaysHistoricalAsync
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysHistorical'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelayDelaysHistoricalAsync($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportDelayDelaysHistorical'][0])
    {
        return $this->getAirportDelayDelaysHistoricalAsyncWithHttpInfo($code_type, $code, $date_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportDelayDelaysHistoricalAsyncWithHttpInfo
     *
     * Airport delays (current or historical moment) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysHistorical'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelayDelaysHistoricalAsyncWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportDelayDelaysHistorical'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDelayContract';
        $request = $this->getAirportDelayDelaysHistoricalRequest($code_type, $code, $date_local, $contentType);

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
     * Create request for operation 'getAirportDelayDelaysHistorical'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local The moment of time for / from which delay data is requested (local time, format: YYYY-MM-DDTHH:mm).   Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelayDelaysHistorical'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportDelayDelaysHistoricalRequest($code_type, $code, $date_local, string $contentType = self::contentTypes['getAirportDelayDelaysHistorical'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportDelayDelaysHistorical'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling StatisticalAPIApi.getAirportDelayDelaysHistorical, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportDelayDelaysHistorical'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelayDelaysHistorical, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelayDelaysHistorical, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'date_local' is set
        if ($date_local === null || (is_array($date_local) && count($date_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_local when calling getAirportDelayDelaysHistorical'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_local\" when calling StatisticalAPIApi.getAirportDelayDelaysHistorical, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/{codeType}/{code}/delays/{dateLocal}';
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
     * Operation getAirportDelays
     *
     * Airport delays (historical period) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_from_local The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  \DateTime $date_to_local The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelays'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract[]
     */
    public function getAirportDelays($code_type, $code, $date_from_local, $date_to_local, string $contentType = self::contentTypes['getAirportDelays'][0])
    {
        list($response) = $this->getAirportDelaysWithHttpInfo($code_type, $code, $date_from_local, $date_to_local, $contentType);
        return $response;
    }

    /**
     * Operation getAirportDelaysWithHttpInfo
     *
     * Airport delays (historical period) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_from_local The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  \DateTime $date_to_local The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelays'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAirportDelaysWithHttpInfo($code_type, $code, $date_from_local, $date_to_local, string $contentType = self::contentTypes['getAirportDelays'][0])
    {
        $request = $this->getAirportDelaysRequest($code_type, $code, $date_from_local, $date_to_local, $contentType);

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
                        '\OpenAPI\Client\Model\AirportDelayContract[]',
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
                '\OpenAPI\Client\Model\AirportDelayContract[]',
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
                        '\OpenAPI\Client\Model\AirportDelayContract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getAirportDelaysAsync
     *
     * Airport delays (historical period) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_from_local The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  \DateTime $date_to_local The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelaysAsync($code_type, $code, $date_from_local, $date_to_local, string $contentType = self::contentTypes['getAirportDelays'][0])
    {
        return $this->getAirportDelaysAsyncWithHttpInfo($code_type, $code, $date_from_local, $date_to_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAirportDelaysAsyncWithHttpInfo
     *
     * Airport delays (historical period) [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_from_local The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  \DateTime $date_to_local The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAirportDelaysAsyncWithHttpInfo($code_type, $code, $date_from_local, $date_to_local, string $contentType = self::contentTypes['getAirportDelays'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDelayContract[]';
        $request = $this->getAirportDelaysRequest($code_type, $code, $date_from_local, $date_to_local, $contentType);

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
     * Create request for operation 'getAirportDelays'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_from_local The beginning of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  \DateTime $date_to_local The end of the period of time for which delay data is requested (local time, format: YYYY-MM-DDTHH:mm). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAirportDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAirportDelaysRequest($code_type, $code, $date_from_local, $date_to_local, string $contentType = self::contentTypes['getAirportDelays'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getAirportDelays'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling StatisticalAPIApi.getAirportDelays, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getAirportDelays'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelays, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getAirportDelays, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'date_from_local' is set
        if ($date_from_local === null || (is_array($date_from_local) && count($date_from_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from_local when calling getAirportDelays'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_from_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_from_local\" when calling StatisticalAPIApi.getAirportDelays, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        
        // verify the required parameter 'date_to_local' is set
        if ($date_to_local === null || (is_array($date_to_local) && count($date_to_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_to_local when calling getAirportDelays'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_to_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_to_local\" when calling StatisticalAPIApi.getAirportDelays, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/{codeType}/{code}/delays/{dateFromLocal}/{dateToLocal}';
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
     * Operation getFlightDelays
     *
     * Flight delay statistics by flight number [TIER 3]
     *
     * @param  string $number Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDelays'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightLegDelayContract
     */
    public function getFlightDelays($number, string $contentType = self::contentTypes['getFlightDelays'][0])
    {
        list($response) = $this->getFlightDelaysWithHttpInfo($number, $contentType);
        return $response;
    }

    /**
     * Operation getFlightDelaysWithHttpInfo
     *
     * Flight delay statistics by flight number [TIER 3]
     *
     * @param  string $number Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDelays'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\FlightLegDelayContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFlightDelaysWithHttpInfo($number, string $contentType = self::contentTypes['getFlightDelays'][0])
    {
        $request = $this->getFlightDelaysRequest($number, $contentType);

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
                        '\OpenAPI\Client\Model\FlightLegDelayContract',
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
                '\OpenAPI\Client\Model\FlightLegDelayContract',
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
                        '\OpenAPI\Client\Model\FlightLegDelayContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getFlightDelaysAsync
     *
     * Flight delay statistics by flight number [TIER 3]
     *
     * @param  string $number Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDelaysAsync($number, string $contentType = self::contentTypes['getFlightDelays'][0])
    {
        return $this->getFlightDelaysAsyncWithHttpInfo($number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFlightDelaysAsyncWithHttpInfo
     *
     * Flight delay statistics by flight number [TIER 3]
     *
     * @param  string $number Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFlightDelaysAsyncWithHttpInfo($number, string $contentType = self::contentTypes['getFlightDelays'][0])
    {
        $returnType = '\OpenAPI\Client\Model\FlightLegDelayContract';
        $request = $this->getFlightDelaysRequest($number, $contentType);

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
     * Create request for operation 'getFlightDelays'
     *
     * @param  string $number Flight number (with or without spaces, IATA or ICAO, any case formats are acceptable, e.g. KL1395, Klm 1395) (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFlightDelays'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFlightDelaysRequest($number, string $contentType = self::contentTypes['getFlightDelays'][0])
    {

        // verify the required parameter 'number' is set
        if ($number === null || (is_array($number) && count($number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number when calling getFlightDelays'
            );
        }
        if (strlen($number) > 8) {
            throw new \InvalidArgumentException('invalid length for "$number" when calling StatisticalAPIApi.getFlightDelays, must be smaller than or equal to 8.');
        }
        

        $resourcePath = '/flights/{number}/delays';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($number !== null) {
            $resourcePath = str_replace(
                '{' . 'number' . '}',
                ObjectSerializer::toPathValue($number),
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
     * Operation getGlobalDelaysGlobalDelaysAtSpecificDate
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  \DateTime $date_utc The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract
     */
    public function getGlobalDelaysGlobalDelaysAtSpecificDate($date_utc, string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'][0])
    {
        list($response) = $this->getGlobalDelaysGlobalDelaysAtSpecificDateWithHttpInfo($date_utc, $contentType);
        return $response;
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysAtSpecificDateWithHttpInfo
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  \DateTime $date_utc The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGlobalDelaysGlobalDelaysAtSpecificDateWithHttpInfo($date_utc, string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'][0])
    {
        $request = $this->getGlobalDelaysGlobalDelaysAtSpecificDateRequest($date_utc, $contentType);

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
                        '\OpenAPI\Client\Model\AirportDelayContract',
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
                '\OpenAPI\Client\Model\AirportDelayContract',
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
                        '\OpenAPI\Client\Model\AirportDelayContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysAtSpecificDateAsync
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  \DateTime $date_utc The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGlobalDelaysGlobalDelaysAtSpecificDateAsync($date_utc, string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'][0])
    {
        return $this->getGlobalDelaysGlobalDelaysAtSpecificDateAsyncWithHttpInfo($date_utc, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysAtSpecificDateAsyncWithHttpInfo
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  \DateTime $date_utc The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGlobalDelaysGlobalDelaysAtSpecificDateAsyncWithHttpInfo($date_utc, string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDelayContract';
        $request = $this->getGlobalDelaysGlobalDelaysAtSpecificDateRequest($date_utc, $contentType);

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
     * Create request for operation 'getGlobalDelaysGlobalDelaysAtSpecificDate'
     *
     * @param  \DateTime $date_utc The moment of time for / from which delay data is requested (UTC time, format: YYYY-MM-DDTHH:mm).  Default - current time. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGlobalDelaysGlobalDelaysAtSpecificDateRequest($date_utc, string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysAtSpecificDate'][0])
    {

        // verify the required parameter 'date_utc' is set
        if ($date_utc === null || (is_array($date_utc) && count($date_utc) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_utc when calling getGlobalDelaysGlobalDelaysAtSpecificDate'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_utc)) {
            throw new \InvalidArgumentException("invalid value for \"date_utc\" when calling StatisticalAPIApi.getGlobalDelaysGlobalDelaysAtSpecificDate, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/delays/{dateUtc}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($date_utc !== null) {
            $resourcePath = str_replace(
                '{' . 'dateUtc' . '}',
                ObjectSerializer::toPathValue($date_utc),
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
     * Operation getGlobalDelaysGlobalDelaysCurent
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysCurent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract
     */
    public function getGlobalDelaysGlobalDelaysCurent(string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysCurent'][0])
    {
        list($response) = $this->getGlobalDelaysGlobalDelaysCurentWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysCurentWithHttpInfo
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysCurent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\AirportDelayContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGlobalDelaysGlobalDelaysCurentWithHttpInfo(string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysCurent'][0])
    {
        $request = $this->getGlobalDelaysGlobalDelaysCurentRequest($contentType);

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
                        '\OpenAPI\Client\Model\AirportDelayContract',
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
                '\OpenAPI\Client\Model\AirportDelayContract',
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
                        '\OpenAPI\Client\Model\AirportDelayContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysCurentAsync
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysCurent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGlobalDelaysGlobalDelaysCurentAsync(string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysCurent'][0])
    {
        return $this->getGlobalDelaysGlobalDelaysCurentAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGlobalDelaysGlobalDelaysCurentAsyncWithHttpInfo
     *
     * Global delays (current or historical moment) [TIER 3]
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysCurent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGlobalDelaysGlobalDelaysCurentAsyncWithHttpInfo(string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysCurent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\AirportDelayContract';
        $request = $this->getGlobalDelaysGlobalDelaysCurentRequest($contentType);

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
     * Create request for operation 'getGlobalDelaysGlobalDelaysCurent'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getGlobalDelaysGlobalDelaysCurent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGlobalDelaysGlobalDelaysCurentRequest(string $contentType = self::contentTypes['getGlobalDelaysGlobalDelaysCurent'][0])
    {


        $resourcePath = '/airports/delays';
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
     * Operation getRouteDailyStatisticsRoutesDailAtSpecificDate
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\DailyRouteStatContract
     */
    public function getRouteDailyStatisticsRoutesDailAtSpecificDate($code_type, $code, $date_local, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'][0])
    {
        list($response) = $this->getRouteDailyStatisticsRoutesDailAtSpecificDateWithHttpInfo($code_type, $code, $date_local, $contentType);
        return $response;
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailAtSpecificDateWithHttpInfo
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\DailyRouteStatContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRouteDailyStatisticsRoutesDailAtSpecificDateWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'][0])
    {
        $request = $this->getRouteDailyStatisticsRoutesDailAtSpecificDateRequest($code_type, $code, $date_local, $contentType);

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
                        '\OpenAPI\Client\Model\DailyRouteStatContract',
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
                '\OpenAPI\Client\Model\DailyRouteStatContract',
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
                        '\OpenAPI\Client\Model\DailyRouteStatContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailAtSpecificDateAsync
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteDailyStatisticsRoutesDailAtSpecificDateAsync($code_type, $code, $date_local, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'][0])
    {
        return $this->getRouteDailyStatisticsRoutesDailAtSpecificDateAsyncWithHttpInfo($code_type, $code, $date_local, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailAtSpecificDateAsyncWithHttpInfo
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteDailyStatisticsRoutesDailAtSpecificDateAsyncWithHttpInfo($code_type, $code, $date_local, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DailyRouteStatContract';
        $request = $this->getRouteDailyStatisticsRoutesDailAtSpecificDateRequest($code_type, $code, $date_local, $contentType);

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
     * Create request for operation 'getRouteDailyStatisticsRoutesDailAtSpecificDate'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  \DateTime $date_local Local date at the airport (default &#x3D; null).  If specified, returns statistics based on 7 days prior to the date specified.  Otherwise, returns statistics based on 7 days prior to the current local date at the airport. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRouteDailyStatisticsRoutesDailAtSpecificDateRequest($code_type, $code, $date_local, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailAtSpecificDate'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getRouteDailyStatisticsRoutesDailAtSpecificDate'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailAtSpecificDate, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getRouteDailyStatisticsRoutesDailAtSpecificDate'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailAtSpecificDate, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailAtSpecificDate, must be bigger than or equal to 3.');
        }
        
        // verify the required parameter 'date_local' is set
        if ($date_local === null || (is_array($date_local) && count($date_local) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_local when calling getRouteDailyStatisticsRoutesDailAtSpecificDate'
            );
        }
        if (!preg_match("/\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/", $date_local)) {
            throw new \InvalidArgumentException("invalid value for \"date_local\" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailAtSpecificDate, must conform to the pattern /\\d{4}-\\d{2}-\\d{2}(T\\d{2}:\\d{2})?/.");
        }
        

        $resourcePath = '/airports/{codeType}/{code}/stats/routes/daily/{dateLocal}';
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
     * Operation getRouteDailyStatisticsRoutesDailyCurrent
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\DailyRouteStatContract
     */
    public function getRouteDailyStatisticsRoutesDailyCurrent($code_type, $code, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'][0])
    {
        list($response) = $this->getRouteDailyStatisticsRoutesDailyCurrentWithHttpInfo($code_type, $code, $contentType);
        return $response;
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailyCurrentWithHttpInfo
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\ErrorContract|\OpenAPI\Client\Model\DailyRouteStatContract, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRouteDailyStatisticsRoutesDailyCurrentWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'][0])
    {
        $request = $this->getRouteDailyStatisticsRoutesDailyCurrentRequest($code_type, $code, $contentType);

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
                        '\OpenAPI\Client\Model\DailyRouteStatContract',
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
                '\OpenAPI\Client\Model\DailyRouteStatContract',
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
                        '\OpenAPI\Client\Model\DailyRouteStatContract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailyCurrentAsync
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteDailyStatisticsRoutesDailyCurrentAsync($code_type, $code, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'][0])
    {
        return $this->getRouteDailyStatisticsRoutesDailyCurrentAsyncWithHttpInfo($code_type, $code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRouteDailyStatisticsRoutesDailyCurrentAsyncWithHttpInfo
     *
     * Airport routes and daily flight destinations [TIER 3]
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteDailyStatisticsRoutesDailyCurrentAsyncWithHttpInfo($code_type, $code, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DailyRouteStatContract';
        $request = $this->getRouteDailyStatisticsRoutesDailyCurrentRequest($code_type, $code, $contentType);

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
     * Create request for operation 'getRouteDailyStatisticsRoutesDailyCurrent'
     *
     * @param  \OpenAPIClientModelAirportCodesByEnum $code_type Type of code to search airport by (&#x60;iata&#x60; or &#x60;icao&#x60;) (required)
     * @param  string $code If &#x60;codeType&#x60; is:  * &#x60;icao&#x60;, then this field must be a 4-character ICAO-code of the airport (e.g.: EHAM, KLAX, UUEE, etc.);  * &#x60;iata&#x60;, then this field must be a 3-character IATA-code of the airport (e.g.: AMS, SFO, LAX, etc.).    Full, stripped and any case formats are acceptable. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRouteDailyStatisticsRoutesDailyCurrentRequest($code_type, $code, string $contentType = self::contentTypes['getRouteDailyStatisticsRoutesDailyCurrent'][0])
    {

        // verify the required parameter 'code_type' is set
        if ($code_type === null || (is_array($code_type) && count($code_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code_type when calling getRouteDailyStatisticsRoutesDailyCurrent'
            );
        }
        if (!preg_match("/^(?i)(icao|iata)$/", $code_type)) {
            throw new \InvalidArgumentException("invalid value for \"code_type\" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailyCurrent, must conform to the pattern /^(?i)(icao|iata)$/.");
        }
        
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getRouteDailyStatisticsRoutesDailyCurrent'
            );
        }
        if (strlen($code) > 4) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailyCurrent, must be smaller than or equal to 4.');
        }
        if (strlen($code) < 3) {
            throw new \InvalidArgumentException('invalid length for "$code" when calling StatisticalAPIApi.getRouteDailyStatisticsRoutesDailyCurrent, must be bigger than or equal to 3.');
        }
        

        $resourcePath = '/airports/{codeType}/{code}/stats/routes/daily';
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
