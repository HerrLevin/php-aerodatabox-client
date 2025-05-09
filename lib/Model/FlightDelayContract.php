<?php
/**
 * FlightDelayContract
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
 * FlightDelayContract Class Doc Comment
 *
 * @category Class
 * @description Delay statistics for a flight movement
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlightDelayContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlightDelayContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'airport_icao' => 'string',
        'class' => '\OpenAPI\Client\Model\StatisticClass',
        'scheduled_hour_utc' => 'int',
        'median_delay' => 'string',
        'delay_percentiles' => '\OpenAPI\Client\Model\PercentileBracketContract[]',
        'num_considered_flights' => 'int',
        'num_flights_delayed_brackets' => '\OpenAPI\Client\Model\DelayBracketContract[]',
        'from_utc' => '\DateTime',
        'to_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'airport_icao' => null,
        'class' => null,
        'scheduled_hour_utc' => 'int32',
        'median_delay' => 'date-span',
        'delay_percentiles' => null,
        'num_considered_flights' => 'int32',
        'num_flights_delayed_brackets' => null,
        'from_utc' => 'date-time',
        'to_utc' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'airport_icao' => false,
        'class' => false,
        'scheduled_hour_utc' => true,
        'median_delay' => false,
        'delay_percentiles' => false,
        'num_considered_flights' => false,
        'num_flights_delayed_brackets' => false,
        'from_utc' => false,
        'to_utc' => false
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
        'airport_icao' => 'airportIcao',
        'class' => 'class',
        'scheduled_hour_utc' => 'scheduledHourUtc',
        'median_delay' => 'medianDelay',
        'delay_percentiles' => 'delayPercentiles',
        'num_considered_flights' => 'numConsideredFlights',
        'num_flights_delayed_brackets' => 'numFlightsDelayedBrackets',
        'from_utc' => 'fromUtc',
        'to_utc' => 'toUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'airport_icao' => 'setAirportIcao',
        'class' => 'setClass',
        'scheduled_hour_utc' => 'setScheduledHourUtc',
        'median_delay' => 'setMedianDelay',
        'delay_percentiles' => 'setDelayPercentiles',
        'num_considered_flights' => 'setNumConsideredFlights',
        'num_flights_delayed_brackets' => 'setNumFlightsDelayedBrackets',
        'from_utc' => 'setFromUtc',
        'to_utc' => 'setToUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'airport_icao' => 'getAirportIcao',
        'class' => 'getClass',
        'scheduled_hour_utc' => 'getScheduledHourUtc',
        'median_delay' => 'getMedianDelay',
        'delay_percentiles' => 'getDelayPercentiles',
        'num_considered_flights' => 'getNumConsideredFlights',
        'num_flights_delayed_brackets' => 'getNumFlightsDelayedBrackets',
        'from_utc' => 'getFromUtc',
        'to_utc' => 'getToUtc'
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
        $this->setIfExists('airport_icao', $data ?? [], null);
        $this->setIfExists('class', $data ?? [], null);
        $this->setIfExists('scheduled_hour_utc', $data ?? [], null);
        $this->setIfExists('median_delay', $data ?? [], null);
        $this->setIfExists('delay_percentiles', $data ?? [], null);
        $this->setIfExists('num_considered_flights', $data ?? [], null);
        $this->setIfExists('num_flights_delayed_brackets', $data ?? [], null);
        $this->setIfExists('from_utc', $data ?? [], null);
        $this->setIfExists('to_utc', $data ?? [], null);
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

        if ($this->container['airport_icao'] === null) {
            $invalidProperties[] = "'airport_icao' can't be null";
        }
        if ((mb_strlen($this->container['airport_icao']) < 1)) {
            $invalidProperties[] = "invalid value for 'airport_icao', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
        }
        if ($this->container['median_delay'] === null) {
            $invalidProperties[] = "'median_delay' can't be null";
        }
        if ($this->container['delay_percentiles'] === null) {
            $invalidProperties[] = "'delay_percentiles' can't be null";
        }
        if ($this->container['num_considered_flights'] === null) {
            $invalidProperties[] = "'num_considered_flights' can't be null";
        }
        if ($this->container['num_flights_delayed_brackets'] === null) {
            $invalidProperties[] = "'num_flights_delayed_brackets' can't be null";
        }
        if ($this->container['from_utc'] === null) {
            $invalidProperties[] = "'from_utc' can't be null";
        }
        if ($this->container['to_utc'] === null) {
            $invalidProperties[] = "'to_utc' can't be null";
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
     * Gets airport_icao
     *
     * @return string
     */
    public function getAirportIcao()
    {
        return $this->container['airport_icao'];
    }

    /**
     * Sets airport_icao
     *
     * @param string $airport_icao ICAO code of the airport at which statistics is observed
     *
     * @return self
     */
    public function setAirportIcao($airport_icao)
    {
        if (is_null($airport_icao)) {
            throw new \InvalidArgumentException('non-nullable airport_icao cannot be null');
        }

        if ((mb_strlen($airport_icao) < 1)) {
            throw new \InvalidArgumentException('invalid length for $airport_icao when calling FlightDelayContract., must be bigger than or equal to 1.');
        }

        $this->container['airport_icao'] = $airport_icao;

        return $this;
    }

    /**
     * Gets class
     *
     * @return \OpenAPI\Client\Model\StatisticClass
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param \OpenAPI\Client\Model\StatisticClass $class Class of statistics<p>Possible values:</p> <ul> <li><b>0 - Flight</b></li> <li><b>1 - FlightAndHour</b></li> </ul>
     *
     * @return self
     */
    public function setClass($class)
    {
        if (is_null($class)) {
            throw new \InvalidArgumentException('non-nullable class cannot be null');
        }
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets scheduled_hour_utc
     *
     * @return int|null
     */
    public function getScheduledHourUtc()
    {
        return $this->container['scheduled_hour_utc'];
    }

    /**
     * Sets scheduled_hour_utc
     *
     * @param int|null $scheduled_hour_utc Hour on which flight is scheduled (represented in UTC).    If provided, it separates the statistics for the same flight departing/arriving at different time of day  on different days within the observed period.
     *
     * @return self
     */
    public function setScheduledHourUtc($scheduled_hour_utc)
    {
        if (is_null($scheduled_hour_utc)) {
            array_push($this->openAPINullablesSetToNull, 'scheduled_hour_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduled_hour_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduled_hour_utc'] = $scheduled_hour_utc;

        return $this;
    }

    /**
     * Gets median_delay
     *
     * @return string
     */
    public function getMedianDelay()
    {
        return $this->container['median_delay'];
    }

    /**
     * Sets median_delay
     *
     * @param string $median_delay Median historic delay of the flight (format: [-]hh:mm:ss).  Value can be negative (therefore, means early occurence).
     *
     * @return self
     */
    public function setMedianDelay($median_delay)
    {
        if (is_null($median_delay)) {
            throw new \InvalidArgumentException('non-nullable median_delay cannot be null');
        }
        $this->container['median_delay'] = $median_delay;

        return $this;
    }

    /**
     * Gets delay_percentiles
     *
     * @return \OpenAPI\Client\Model\PercentileBracketContract[]
     */
    public function getDelayPercentiles()
    {
        return $this->container['delay_percentiles'];
    }

    /**
     * Sets delay_percentiles
     *
     * @param \OpenAPI\Client\Model\PercentileBracketContract[] $delay_percentiles Distribution of historic delays of the flight in percentiles from 5 percentile to 95 percentile in steps of 5 percentile,   allowing for a more detailed analysis of delay patterns beyond simple averages or medians.
     *
     * @return self
     */
    public function setDelayPercentiles($delay_percentiles)
    {
        if (is_null($delay_percentiles)) {
            throw new \InvalidArgumentException('non-nullable delay_percentiles cannot be null');
        }
        $this->container['delay_percentiles'] = $delay_percentiles;

        return $this;
    }

    /**
     * Gets num_considered_flights
     *
     * @return int
     */
    public function getNumConsideredFlights()
    {
        return $this->container['num_considered_flights'];
    }

    /**
     * Sets num_considered_flights
     *
     * @param int $num_considered_flights The number of flight movements taken into account to calculate this  statistics.
     *
     * @return self
     */
    public function setNumConsideredFlights($num_considered_flights)
    {
        if (is_null($num_considered_flights)) {
            throw new \InvalidArgumentException('non-nullable num_considered_flights cannot be null');
        }
        $this->container['num_considered_flights'] = $num_considered_flights;

        return $this;
    }

    /**
     * Gets num_flights_delayed_brackets
     *
     * @return \OpenAPI\Client\Model\DelayBracketContract[]
     */
    public function getNumFlightsDelayedBrackets()
    {
        return $this->container['num_flights_delayed_brackets'];
    }

    /**
     * Sets num_flights_delayed_brackets
     *
     * @param \OpenAPI\Client\Model\DelayBracketContract[] $num_flights_delayed_brackets Brackets containing information more detailed information about  how many flights were delayed/early per specific delay range brackets  (e.g. late from 15 to 30 minutes, from 30 to 60, etc.)
     *
     * @return self
     */
    public function setNumFlightsDelayedBrackets($num_flights_delayed_brackets)
    {
        if (is_null($num_flights_delayed_brackets)) {
            throw new \InvalidArgumentException('non-nullable num_flights_delayed_brackets cannot be null');
        }
        $this->container['num_flights_delayed_brackets'] = $num_flights_delayed_brackets;

        return $this;
    }

    /**
     * Gets from_utc
     *
     * @return \DateTime
     */
    public function getFromUtc()
    {
        return $this->container['from_utc'];
    }

    /**
     * Sets from_utc
     *
     * @param \DateTime $from_utc The beginning of the time range within which flght delay information is calculated (represented in UTC time)
     *
     * @return self
     */
    public function setFromUtc($from_utc)
    {
        if (is_null($from_utc)) {
            throw new \InvalidArgumentException('non-nullable from_utc cannot be null');
        }
        $this->container['from_utc'] = $from_utc;

        return $this;
    }

    /**
     * Gets to_utc
     *
     * @return \DateTime
     */
    public function getToUtc()
    {
        return $this->container['to_utc'];
    }

    /**
     * Sets to_utc
     *
     * @param \DateTime $to_utc The end of the time range within which flght delay information is calculated (represented in UTC time)
     *
     * @return self
     */
    public function setToUtc($to_utc)
    {
        if (is_null($to_utc)) {
            throw new \InvalidArgumentException('non-nullable to_utc cannot be null');
        }
        $this->container['to_utc'] = $to_utc;

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


