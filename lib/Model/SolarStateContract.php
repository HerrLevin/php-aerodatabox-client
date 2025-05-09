<?php
/**
 * SolarStateContract
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
 * SolarStateContract Class Doc Comment
 *
 * @category Class
 * @description Solar information at the moment
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SolarStateContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SolarStateContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\OpenAPI\Client\Model\GeoCoordinatesContract',
        'sun_elevation' => '\OpenAPI\Client\Model\Angle',
        'sun_azimuth' => '\OpenAPI\Client\Model\Azimuth',
        'day_time' => '\OpenAPI\Client\Model\DayTime[]',
        'dawn_astronomical' => '\OpenAPI\Client\Model\DateTimeContract',
        'dawn_nautical' => '\OpenAPI\Client\Model\DateTimeContract',
        'dawn_civil' => '\OpenAPI\Client\Model\DateTimeContract',
        'sunrise' => '\OpenAPI\Client\Model\DateTimeContract',
        'noon_true' => '\OpenAPI\Client\Model\DateTimeContract',
        'sunset' => '\OpenAPI\Client\Model\DateTimeContract',
        'dusk_civil' => '\OpenAPI\Client\Model\DateTimeContract',
        'dusk_nautical' => '\OpenAPI\Client\Model\DateTimeContract',
        'dusk_astronomical' => '\OpenAPI\Client\Model\DateTimeContract'
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
        'sun_elevation' => null,
        'sun_azimuth' => null,
        'day_time' => null,
        'dawn_astronomical' => null,
        'dawn_nautical' => null,
        'dawn_civil' => null,
        'sunrise' => null,
        'noon_true' => null,
        'sunset' => null,
        'dusk_civil' => null,
        'dusk_nautical' => null,
        'dusk_astronomical' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'location' => false,
        'sun_elevation' => false,
        'sun_azimuth' => false,
        'day_time' => false,
        'dawn_astronomical' => true,
        'dawn_nautical' => true,
        'dawn_civil' => true,
        'sunrise' => true,
        'noon_true' => true,
        'sunset' => true,
        'dusk_civil' => true,
        'dusk_nautical' => true,
        'dusk_astronomical' => true
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
        'sun_elevation' => 'sunElevation',
        'sun_azimuth' => 'sunAzimuth',
        'day_time' => 'dayTime',
        'dawn_astronomical' => 'dawnAstronomical',
        'dawn_nautical' => 'dawnNautical',
        'dawn_civil' => 'dawnCivil',
        'sunrise' => 'sunrise',
        'noon_true' => 'noonTrue',
        'sunset' => 'sunset',
        'dusk_civil' => 'duskCivil',
        'dusk_nautical' => 'duskNautical',
        'dusk_astronomical' => 'duskAstronomical'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'sun_elevation' => 'setSunElevation',
        'sun_azimuth' => 'setSunAzimuth',
        'day_time' => 'setDayTime',
        'dawn_astronomical' => 'setDawnAstronomical',
        'dawn_nautical' => 'setDawnNautical',
        'dawn_civil' => 'setDawnCivil',
        'sunrise' => 'setSunrise',
        'noon_true' => 'setNoonTrue',
        'sunset' => 'setSunset',
        'dusk_civil' => 'setDuskCivil',
        'dusk_nautical' => 'setDuskNautical',
        'dusk_astronomical' => 'setDuskAstronomical'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'sun_elevation' => 'getSunElevation',
        'sun_azimuth' => 'getSunAzimuth',
        'day_time' => 'getDayTime',
        'dawn_astronomical' => 'getDawnAstronomical',
        'dawn_nautical' => 'getDawnNautical',
        'dawn_civil' => 'getDawnCivil',
        'sunrise' => 'getSunrise',
        'noon_true' => 'getNoonTrue',
        'sunset' => 'getSunset',
        'dusk_civil' => 'getDuskCivil',
        'dusk_nautical' => 'getDuskNautical',
        'dusk_astronomical' => 'getDuskAstronomical'
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
        $this->setIfExists('sun_elevation', $data ?? [], null);
        $this->setIfExists('sun_azimuth', $data ?? [], null);
        $this->setIfExists('day_time', $data ?? [], null);
        $this->setIfExists('dawn_astronomical', $data ?? [], null);
        $this->setIfExists('dawn_nautical', $data ?? [], null);
        $this->setIfExists('dawn_civil', $data ?? [], null);
        $this->setIfExists('sunrise', $data ?? [], null);
        $this->setIfExists('noon_true', $data ?? [], null);
        $this->setIfExists('sunset', $data ?? [], null);
        $this->setIfExists('dusk_civil', $data ?? [], null);
        $this->setIfExists('dusk_nautical', $data ?? [], null);
        $this->setIfExists('dusk_astronomical', $data ?? [], null);
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
        if ($this->container['sun_elevation'] === null) {
            $invalidProperties[] = "'sun_elevation' can't be null";
        }
        if ($this->container['sun_azimuth'] === null) {
            $invalidProperties[] = "'sun_azimuth' can't be null";
        }
        if ($this->container['day_time'] === null) {
            $invalidProperties[] = "'day_time' can't be null";
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
     * Gets sun_elevation
     *
     * @return \OpenAPI\Client\Model\Angle
     */
    public function getSunElevation()
    {
        return $this->container['sun_elevation'];
    }

    /**
     * Sets sun_elevation
     *
     * @param \OpenAPI\Client\Model\Angle $sun_elevation Elevation of the Sun
     *
     * @return self
     */
    public function setSunElevation($sun_elevation)
    {
        if (is_null($sun_elevation)) {
            throw new \InvalidArgumentException('non-nullable sun_elevation cannot be null');
        }
        $this->container['sun_elevation'] = $sun_elevation;

        return $this;
    }

    /**
     * Gets sun_azimuth
     *
     * @return \OpenAPI\Client\Model\Azimuth
     */
    public function getSunAzimuth()
    {
        return $this->container['sun_azimuth'];
    }

    /**
     * Sets sun_azimuth
     *
     * @param \OpenAPI\Client\Model\Azimuth $sun_azimuth Azimuth of the Sun
     *
     * @return self
     */
    public function setSunAzimuth($sun_azimuth)
    {
        if (is_null($sun_azimuth)) {
            throw new \InvalidArgumentException('non-nullable sun_azimuth cannot be null');
        }
        $this->container['sun_azimuth'] = $sun_azimuth;

        return $this;
    }

    /**
     * Gets day_time
     *
     * @return \OpenAPI\Client\Model\DayTime[]
     */
    public function getDayTime()
    {
        return $this->container['day_time'];
    }

    /**
     * Sets day_time
     *
     * @param \OpenAPI\Client\Model\DayTime[] $day_time Daytime states
     *
     * @return self
     */
    public function setDayTime($day_time)
    {
        if (is_null($day_time)) {
            throw new \InvalidArgumentException('non-nullable day_time cannot be null');
        }
        $this->container['day_time'] = $day_time;

        return $this;
    }

    /**
     * Gets dawn_astronomical
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDawnAstronomical()
    {
        return $this->container['dawn_astronomical'];
    }

    /**
     * Sets dawn_astronomical
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dawn_astronomical The time of the astronomical dawn (the Sun rises above 18 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDawnAstronomical($dawn_astronomical)
    {
        if (is_null($dawn_astronomical)) {
            array_push($this->openAPINullablesSetToNull, 'dawn_astronomical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dawn_astronomical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dawn_astronomical'] = $dawn_astronomical;

        return $this;
    }

    /**
     * Gets dawn_nautical
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDawnNautical()
    {
        return $this->container['dawn_nautical'];
    }

    /**
     * Sets dawn_nautical
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dawn_nautical The time of the nautical dawn (the Sun rises above 12 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDawnNautical($dawn_nautical)
    {
        if (is_null($dawn_nautical)) {
            array_push($this->openAPINullablesSetToNull, 'dawn_nautical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dawn_nautical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dawn_nautical'] = $dawn_nautical;

        return $this;
    }

    /**
     * Gets dawn_civil
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDawnCivil()
    {
        return $this->container['dawn_civil'];
    }

    /**
     * Sets dawn_civil
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dawn_civil The time of the civil dawn (the Sun rises above 6 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDawnCivil($dawn_civil)
    {
        if (is_null($dawn_civil)) {
            array_push($this->openAPINullablesSetToNull, 'dawn_civil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dawn_civil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dawn_civil'] = $dawn_civil;

        return $this;
    }

    /**
     * Gets sunrise
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getSunrise()
    {
        return $this->container['sunrise'];
    }

    /**
     * Sets sunrise
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $sunrise Time of the sunrise.  May be absent during polar day / night.
     *
     * @return self
     */
    public function setSunrise($sunrise)
    {
        if (is_null($sunrise)) {
            array_push($this->openAPINullablesSetToNull, 'sunrise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sunrise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sunrise'] = $sunrise;

        return $this;
    }

    /**
     * Gets noon_true
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getNoonTrue()
    {
        return $this->container['noon_true'];
    }

    /**
     * Sets noon_true
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $noon_true The time of the true solar noon.  May be absent during polar day / night.
     *
     * @return self
     */
    public function setNoonTrue($noon_true)
    {
        if (is_null($noon_true)) {
            array_push($this->openAPINullablesSetToNull, 'noon_true');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('noon_true', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['noon_true'] = $noon_true;

        return $this;
    }

    /**
     * Gets sunset
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getSunset()
    {
        return $this->container['sunset'];
    }

    /**
     * Sets sunset
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $sunset Time of the sunset.  May be absent during polar day / night.
     *
     * @return self
     */
    public function setSunset($sunset)
    {
        if (is_null($sunset)) {
            array_push($this->openAPINullablesSetToNull, 'sunset');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sunset', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sunset'] = $sunset;

        return $this;
    }

    /**
     * Gets dusk_civil
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDuskCivil()
    {
        return $this->container['dusk_civil'];
    }

    /**
     * Sets dusk_civil
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dusk_civil The time of the civil dawn (the Sun sets below 6 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDuskCivil($dusk_civil)
    {
        if (is_null($dusk_civil)) {
            array_push($this->openAPINullablesSetToNull, 'dusk_civil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dusk_civil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dusk_civil'] = $dusk_civil;

        return $this;
    }

    /**
     * Gets dusk_nautical
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDuskNautical()
    {
        return $this->container['dusk_nautical'];
    }

    /**
     * Sets dusk_nautical
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dusk_nautical The time of the nautical dawn (the Sun sets below 12 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDuskNautical($dusk_nautical)
    {
        if (is_null($dusk_nautical)) {
            array_push($this->openAPINullablesSetToNull, 'dusk_nautical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dusk_nautical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dusk_nautical'] = $dusk_nautical;

        return $this;
    }

    /**
     * Gets dusk_astronomical
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getDuskAstronomical()
    {
        return $this->container['dusk_astronomical'];
    }

    /**
     * Sets dusk_astronomical
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $dusk_astronomical The time of the astronomical dawn (the Sun sets below 18 degrees below the horizon).  May be absent during polar day / night.
     *
     * @return self
     */
    public function setDuskAstronomical($dusk_astronomical)
    {
        if (is_null($dusk_astronomical)) {
            array_push($this->openAPINullablesSetToNull, 'dusk_astronomical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dusk_astronomical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dusk_astronomical'] = $dusk_astronomical;

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


