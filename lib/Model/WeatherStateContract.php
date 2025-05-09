<?php
/**
 * WeatherStateContract
 *
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * WeatherStateContract Class Doc Comment
 *
 * @category Class
 * @description Weather record contract describing the weather situation  at a specific time and place
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WeatherStateContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WeatherStateContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\OpenAPI\Client\Model\GeoCoordinatesContract',
        'air_temperature' => '\OpenAPI\Client\Model\Temperature',
        'dew_point' => '\OpenAPI\Client\Model\Temperature',
        'pressure' => '\OpenAPI\Client\Model\Pressure',
        'wind' => '\OpenAPI\Client\Model\WindContract',
        'visibility' => '\OpenAPI\Client\Model\Distance',
        'report' => 'string',
        'cloud_base' => '\OpenAPI\Client\Model\Distance',
        'cloud_cover' => '\OpenAPI\Client\Model\CloudCover',
        'phenomena_groups' => '\OpenAPI\Client\Model\PhenomenaGroup[]',
        'valid_from' => '\OpenAPI\Client\Model\DateTimeContract',
        'valid_to' => '\OpenAPI\Client\Model\DateTimeContract'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'air_temperature' => null,
        'dew_point' => null,
        'pressure' => null,
        'wind' => null,
        'visibility' => null,
        'report' => null,
        'cloud_base' => null,
        'cloud_cover' => null,
        'phenomena_groups' => null,
        'valid_from' => null,
        'valid_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'location' => false,
        'air_temperature' => true,
        'dew_point' => true,
        'pressure' => true,
        'wind' => true,
        'visibility' => true,
        'report' => true,
        'cloud_base' => true,
        'cloud_cover' => true,
        'phenomena_groups' => true,
        'valid_from' => false,
        'valid_to' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'location' => 'location',
        'air_temperature' => 'airTemperature',
        'dew_point' => 'dewPoint',
        'pressure' => 'pressure',
        'wind' => 'wind',
        'visibility' => 'visibility',
        'report' => 'report',
        'cloud_base' => 'cloudBase',
        'cloud_cover' => 'cloudCover',
        'phenomena_groups' => 'phenomenaGroups',
        'valid_from' => 'validFrom',
        'valid_to' => 'validTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'air_temperature' => 'setAirTemperature',
        'dew_point' => 'setDewPoint',
        'pressure' => 'setPressure',
        'wind' => 'setWind',
        'visibility' => 'setVisibility',
        'report' => 'setReport',
        'cloud_base' => 'setCloudBase',
        'cloud_cover' => 'setCloudCover',
        'phenomena_groups' => 'setPhenomenaGroups',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'air_temperature' => 'getAirTemperature',
        'dew_point' => 'getDewPoint',
        'pressure' => 'getPressure',
        'wind' => 'getWind',
        'visibility' => 'getVisibility',
        'report' => 'getReport',
        'cloud_base' => 'getCloudBase',
        'cloud_cover' => 'getCloudCover',
        'phenomena_groups' => 'getPhenomenaGroups',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('air_temperature', $data ?? [], null);
        $this->setIfExists('dew_point', $data ?? [], null);
        $this->setIfExists('pressure', $data ?? [], null);
        $this->setIfExists('wind', $data ?? [], null);
        $this->setIfExists('visibility', $data ?? [], null);
        $this->setIfExists('report', $data ?? [], null);
        $this->setIfExists('cloud_base', $data ?? [], null);
        $this->setIfExists('cloud_cover', $data ?? [], null);
        $this->setIfExists('phenomena_groups', $data ?? [], null);
        $this->setIfExists('valid_from', $data ?? [], null);
        $this->setIfExists('valid_to', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['valid_from'] === null) {
            $invalidProperties[] = "'valid_from' can't be null";
        }
        if ($this->container['valid_to'] === null) {
            $invalidProperties[] = "'valid_to' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\GeoCoordinatesContract
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\GeoCoordinatesContract $location Location where solar information is calculated
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets air_temperature
     *
     * @return \OpenAPI\Client\Model\Temperature|null
     */
    public function getAirTemperature()
    {
        return $this->container['air_temperature'];
    }

    /**
     * Sets air_temperature
     *
     * @param \OpenAPI\Client\Model\Temperature|null $air_temperature Air temperature
     *
     * @return self
     */
    public function setAirTemperature($air_temperature)
    {
        if (is_null($air_temperature)) {
            array_push($this->openAPINullablesSetToNull, 'air_temperature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('air_temperature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['air_temperature'] = $air_temperature;

        return $this;
    }

    /**
     * Gets dew_point
     *
     * @return \OpenAPI\Client\Model\Temperature|null
     */
    public function getDewPoint()
    {
        return $this->container['dew_point'];
    }

    /**
     * Sets dew_point
     *
     * @param \OpenAPI\Client\Model\Temperature|null $dew_point Dew point
     *
     * @return self
     */
    public function setDewPoint($dew_point)
    {
        if (is_null($dew_point)) {
            array_push($this->openAPINullablesSetToNull, 'dew_point');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dew_point', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dew_point'] = $dew_point;

        return $this;
    }

    /**
     * Gets pressure
     *
     * @return \OpenAPI\Client\Model\Pressure|null
     */
    public function getPressure()
    {
        return $this->container['pressure'];
    }

    /**
     * Sets pressure
     *
     * @param \OpenAPI\Client\Model\Pressure|null $pressure Atmospheric pressure
     *
     * @return self
     */
    public function setPressure($pressure)
    {
        if (is_null($pressure)) {
            array_push($this->openAPINullablesSetToNull, 'pressure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pressure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pressure'] = $pressure;

        return $this;
    }

    /**
     * Gets wind
     *
     * @return \OpenAPI\Client\Model\WindContract|null
     */
    public function getWind()
    {
        return $this->container['wind'];
    }

    /**
     * Sets wind
     *
     * @param \OpenAPI\Client\Model\WindContract|null $wind Wind information
     *
     * @return self
     */
    public function setWind($wind)
    {
        if (is_null($wind)) {
            array_push($this->openAPINullablesSetToNull, 'wind');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('wind', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['wind'] = $wind;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \OpenAPI\Client\Model\Distance|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \OpenAPI\Client\Model\Distance|null $visibility Visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        if (is_null($visibility)) {
            array_push($this->openAPINullablesSetToNull, 'visibility');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visibility', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets report
     *
     * @return string|null
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param string|null $report Aviation weather report   (typically a METAR or TAF string, as applicable)
     *
     * @return self
     */
    public function setReport($report)
    {
        if (is_null($report)) {
            array_push($this->openAPINullablesSetToNull, 'report');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('report', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets cloud_base
     *
     * @return \OpenAPI\Client\Model\Distance|null
     */
    public function getCloudBase()
    {
        return $this->container['cloud_base'];
    }

    /**
     * Sets cloud_base
     *
     * @param \OpenAPI\Client\Model\Distance|null $cloud_base Cloud base
     *
     * @return self
     */
    public function setCloudBase($cloud_base)
    {
        if (is_null($cloud_base)) {
            array_push($this->openAPINullablesSetToNull, 'cloud_base');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cloud_base', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cloud_base'] = $cloud_base;

        return $this;
    }

    /**
     * Gets cloud_cover
     *
     * @return \OpenAPI\Client\Model\CloudCover|null
     */
    public function getCloudCover()
    {
        return $this->container['cloud_cover'];
    }

    /**
     * Sets cloud_cover
     *
     * @param \OpenAPI\Client\Model\CloudCover|null $cloud_cover Cloud cover
     *
     * @return self
     */
    public function setCloudCover($cloud_cover)
    {
        if (is_null($cloud_cover)) {
            array_push($this->openAPINullablesSetToNull, 'cloud_cover');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cloud_cover', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cloud_cover'] = $cloud_cover;

        return $this;
    }

    /**
     * Gets phenomena_groups
     *
     * @return \OpenAPI\Client\Model\PhenomenaGroup[]|null
     */
    public function getPhenomenaGroups()
    {
        return $this->container['phenomena_groups'];
    }

    /**
     * Sets phenomena_groups
     *
     * @param \OpenAPI\Client\Model\PhenomenaGroup[]|null $phenomena_groups Weather phenomena groups
     *
     * @return self
     */
    public function setPhenomenaGroups($phenomena_groups)
    {
        if (is_null($phenomena_groups)) {
            array_push($this->openAPINullablesSetToNull, 'phenomena_groups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phenomena_groups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phenomena_groups'] = $phenomena_groups;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return \OpenAPI\Client\Model\DateTimeContract
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \OpenAPI\Client\Model\DateTimeContract $valid_from Valid from
     *
     * @return self
     */
    public function setValidFrom($valid_from)
    {
        if (is_null($valid_from)) {
            throw new \InvalidArgumentException('non-nullable valid_from cannot be null');
        }
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return \OpenAPI\Client\Model\DateTimeContract
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param \OpenAPI\Client\Model\DateTimeContract $valid_to Valid to
     *
     * @return self
     */
    public function setValidTo($valid_to)
    {
        if (is_null($valid_to)) {
            throw new \InvalidArgumentException('non-nullable valid_to cannot be null');
        }
        $this->container['valid_to'] = $valid_to;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


