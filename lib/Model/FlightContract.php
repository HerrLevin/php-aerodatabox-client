<?php
/**
 * FlightContract
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
 * FlightContract Class Doc Comment
 *
 * @category Class
 * @description Information about individual flight
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlightContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlightContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'great_circle_distance' => '\OpenAPI\Client\Model\Distance',
        'departure' => '\OpenAPI\Client\Model\FlightAirportMovementContract',
        'arrival' => '\OpenAPI\Client\Model\FlightAirportMovementContract',
        'last_updated_utc' => '\DateTime',
        'number' => 'string',
        'call_sign' => 'string',
        'status' => '\OpenAPI\Client\Model\FlightStatus',
        'codeshare_status' => '\OpenAPI\Client\Model\CodeshareStatus',
        'is_cargo' => 'bool',
        'aircraft' => '\OpenAPI\Client\Model\FlightAircraftContract',
        'airline' => '\OpenAPI\Client\Model\FlightAirlineContract',
        'location' => '\OpenAPI\Client\Model\FlightLocationContract'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'great_circle_distance' => null,
        'departure' => null,
        'arrival' => null,
        'last_updated_utc' => 'date-time',
        'number' => null,
        'call_sign' => null,
        'status' => null,
        'codeshare_status' => null,
        'is_cargo' => null,
        'aircraft' => null,
        'airline' => null,
        'location' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'great_circle_distance' => true,
        'departure' => false,
        'arrival' => false,
        'last_updated_utc' => false,
        'number' => false,
        'call_sign' => true,
        'status' => false,
        'codeshare_status' => false,
        'is_cargo' => false,
        'aircraft' => true,
        'airline' => true,
        'location' => true
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
        'great_circle_distance' => 'greatCircleDistance',
        'departure' => 'departure',
        'arrival' => 'arrival',
        'last_updated_utc' => 'lastUpdatedUtc',
        'number' => 'number',
        'call_sign' => 'callSign',
        'status' => 'status',
        'codeshare_status' => 'codeshareStatus',
        'is_cargo' => 'isCargo',
        'aircraft' => 'aircraft',
        'airline' => 'airline',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'great_circle_distance' => 'setGreatCircleDistance',
        'departure' => 'setDeparture',
        'arrival' => 'setArrival',
        'last_updated_utc' => 'setLastUpdatedUtc',
        'number' => 'setNumber',
        'call_sign' => 'setCallSign',
        'status' => 'setStatus',
        'codeshare_status' => 'setCodeshareStatus',
        'is_cargo' => 'setIsCargo',
        'aircraft' => 'setAircraft',
        'airline' => 'setAirline',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'great_circle_distance' => 'getGreatCircleDistance',
        'departure' => 'getDeparture',
        'arrival' => 'getArrival',
        'last_updated_utc' => 'getLastUpdatedUtc',
        'number' => 'getNumber',
        'call_sign' => 'getCallSign',
        'status' => 'getStatus',
        'codeshare_status' => 'getCodeshareStatus',
        'is_cargo' => 'getIsCargo',
        'aircraft' => 'getAircraft',
        'airline' => 'getAirline',
        'location' => 'getLocation'
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
        $this->setIfExists('great_circle_distance', $data ?? [], null);
        $this->setIfExists('departure', $data ?? [], null);
        $this->setIfExists('arrival', $data ?? [], null);
        $this->setIfExists('last_updated_utc', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('call_sign', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('codeshare_status', $data ?? [], null);
        $this->setIfExists('is_cargo', $data ?? [], null);
        $this->setIfExists('aircraft', $data ?? [], null);
        $this->setIfExists('airline', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
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

        if ($this->container['departure'] === null) {
            $invalidProperties[] = "'departure' can't be null";
        }
        if ($this->container['arrival'] === null) {
            $invalidProperties[] = "'arrival' can't be null";
        }
        if ($this->container['last_updated_utc'] === null) {
            $invalidProperties[] = "'last_updated_utc' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ((mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['codeshare_status'] === null) {
            $invalidProperties[] = "'codeshare_status' can't be null";
        }
        if ($this->container['is_cargo'] === null) {
            $invalidProperties[] = "'is_cargo' can't be null";
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
     * Gets great_circle_distance
     *
     * @return \OpenAPI\Client\Model\Distance|null
     */
    public function getGreatCircleDistance()
    {
        return $this->container['great_circle_distance'];
    }

    /**
     * Sets great_circle_distance
     *
     * @param \OpenAPI\Client\Model\Distance|null $great_circle_distance Great circle distance measured directly between origin and destination of the flight (if both are known)
     *
     * @return self
     */
    public function setGreatCircleDistance($great_circle_distance)
    {
        if (is_null($great_circle_distance)) {
            array_push($this->openAPINullablesSetToNull, 'great_circle_distance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('great_circle_distance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['great_circle_distance'] = $great_circle_distance;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return \OpenAPI\Client\Model\FlightAirportMovementContract
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \OpenAPI\Client\Model\FlightAirportMovementContract $departure Departure information
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        if (is_null($departure)) {
            throw new \InvalidArgumentException('non-nullable departure cannot be null');
        }
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets arrival
     *
     * @return \OpenAPI\Client\Model\FlightAirportMovementContract
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param \OpenAPI\Client\Model\FlightAirportMovementContract $arrival Arrival information
     *
     * @return self
     */
    public function setArrival($arrival)
    {
        if (is_null($arrival)) {
            throw new \InvalidArgumentException('non-nullable arrival cannot be null');
        }
        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets last_updated_utc
     *
     * @return \DateTime
     */
    public function getLastUpdatedUtc()
    {
        return $this->container['last_updated_utc'];
    }

    /**
     * Sets last_updated_utc
     *
     * @param \DateTime $last_updated_utc Time (UTC) of the latest update of flight information (excluding Location)
     *
     * @return self
     */
    public function setLastUpdatedUtc($last_updated_utc)
    {
        if (is_null($last_updated_utc)) {
            throw new \InvalidArgumentException('non-nullable last_updated_utc cannot be null');
        }
        $this->container['last_updated_utc'] = $last_updated_utc;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Flight Number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        if ((mb_strlen($number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $number when calling FlightContract., must be bigger than or equal to 1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets call_sign
     *
     * @return string|null
     */
    public function getCallSign()
    {
        return $this->container['call_sign'];
    }

    /**
     * Sets call_sign
     *
     * @param string|null $call_sign ATC call-sign of the flight
     *
     * @return self
     */
    public function setCallSign($call_sign)
    {
        if (is_null($call_sign)) {
            array_push($this->openAPINullablesSetToNull, 'call_sign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('call_sign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['call_sign'] = $call_sign;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\FlightStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\FlightStatus $status Flight progress status<p>Possible values:</p> <ul> <li><b>0 - Unknown</b>: Status is not available for this flight</li> <li><b>1 - Expected</b>: Expected</li> <li><b>2 - EnRoute</b>: En route</li> <li><b>3 - CheckIn</b>: Check-in is open</li> <li><b>4 - Boarding</b>: Boarding in progress / Last call</li> <li><b>5 - GateClosed</b>: Gate closed</li> <li><b>6 - Departed</b>: Departed</li> <li><b>7 - Delayed</b>: Delayed</li> <li><b>8 - Approaching</b>: On approach to destination</li> <li><b>9 - Arrived</b>: Arrived</li> <li><b>10 - Canceled</b>: Cancelled</li> <li><b>11 - Diverted</b>: Diverted to another destination</li> <li><b>12 - CanceledUncertain</b>: Status of the flight is uncertain</li> </ul>
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets codeshare_status
     *
     * @return \OpenAPI\Client\Model\CodeshareStatus
     */
    public function getCodeshareStatus()
    {
        return $this->container['codeshare_status'];
    }

    /**
     * Sets codeshare_status
     *
     * @param \OpenAPI\Client\Model\CodeshareStatus $codeshare_status Flight code-share status<p>Possible values:</p> <ul> <li><b>0 - Unknown</b>: Code-sharing information is unavailable for this flight. Flight might be operated both by airline owning the flight number as well as by another airliner.</li> <li><b>1 - IsOperator</b>: Flight is operated by an airline owning the flight number (the same code)</li> <li><b>2 - IsCodeshared</b>: Flight is code-shared (operated by an airline other than airline owning the flight number)</li> </ul>
     *
     * @return self
     */
    public function setCodeshareStatus($codeshare_status)
    {
        if (is_null($codeshare_status)) {
            throw new \InvalidArgumentException('non-nullable codeshare_status cannot be null');
        }
        $this->container['codeshare_status'] = $codeshare_status;

        return $this;
    }

    /**
     * Gets is_cargo
     *
     * @return bool
     */
    public function getIsCargo()
    {
        return $this->container['is_cargo'];
    }

    /**
     * Sets is_cargo
     *
     * @param bool $is_cargo Is cargo flight
     *
     * @return self
     */
    public function setIsCargo($is_cargo)
    {
        if (is_null($is_cargo)) {
            throw new \InvalidArgumentException('non-nullable is_cargo cannot be null');
        }
        $this->container['is_cargo'] = $is_cargo;

        return $this;
    }

    /**
     * Gets aircraft
     *
     * @return \OpenAPI\Client\Model\FlightAircraftContract|null
     */
    public function getAircraft()
    {
        return $this->container['aircraft'];
    }

    /**
     * Sets aircraft
     *
     * @param \OpenAPI\Client\Model\FlightAircraftContract|null $aircraft Aicraft operating the flight
     *
     * @return self
     */
    public function setAircraft($aircraft)
    {
        if (is_null($aircraft)) {
            array_push($this->openAPINullablesSetToNull, 'aircraft');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aircraft', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aircraft'] = $aircraft;

        return $this;
    }

    /**
     * Gets airline
     *
     * @return \OpenAPI\Client\Model\FlightAirlineContract|null
     */
    public function getAirline()
    {
        return $this->container['airline'];
    }

    /**
     * Sets airline
     *
     * @param \OpenAPI\Client\Model\FlightAirlineContract|null $airline Airline owning the flight
     *
     * @return self
     */
    public function setAirline($airline)
    {
        if (is_null($airline)) {
            array_push($this->openAPINullablesSetToNull, 'airline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('airline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['airline'] = $airline;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\FlightLocationContract|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\FlightLocationContract|null $location Real-time flight location, altitude, speed and track, if requested and available.
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            array_push($this->openAPINullablesSetToNull, 'location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location'] = $location;

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


