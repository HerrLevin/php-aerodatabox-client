<?php
/**
 * FlightLocationContract
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
 * FlightLocationContract Class Doc Comment
 *
 * @category Class
 * @description Positional information about flight: location, altitude, speed and track
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlightLocationContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlightLocationContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pressure_altitude' => '\OpenAPI\Client\Model\Distance',
        'altitude' => '\OpenAPI\Client\Model\Distance',
        'pressure' => '\OpenAPI\Client\Model\Pressure',
        'ground_speed' => '\OpenAPI\Client\Model\Speed',
        'true_track' => '\OpenAPI\Client\Model\Azimuth',
        'reported_at_utc' => '\DateTime',
        'lat' => 'float',
        'lon' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pressure_altitude' => null,
        'altitude' => null,
        'pressure' => null,
        'ground_speed' => null,
        'true_track' => null,
        'reported_at_utc' => 'date-time',
        'lat' => 'float',
        'lon' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pressure_altitude' => false,
        'altitude' => false,
        'pressure' => false,
        'ground_speed' => false,
        'true_track' => false,
        'reported_at_utc' => false,
        'lat' => false,
        'lon' => false
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
        'pressure_altitude' => 'pressureAltitude',
        'altitude' => 'altitude',
        'pressure' => 'pressure',
        'ground_speed' => 'groundSpeed',
        'true_track' => 'trueTrack',
        'reported_at_utc' => 'reportedAtUtc',
        'lat' => 'lat',
        'lon' => 'lon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pressure_altitude' => 'setPressureAltitude',
        'altitude' => 'setAltitude',
        'pressure' => 'setPressure',
        'ground_speed' => 'setGroundSpeed',
        'true_track' => 'setTrueTrack',
        'reported_at_utc' => 'setReportedAtUtc',
        'lat' => 'setLat',
        'lon' => 'setLon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pressure_altitude' => 'getPressureAltitude',
        'altitude' => 'getAltitude',
        'pressure' => 'getPressure',
        'ground_speed' => 'getGroundSpeed',
        'true_track' => 'getTrueTrack',
        'reported_at_utc' => 'getReportedAtUtc',
        'lat' => 'getLat',
        'lon' => 'getLon'
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
        $this->setIfExists('pressure_altitude', $data ?? [], null);
        $this->setIfExists('altitude', $data ?? [], null);
        $this->setIfExists('pressure', $data ?? [], null);
        $this->setIfExists('ground_speed', $data ?? [], null);
        $this->setIfExists('true_track', $data ?? [], null);
        $this->setIfExists('reported_at_utc', $data ?? [], null);
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('lon', $data ?? [], null);
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

        if ($this->container['pressure_altitude'] === null) {
            $invalidProperties[] = "'pressure_altitude' can't be null";
        }
        if ($this->container['altitude'] === null) {
            $invalidProperties[] = "'altitude' can't be null";
        }
        if ($this->container['pressure'] === null) {
            $invalidProperties[] = "'pressure' can't be null";
        }
        if ($this->container['ground_speed'] === null) {
            $invalidProperties[] = "'ground_speed' can't be null";
        }
        if ($this->container['true_track'] === null) {
            $invalidProperties[] = "'true_track' can't be null";
        }
        if ($this->container['reported_at_utc'] === null) {
            $invalidProperties[] = "'reported_at_utc' can't be null";
        }
        if ($this->container['lat'] === null) {
            $invalidProperties[] = "'lat' can't be null";
        }
        if (($this->container['lat'] > 90)) {
            $invalidProperties[] = "invalid value for 'lat', must be smaller than or equal to 90.";
        }

        if (($this->container['lat'] < -90)) {
            $invalidProperties[] = "invalid value for 'lat', must be bigger than or equal to -90.";
        }

        if ($this->container['lon'] === null) {
            $invalidProperties[] = "'lon' can't be null";
        }
        if (($this->container['lon'] > 180)) {
            $invalidProperties[] = "invalid value for 'lon', must be smaller than or equal to 180.";
        }

        if (($this->container['lon'] < -180)) {
            $invalidProperties[] = "invalid value for 'lon', must be bigger than or equal to -180.";
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
     * Gets pressure_altitude
     *
     * @return \OpenAPI\Client\Model\Distance
     */
    public function getPressureAltitude()
    {
        return $this->container['pressure_altitude'];
    }

    /**
     * Sets pressure_altitude
     *
     * @param \OpenAPI\Client\Model\Distance $pressure_altitude Pressure altitude adjusted to ISA
     *
     * @return self
     */
    public function setPressureAltitude($pressure_altitude)
    {
        if (is_null($pressure_altitude)) {
            throw new \InvalidArgumentException('non-nullable pressure_altitude cannot be null');
        }
        $this->container['pressure_altitude'] = $pressure_altitude;

        return $this;
    }

    /**
     * Gets altitude
     *
     * @return \OpenAPI\Client\Model\Distance
     */
    public function getAltitude()
    {
        return $this->container['altitude'];
    }

    /**
     * Sets altitude
     *
     * @param \OpenAPI\Client\Model\Distance $altitude Altitude adjusted to pressure setting (QNH)  Gives approximately the altitude above mean sea level (MSL)
     *
     * @return self
     */
    public function setAltitude($altitude)
    {
        if (is_null($altitude)) {
            throw new \InvalidArgumentException('non-nullable altitude cannot be null');
        }
        $this->container['altitude'] = $altitude;

        return $this;
    }

    /**
     * Gets pressure
     *
     * @return \OpenAPI\Client\Model\Pressure
     */
    public function getPressure()
    {
        return $this->container['pressure'];
    }

    /**
     * Sets pressure
     *
     * @param \OpenAPI\Client\Model\Pressure $pressure Pressure setting (QNH) used to calculate altitude from pressure altitude
     *
     * @return self
     */
    public function setPressure($pressure)
    {
        if (is_null($pressure)) {
            throw new \InvalidArgumentException('non-nullable pressure cannot be null');
        }
        $this->container['pressure'] = $pressure;

        return $this;
    }

    /**
     * Gets ground_speed
     *
     * @return \OpenAPI\Client\Model\Speed
     */
    public function getGroundSpeed()
    {
        return $this->container['ground_speed'];
    }

    /**
     * Sets ground_speed
     *
     * @param \OpenAPI\Client\Model\Speed $ground_speed Ground speed
     *
     * @return self
     */
    public function setGroundSpeed($ground_speed)
    {
        if (is_null($ground_speed)) {
            throw new \InvalidArgumentException('non-nullable ground_speed cannot be null');
        }
        $this->container['ground_speed'] = $ground_speed;

        return $this;
    }

    /**
     * Gets true_track
     *
     * @return \OpenAPI\Client\Model\Azimuth
     */
    public function getTrueTrack()
    {
        return $this->container['true_track'];
    }

    /**
     * Sets true_track
     *
     * @param \OpenAPI\Client\Model\Azimuth $true_track True track
     *
     * @return self
     */
    public function setTrueTrack($true_track)
    {
        if (is_null($true_track)) {
            throw new \InvalidArgumentException('non-nullable true_track cannot be null');
        }
        $this->container['true_track'] = $true_track;

        return $this;
    }

    /**
     * Gets reported_at_utc
     *
     * @return \DateTime
     */
    public function getReportedAtUtc()
    {
        return $this->container['reported_at_utc'];
    }

    /**
     * Sets reported_at_utc
     *
     * @param \DateTime $reported_at_utc Time (UTC) of when this positional data was reported
     *
     * @return self
     */
    public function setReportedAtUtc($reported_at_utc)
    {
        if (is_null($reported_at_utc)) {
            throw new \InvalidArgumentException('non-nullable reported_at_utc cannot be null');
        }
        $this->container['reported_at_utc'] = $reported_at_utc;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat Latitude, in degrees
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            throw new \InvalidArgumentException('non-nullable lat cannot be null');
        }

        if (($lat > 90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling FlightLocationContract., must be smaller than or equal to 90.');
        }
        if (($lat < -90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling FlightLocationContract., must be bigger than or equal to -90.');
        }

        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param float $lon Longitude, in degrees
     *
     * @return self
     */
    public function setLon($lon)
    {
        if (is_null($lon)) {
            throw new \InvalidArgumentException('non-nullable lon cannot be null');
        }

        if (($lon > 180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling FlightLocationContract., must be smaller than or equal to 180.');
        }
        if (($lon < -180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling FlightLocationContract., must be bigger than or equal to -180.');
        }

        $this->container['lon'] = $lon;

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


