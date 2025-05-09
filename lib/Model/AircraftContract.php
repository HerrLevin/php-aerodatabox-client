<?php
/**
 * AircraftContract
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
 * AircraftContract Class Doc Comment
 *
 * @category Class
 * @description Single aircraft data
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AircraftContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AircraftContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'reg' => 'string',
        'active' => 'bool',
        'serial' => 'string',
        'hex_icao' => 'string',
        'airline_name' => 'string',
        'iata_type' => 'string',
        'iata_code_short' => 'string',
        'icao_code' => 'string',
        'model' => 'string',
        'model_code' => 'string',
        'num_seats' => 'int',
        'rollout_date' => '\DateTime',
        'first_flight_date' => '\DateTime',
        'delivery_date' => '\DateTime',
        'registration_date' => '\DateTime',
        'type_name' => 'string',
        'num_engines' => 'int',
        'engine_type' => '\OpenAPI\Client\Model\EngineType',
        'is_freighter' => 'bool',
        'production_line' => 'string',
        'age_years' => 'float',
        'verified' => 'bool',
        'image' => '\OpenAPI\Client\Model\ResourceContract',
        'num_registrations' => 'int',
        'registrations' => '\OpenAPI\Client\Model\AircraftRegistrationContract[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'reg' => null,
        'active' => null,
        'serial' => null,
        'hex_icao' => null,
        'airline_name' => null,
        'iata_type' => null,
        'iata_code_short' => null,
        'icao_code' => null,
        'model' => null,
        'model_code' => null,
        'num_seats' => 'int32',
        'rollout_date' => 'date-time',
        'first_flight_date' => 'date-time',
        'delivery_date' => 'date-time',
        'registration_date' => 'date-time',
        'type_name' => null,
        'num_engines' => 'int32',
        'engine_type' => null,
        'is_freighter' => null,
        'production_line' => null,
        'age_years' => 'float',
        'verified' => null,
        'image' => null,
        'num_registrations' => 'int32',
        'registrations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'reg' => false,
        'active' => false,
        'serial' => true,
        'hex_icao' => true,
        'airline_name' => true,
        'iata_type' => true,
        'iata_code_short' => true,
        'icao_code' => true,
        'model' => true,
        'model_code' => true,
        'num_seats' => true,
        'rollout_date' => true,
        'first_flight_date' => true,
        'delivery_date' => true,
        'registration_date' => true,
        'type_name' => true,
        'num_engines' => true,
        'engine_type' => true,
        'is_freighter' => false,
        'production_line' => true,
        'age_years' => true,
        'verified' => false,
        'image' => true,
        'num_registrations' => false,
        'registrations' => true
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
        'id' => 'id',
        'reg' => 'reg',
        'active' => 'active',
        'serial' => 'serial',
        'hex_icao' => 'hexIcao',
        'airline_name' => 'airlineName',
        'iata_type' => 'iataType',
        'iata_code_short' => 'iataCodeShort',
        'icao_code' => 'icaoCode',
        'model' => 'model',
        'model_code' => 'modelCode',
        'num_seats' => 'numSeats',
        'rollout_date' => 'rolloutDate',
        'first_flight_date' => 'firstFlightDate',
        'delivery_date' => 'deliveryDate',
        'registration_date' => 'registrationDate',
        'type_name' => 'typeName',
        'num_engines' => 'numEngines',
        'engine_type' => 'engineType',
        'is_freighter' => 'isFreighter',
        'production_line' => 'productionLine',
        'age_years' => 'ageYears',
        'verified' => 'verified',
        'image' => 'image',
        'num_registrations' => 'numRegistrations',
        'registrations' => 'registrations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'reg' => 'setReg',
        'active' => 'setActive',
        'serial' => 'setSerial',
        'hex_icao' => 'setHexIcao',
        'airline_name' => 'setAirlineName',
        'iata_type' => 'setIataType',
        'iata_code_short' => 'setIataCodeShort',
        'icao_code' => 'setIcaoCode',
        'model' => 'setModel',
        'model_code' => 'setModelCode',
        'num_seats' => 'setNumSeats',
        'rollout_date' => 'setRolloutDate',
        'first_flight_date' => 'setFirstFlightDate',
        'delivery_date' => 'setDeliveryDate',
        'registration_date' => 'setRegistrationDate',
        'type_name' => 'setTypeName',
        'num_engines' => 'setNumEngines',
        'engine_type' => 'setEngineType',
        'is_freighter' => 'setIsFreighter',
        'production_line' => 'setProductionLine',
        'age_years' => 'setAgeYears',
        'verified' => 'setVerified',
        'image' => 'setImage',
        'num_registrations' => 'setNumRegistrations',
        'registrations' => 'setRegistrations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'reg' => 'getReg',
        'active' => 'getActive',
        'serial' => 'getSerial',
        'hex_icao' => 'getHexIcao',
        'airline_name' => 'getAirlineName',
        'iata_type' => 'getIataType',
        'iata_code_short' => 'getIataCodeShort',
        'icao_code' => 'getIcaoCode',
        'model' => 'getModel',
        'model_code' => 'getModelCode',
        'num_seats' => 'getNumSeats',
        'rollout_date' => 'getRolloutDate',
        'first_flight_date' => 'getFirstFlightDate',
        'delivery_date' => 'getDeliveryDate',
        'registration_date' => 'getRegistrationDate',
        'type_name' => 'getTypeName',
        'num_engines' => 'getNumEngines',
        'engine_type' => 'getEngineType',
        'is_freighter' => 'getIsFreighter',
        'production_line' => 'getProductionLine',
        'age_years' => 'getAgeYears',
        'verified' => 'getVerified',
        'image' => 'getImage',
        'num_registrations' => 'getNumRegistrations',
        'registrations' => 'getRegistrations'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('reg', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('serial', $data ?? [], null);
        $this->setIfExists('hex_icao', $data ?? [], null);
        $this->setIfExists('airline_name', $data ?? [], null);
        $this->setIfExists('iata_type', $data ?? [], null);
        $this->setIfExists('iata_code_short', $data ?? [], null);
        $this->setIfExists('icao_code', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('model_code', $data ?? [], null);
        $this->setIfExists('num_seats', $data ?? [], null);
        $this->setIfExists('rollout_date', $data ?? [], null);
        $this->setIfExists('first_flight_date', $data ?? [], null);
        $this->setIfExists('delivery_date', $data ?? [], null);
        $this->setIfExists('registration_date', $data ?? [], null);
        $this->setIfExists('type_name', $data ?? [], null);
        $this->setIfExists('num_engines', $data ?? [], null);
        $this->setIfExists('engine_type', $data ?? [], null);
        $this->setIfExists('is_freighter', $data ?? [], null);
        $this->setIfExists('production_line', $data ?? [], null);
        $this->setIfExists('age_years', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('num_registrations', $data ?? [], null);
        $this->setIfExists('registrations', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['reg'] === null) {
            $invalidProperties[] = "'reg' can't be null";
        }
        if ((mb_strlen($this->container['reg']) < 1)) {
            $invalidProperties[] = "invalid value for 'reg', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['is_freighter'] === null) {
            $invalidProperties[] = "'is_freighter' can't be null";
        }
        if ($this->container['verified'] === null) {
            $invalidProperties[] = "'verified' can't be null";
        }
        if ($this->container['num_registrations'] === null) {
            $invalidProperties[] = "'num_registrations' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique ID of the aircraft record in our database
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reg
     *
     * @return string
     */
    public function getReg()
    {
        return $this->container['reg'];
    }

    /**
     * Sets reg
     *
     * @param string $reg Tail-number of the aircraft
     *
     * @return self
     */
    public function setReg($reg)
    {
        if (is_null($reg)) {
            throw new \InvalidArgumentException('non-nullable reg cannot be null');
        }

        if ((mb_strlen($reg) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reg when calling AircraftContract., must be bigger than or equal to 1.');
        }

        $this->container['reg'] = $reg;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Indicator if aircraft is operational under this registration
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return string|null
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string|null $serial Serial number
     *
     * @return self
     */
    public function setSerial($serial)
    {
        if (is_null($serial)) {
            array_push($this->openAPINullablesSetToNull, 'serial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets hex_icao
     *
     * @return string|null
     */
    public function getHexIcao()
    {
        return $this->container['hex_icao'];
    }

    /**
     * Sets hex_icao
     *
     * @param string|null $hex_icao ICAO 24 bit Mode-S hexadecimal transponder address
     *
     * @return self
     */
    public function setHexIcao($hex_icao)
    {
        if (is_null($hex_icao)) {
            array_push($this->openAPINullablesSetToNull, 'hex_icao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hex_icao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hex_icao'] = $hex_icao;

        return $this;
    }

    /**
     * Gets airline_name
     *
     * @return string|null
     */
    public function getAirlineName()
    {
        return $this->container['airline_name'];
    }

    /**
     * Sets airline_name
     *
     * @param string|null $airline_name Name of the airline operating the aircraft
     *
     * @return self
     */
    public function setAirlineName($airline_name)
    {
        if (is_null($airline_name)) {
            array_push($this->openAPINullablesSetToNull, 'airline_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('airline_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['airline_name'] = $airline_name;

        return $this;
    }

    /**
     * Gets iata_type
     *
     * @return string|null
     */
    public function getIataType()
    {
        return $this->container['iata_type'];
    }

    /**
     * Sets iata_type
     *
     * @param string|null $iata_type IATA-type of the aircraft
     *
     * @return self
     */
    public function setIataType($iata_type)
    {
        if (is_null($iata_type)) {
            array_push($this->openAPINullablesSetToNull, 'iata_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iata_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iata_type'] = $iata_type;

        return $this;
    }

    /**
     * Gets iata_code_short
     *
     * @return string|null
     */
    public function getIataCodeShort()
    {
        return $this->container['iata_code_short'];
    }

    /**
     * Sets iata_code_short
     *
     * @param string|null $iata_code_short Short variant of IATA-code of the aircraft
     *
     * @return self
     */
    public function setIataCodeShort($iata_code_short)
    {
        if (is_null($iata_code_short)) {
            array_push($this->openAPINullablesSetToNull, 'iata_code_short');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iata_code_short', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iata_code_short'] = $iata_code_short;

        return $this;
    }

    /**
     * Gets icao_code
     *
     * @return string|null
     */
    public function getIcaoCode()
    {
        return $this->container['icao_code'];
    }

    /**
     * Sets icao_code
     *
     * @param string|null $icao_code ICAO-code of the aircraft
     *
     * @return self
     */
    public function setIcaoCode($icao_code)
    {
        if (is_null($icao_code)) {
            array_push($this->openAPINullablesSetToNull, 'icao_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icao_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icao_code'] = $icao_code;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model Model of the aircraft
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            array_push($this->openAPINullablesSetToNull, 'model');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets model_code
     *
     * @return string|null
     */
    public function getModelCode()
    {
        return $this->container['model_code'];
    }

    /**
     * Sets model_code
     *
     * @param string|null $model_code Model code of the aircraft
     *
     * @return self
     */
    public function setModelCode($model_code)
    {
        if (is_null($model_code)) {
            array_push($this->openAPINullablesSetToNull, 'model_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['model_code'] = $model_code;

        return $this;
    }

    /**
     * Gets num_seats
     *
     * @return int|null
     */
    public function getNumSeats()
    {
        return $this->container['num_seats'];
    }

    /**
     * Sets num_seats
     *
     * @param int|null $num_seats Number of passenger seats
     *
     * @return self
     */
    public function setNumSeats($num_seats)
    {
        if (is_null($num_seats)) {
            array_push($this->openAPINullablesSetToNull, 'num_seats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_seats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_seats'] = $num_seats;

        return $this;
    }

    /**
     * Gets rollout_date
     *
     * @return \DateTime|null
     */
    public function getRolloutDate()
    {
        return $this->container['rollout_date'];
    }

    /**
     * Sets rollout_date
     *
     * @param \DateTime|null $rollout_date Date of roll-out (UTC)
     *
     * @return self
     */
    public function setRolloutDate($rollout_date)
    {
        if (is_null($rollout_date)) {
            array_push($this->openAPINullablesSetToNull, 'rollout_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollout_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rollout_date'] = $rollout_date;

        return $this;
    }

    /**
     * Gets first_flight_date
     *
     * @return \DateTime|null
     */
    public function getFirstFlightDate()
    {
        return $this->container['first_flight_date'];
    }

    /**
     * Sets first_flight_date
     *
     * @param \DateTime|null $first_flight_date First flight date
     *
     * @return self
     */
    public function setFirstFlightDate($first_flight_date)
    {
        if (is_null($first_flight_date)) {
            array_push($this->openAPINullablesSetToNull, 'first_flight_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_flight_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_flight_date'] = $first_flight_date;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date Date of delivery to the owner
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        if (is_null($delivery_date)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return \DateTime|null
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param \DateTime|null $registration_date Date of assigning current registration
     *
     * @return self
     */
    public function setRegistrationDate($registration_date)
    {
        if (is_null($registration_date)) {
            array_push($this->openAPINullablesSetToNull, 'registration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets type_name
     *
     * @return string|null
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     *
     * @param string|null $type_name Type name
     *
     * @return self
     */
    public function setTypeName($type_name)
    {
        if (is_null($type_name)) {
            array_push($this->openAPINullablesSetToNull, 'type_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets num_engines
     *
     * @return int|null
     */
    public function getNumEngines()
    {
        return $this->container['num_engines'];
    }

    /**
     * Sets num_engines
     *
     * @param int|null $num_engines Number of engines
     *
     * @return self
     */
    public function setNumEngines($num_engines)
    {
        if (is_null($num_engines)) {
            array_push($this->openAPINullablesSetToNull, 'num_engines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_engines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_engines'] = $num_engines;

        return $this;
    }

    /**
     * Gets engine_type
     *
     * @return \OpenAPI\Client\Model\EngineType|null
     */
    public function getEngineType()
    {
        return $this->container['engine_type'];
    }

    /**
     * Sets engine_type
     *
     * @param \OpenAPI\Client\Model\EngineType|null $engine_type Engine type
     *
     * @return self
     */
    public function setEngineType($engine_type)
    {
        if (is_null($engine_type)) {
            array_push($this->openAPINullablesSetToNull, 'engine_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('engine_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['engine_type'] = $engine_type;

        return $this;
    }

    /**
     * Gets is_freighter
     *
     * @return bool
     */
    public function getIsFreighter()
    {
        return $this->container['is_freighter'];
    }

    /**
     * Sets is_freighter
     *
     * @param bool $is_freighter Marker if aircraft is cargo or not
     *
     * @return self
     */
    public function setIsFreighter($is_freighter)
    {
        if (is_null($is_freighter)) {
            throw new \InvalidArgumentException('non-nullable is_freighter cannot be null');
        }
        $this->container['is_freighter'] = $is_freighter;

        return $this;
    }

    /**
     * Gets production_line
     *
     * @return string|null
     */
    public function getProductionLine()
    {
        return $this->container['production_line'];
    }

    /**
     * Sets production_line
     *
     * @param string|null $production_line Production line
     *
     * @return self
     */
    public function setProductionLine($production_line)
    {
        if (is_null($production_line)) {
            array_push($this->openAPINullablesSetToNull, 'production_line');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('production_line', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['production_line'] = $production_line;

        return $this;
    }

    /**
     * Gets age_years
     *
     * @return float|null
     */
    public function getAgeYears()
    {
        return $this->container['age_years'];
    }

    /**
     * Sets age_years
     *
     * @param float|null $age_years Age of the aircraft in year
     *
     * @return self
     */
    public function setAgeYears($age_years)
    {
        if (is_null($age_years)) {
            array_push($this->openAPINullablesSetToNull, 'age_years');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('age_years', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['age_years'] = $age_years;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool $verified verified
     *
     * @return self
     */
    public function setVerified($verified)
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\ResourceContract|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\ResourceContract|null $image Image of the aircraft (if provided by the endpoint)
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            array_push($this->openAPINullablesSetToNull, 'image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets num_registrations
     *
     * @return int
     */
    public function getNumRegistrations()
    {
        return $this->container['num_registrations'];
    }

    /**
     * Sets num_registrations
     *
     * @param int $num_registrations An aircraft may have a history of past registrations with other airlines or operators.  This field represents a total number of registration records known in our database.
     *
     * @return self
     */
    public function setNumRegistrations($num_registrations)
    {
        if (is_null($num_registrations)) {
            throw new \InvalidArgumentException('non-nullable num_registrations cannot be null');
        }
        $this->container['num_registrations'] = $num_registrations;

        return $this;
    }

    /**
     * Gets registrations
     *
     * @return \OpenAPI\Client\Model\AircraftRegistrationContract[]|null
     */
    public function getRegistrations()
    {
        return $this->container['registrations'];
    }

    /**
     * Sets registrations
     *
     * @param \OpenAPI\Client\Model\AircraftRegistrationContract[]|null $registrations A history of all registrations with other airlines or operators (if provided by the endpoint).
     *
     * @return self
     */
    public function setRegistrations($registrations)
    {
        if (is_null($registrations)) {
            array_push($this->openAPINullablesSetToNull, 'registrations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registrations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registrations'] = $registrations;

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


