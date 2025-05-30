<?php
/**
 * AirportContract
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
 * AirportContract Class Doc Comment
 *
 * @category Class
 * @description Single airport data
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AirportContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AirportContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'icao' => 'string',
        'iata' => 'string',
        'local_code' => 'string',
        'short_name' => 'string',
        'full_name' => 'string',
        'municipality_name' => 'string',
        'location' => '\OpenAPI\Client\Model\GeoCoordinatesContract',
        'elevation' => '\OpenAPI\Client\Model\Distance',
        'country' => '\OpenAPI\Client\Model\CountryContract',
        'continent' => '\OpenAPI\Client\Model\ContinentContract',
        'time_zone' => 'string',
        'urls' => '\OpenAPI\Client\Model\AirportUrlsContract',
        'runways' => '\OpenAPI\Client\Model\RunwayContract[]',
        'current_time' => '\OpenAPI\Client\Model\AirportLocalTimeContract'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'icao' => null,
        'iata' => null,
        'local_code' => null,
        'short_name' => null,
        'full_name' => null,
        'municipality_name' => null,
        'location' => null,
        'elevation' => null,
        'country' => null,
        'continent' => null,
        'time_zone' => null,
        'urls' => null,
        'runways' => null,
        'current_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'icao' => true,
        'iata' => true,
        'local_code' => true,
        'short_name' => true,
        'full_name' => false,
        'municipality_name' => true,
        'location' => false,
        'elevation' => false,
        'country' => false,
        'continent' => false,
        'time_zone' => false,
        'urls' => false,
        'runways' => true,
        'current_time' => true
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
        'icao' => 'icao',
        'iata' => 'iata',
        'local_code' => 'localCode',
        'short_name' => 'shortName',
        'full_name' => 'fullName',
        'municipality_name' => 'municipalityName',
        'location' => 'location',
        'elevation' => 'elevation',
        'country' => 'country',
        'continent' => 'continent',
        'time_zone' => 'timeZone',
        'urls' => 'urls',
        'runways' => 'runways',
        'current_time' => 'currentTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icao' => 'setIcao',
        'iata' => 'setIata',
        'local_code' => 'setLocalCode',
        'short_name' => 'setShortName',
        'full_name' => 'setFullName',
        'municipality_name' => 'setMunicipalityName',
        'location' => 'setLocation',
        'elevation' => 'setElevation',
        'country' => 'setCountry',
        'continent' => 'setContinent',
        'time_zone' => 'setTimeZone',
        'urls' => 'setUrls',
        'runways' => 'setRunways',
        'current_time' => 'setCurrentTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icao' => 'getIcao',
        'iata' => 'getIata',
        'local_code' => 'getLocalCode',
        'short_name' => 'getShortName',
        'full_name' => 'getFullName',
        'municipality_name' => 'getMunicipalityName',
        'location' => 'getLocation',
        'elevation' => 'getElevation',
        'country' => 'getCountry',
        'continent' => 'getContinent',
        'time_zone' => 'getTimeZone',
        'urls' => 'getUrls',
        'runways' => 'getRunways',
        'current_time' => 'getCurrentTime'
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
        $this->setIfExists('icao', $data ?? [], null);
        $this->setIfExists('iata', $data ?? [], null);
        $this->setIfExists('local_code', $data ?? [], null);
        $this->setIfExists('short_name', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('municipality_name', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('elevation', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('continent', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('runways', $data ?? [], null);
        $this->setIfExists('current_time', $data ?? [], null);
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

        if ($this->container['full_name'] === null) {
            $invalidProperties[] = "'full_name' can't be null";
        }
        if ((mb_strlen($this->container['full_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'full_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['elevation'] === null) {
            $invalidProperties[] = "'elevation' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['continent'] === null) {
            $invalidProperties[] = "'continent' can't be null";
        }
        if ($this->container['time_zone'] === null) {
            $invalidProperties[] = "'time_zone' can't be null";
        }
        if ((mb_strlen($this->container['time_zone']) < 1)) {
            $invalidProperties[] = "invalid value for 'time_zone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
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
     * Gets icao
     *
     * @return string|null
     */
    public function getIcao()
    {
        return $this->container['icao'];
    }

    /**
     * Sets icao
     *
     * @param string|null $icao ICAO code of the airport
     *
     * @return self
     */
    public function setIcao($icao)
    {
        if (is_null($icao)) {
            array_push($this->openAPINullablesSetToNull, 'icao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icao'] = $icao;

        return $this;
    }

    /**
     * Gets iata
     *
     * @return string|null
     */
    public function getIata()
    {
        return $this->container['iata'];
    }

    /**
     * Sets iata
     *
     * @param string|null $iata IATA code of the airport
     *
     * @return self
     */
    public function setIata($iata)
    {
        if (is_null($iata)) {
            array_push($this->openAPINullablesSetToNull, 'iata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iata'] = $iata;

        return $this;
    }

    /**
     * Gets local_code
     *
     * @return string|null
     */
    public function getLocalCode()
    {
        return $this->container['local_code'];
    }

    /**
     * Sets local_code
     *
     * @param string|null $local_code Code of the airport within the local or national coding system
     *
     * @return self
     */
    public function setLocalCode($local_code)
    {
        if (is_null($local_code)) {
            array_push($this->openAPINullablesSetToNull, 'local_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('local_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['local_code'] = $local_code;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name Shortened name of the airport
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        if (is_null($short_name)) {
            array_push($this->openAPINullablesSetToNull, 'short_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('short_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name Full name of the airport (derived from own airport name and municipality name)
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }

        if ((mb_strlen($full_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $full_name when calling AirportContract., must be bigger than or equal to 1.');
        }

        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets municipality_name
     *
     * @return string|null
     */
    public function getMunicipalityName()
    {
        return $this->container['municipality_name'];
    }

    /**
     * Sets municipality_name
     *
     * @param string|null $municipality_name Name of the municipality this airport belongs to
     *
     * @return self
     */
    public function setMunicipalityName($municipality_name)
    {
        if (is_null($municipality_name)) {
            array_push($this->openAPINullablesSetToNull, 'municipality_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('municipality_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['municipality_name'] = $municipality_name;

        return $this;
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
     * @param \OpenAPI\Client\Model\GeoCoordinatesContract $location Location of the airport
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
     * Gets elevation
     *
     * @return \OpenAPI\Client\Model\Distance
     */
    public function getElevation()
    {
        return $this->container['elevation'];
    }

    /**
     * Sets elevation
     *
     * @param \OpenAPI\Client\Model\Distance $elevation Elevation of the airport
     *
     * @return self
     */
    public function setElevation($elevation)
    {
        if (is_null($elevation)) {
            throw new \InvalidArgumentException('non-nullable elevation cannot be null');
        }
        $this->container['elevation'] = $elevation;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\CountryContract
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\CountryContract $country Country airport belongs to
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets continent
     *
     * @return \OpenAPI\Client\Model\ContinentContract
     */
    public function getContinent()
    {
        return $this->container['continent'];
    }

    /**
     * Sets continent
     *
     * @param \OpenAPI\Client\Model\ContinentContract $continent Continent airport belongs to
     *
     * @return self
     */
    public function setContinent($continent)
    {
        if (is_null($continent)) {
            throw new \InvalidArgumentException('non-nullable continent cannot be null');
        }
        $this->container['continent'] = $continent;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone Time zone of the airport in Olson format (e.g. \"Europe/Amsterdam\")
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }

        if ((mb_strlen($time_zone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $time_zone when calling AirportContract., must be bigger than or equal to 1.');
        }

        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return \OpenAPI\Client\Model\AirportUrlsContract
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param \OpenAPI\Client\Model\AirportUrlsContract $urls Links and URLs related to airport
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets runways
     *
     * @return \OpenAPI\Client\Model\RunwayContract[]|null
     */
    public function getRunways()
    {
        return $this->container['runways'];
    }

    /**
     * Sets runways
     *
     * @param \OpenAPI\Client\Model\RunwayContract[]|null $runways List of runway information, if requested
     *
     * @return self
     */
    public function setRunways($runways)
    {
        if (is_null($runways)) {
            array_push($this->openAPINullablesSetToNull, 'runways');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('runways', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['runways'] = $runways;

        return $this;
    }

    /**
     * Gets current_time
     *
     * @return \OpenAPI\Client\Model\AirportLocalTimeContract|null
     */
    public function getCurrentTime()
    {
        return $this->container['current_time'];
    }

    /**
     * Sets current_time
     *
     * @param \OpenAPI\Client\Model\AirportLocalTimeContract|null $current_time Current time information, if requested
     *
     * @return self
     */
    public function setCurrentTime($current_time)
    {
        if (is_null($current_time)) {
            array_push($this->openAPINullablesSetToNull, 'current_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('current_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['current_time'] = $current_time;

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


