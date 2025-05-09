<?php
/**
 * FlightAirportMovementContract
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
 * FlightAirportMovementContract Class Doc Comment
 *
 * @category Class
 * @description Flight arrival or departure information
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlightAirportMovementContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlightAirportMovementContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'airport' => '\OpenAPI\Client\Model\ListingAirportContract',
        'scheduled_time' => '\OpenAPI\Client\Model\DateTimeContract',
        'revised_time' => '\OpenAPI\Client\Model\DateTimeContract',
        'predicted_time' => '\OpenAPI\Client\Model\DateTimeContract',
        'runway_time' => '\OpenAPI\Client\Model\DateTimeContract',
        'terminal' => 'string',
        'check_in_desk' => 'string',
        'gate' => 'string',
        'baggage_belt' => 'string',
        'runway' => 'string',
        'quality' => '\OpenAPI\Client\Model\FlightAirportMovementQualityEnum[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'airport' => null,
        'scheduled_time' => null,
        'revised_time' => null,
        'predicted_time' => null,
        'runway_time' => null,
        'terminal' => null,
        'check_in_desk' => null,
        'gate' => null,
        'baggage_belt' => null,
        'runway' => null,
        'quality' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'airport' => false,
        'scheduled_time' => true,
        'revised_time' => true,
        'predicted_time' => true,
        'runway_time' => true,
        'terminal' => true,
        'check_in_desk' => true,
        'gate' => true,
        'baggage_belt' => true,
        'runway' => true,
        'quality' => false
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
        'airport' => 'airport',
        'scheduled_time' => 'scheduledTime',
        'revised_time' => 'revisedTime',
        'predicted_time' => 'predictedTime',
        'runway_time' => 'runwayTime',
        'terminal' => 'terminal',
        'check_in_desk' => 'checkInDesk',
        'gate' => 'gate',
        'baggage_belt' => 'baggageBelt',
        'runway' => 'runway',
        'quality' => 'quality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'airport' => 'setAirport',
        'scheduled_time' => 'setScheduledTime',
        'revised_time' => 'setRevisedTime',
        'predicted_time' => 'setPredictedTime',
        'runway_time' => 'setRunwayTime',
        'terminal' => 'setTerminal',
        'check_in_desk' => 'setCheckInDesk',
        'gate' => 'setGate',
        'baggage_belt' => 'setBaggageBelt',
        'runway' => 'setRunway',
        'quality' => 'setQuality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'airport' => 'getAirport',
        'scheduled_time' => 'getScheduledTime',
        'revised_time' => 'getRevisedTime',
        'predicted_time' => 'getPredictedTime',
        'runway_time' => 'getRunwayTime',
        'terminal' => 'getTerminal',
        'check_in_desk' => 'getCheckInDesk',
        'gate' => 'getGate',
        'baggage_belt' => 'getBaggageBelt',
        'runway' => 'getRunway',
        'quality' => 'getQuality'
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
        $this->setIfExists('airport', $data ?? [], null);
        $this->setIfExists('scheduled_time', $data ?? [], null);
        $this->setIfExists('revised_time', $data ?? [], null);
        $this->setIfExists('predicted_time', $data ?? [], null);
        $this->setIfExists('runway_time', $data ?? [], null);
        $this->setIfExists('terminal', $data ?? [], null);
        $this->setIfExists('check_in_desk', $data ?? [], null);
        $this->setIfExists('gate', $data ?? [], null);
        $this->setIfExists('baggage_belt', $data ?? [], null);
        $this->setIfExists('runway', $data ?? [], null);
        $this->setIfExists('quality', $data ?? [], null);
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

        if ($this->container['airport'] === null) {
            $invalidProperties[] = "'airport' can't be null";
        }
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
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
     * Gets airport
     *
     * @return \OpenAPI\Client\Model\ListingAirportContract
     */
    public function getAirport()
    {
        return $this->container['airport'];
    }

    /**
     * Sets airport
     *
     * @param \OpenAPI\Client\Model\ListingAirportContract $airport Airport information
     *
     * @return self
     */
    public function setAirport($airport)
    {
        if (is_null($airport)) {
            throw new \InvalidArgumentException('non-nullable airport cannot be null');
        }
        $this->container['airport'] = $airport;

        return $this;
    }

    /**
     * Gets scheduled_time
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getScheduledTime()
    {
        return $this->container['scheduled_time'];
    }

    /**
     * Sets scheduled_time
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $scheduled_time Scheduled time of arrival or departure of the flight
     *
     * @return self
     */
    public function setScheduledTime($scheduled_time)
    {
        if (is_null($scheduled_time)) {
            array_push($this->openAPINullablesSetToNull, 'scheduled_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduled_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduled_time'] = $scheduled_time;

        return $this;
    }

    /**
     * Gets revised_time
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getRevisedTime()
    {
        return $this->container['revised_time'];
    }

    /**
     * Sets revised_time
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $revised_time Actual or estimated time of arrival or departure the flight.  If RunwayTime is specified, this time is time of departure/arrival to the gate.   Otherwise, it can be either time at gate or on runway.
     *
     * @return self
     */
    public function setRevisedTime($revised_time)
    {
        if (is_null($revised_time)) {
            array_push($this->openAPINullablesSetToNull, 'revised_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revised_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revised_time'] = $revised_time;

        return $this;
    }

    /**
     * Gets predicted_time
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getPredictedTime()
    {
        return $this->container['predicted_time'];
    }

    /**
     * Sets predicted_time
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $predicted_time Predicted time based on historical data (experimental). May significantly differ with `RevisedTime`.  Only available for non-completed or unknown-status flights arriving, departing within a week and only via Flight Status endpoint.                For arriving flights:  Predicted time of arrival based on departure time. Not available if departure times are unavailable.    For departing flights:  Predicted time of departure based on arrival time. Only available if departure times are unavailable.
     *
     * @return self
     */
    public function setPredictedTime($predicted_time)
    {
        if (is_null($predicted_time)) {
            array_push($this->openAPINullablesSetToNull, 'predicted_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('predicted_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['predicted_time'] = $predicted_time;

        return $this;
    }

    /**
     * Gets runway_time
     *
     * @return \OpenAPI\Client\Model\DateTimeContract|null
     */
    public function getRunwayTime()
    {
        return $this->container['runway_time'];
    }

    /**
     * Sets runway_time
     *
     * @param \OpenAPI\Client\Model\DateTimeContract|null $runway_time Time of landing for arriving or take-off of the departing flight, if known.
     *
     * @return self
     */
    public function setRunwayTime($runway_time)
    {
        if (is_null($runway_time)) {
            array_push($this->openAPINullablesSetToNull, 'runway_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('runway_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['runway_time'] = $runway_time;

        return $this;
    }

    /**
     * Gets terminal
     *
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param string|null $terminal Terminal of the flight
     *
     * @return self
     */
    public function setTerminal($terminal)
    {
        if (is_null($terminal)) {
            array_push($this->openAPINullablesSetToNull, 'terminal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('terminal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets check_in_desk
     *
     * @return string|null
     */
    public function getCheckInDesk()
    {
        return $this->container['check_in_desk'];
    }

    /**
     * Sets check_in_desk
     *
     * @param string|null $check_in_desk Check-in desk(s) for the flight (only for departing flights)
     *
     * @return self
     */
    public function setCheckInDesk($check_in_desk)
    {
        if (is_null($check_in_desk)) {
            array_push($this->openAPINullablesSetToNull, 'check_in_desk');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('check_in_desk', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['check_in_desk'] = $check_in_desk;

        return $this;
    }

    /**
     * Gets gate
     *
     * @return string|null
     */
    public function getGate()
    {
        return $this->container['gate'];
    }

    /**
     * Sets gate
     *
     * @param string|null $gate Gate of (un)boarding for the flight
     *
     * @return self
     */
    public function setGate($gate)
    {
        if (is_null($gate)) {
            array_push($this->openAPINullablesSetToNull, 'gate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gate'] = $gate;

        return $this;
    }

    /**
     * Gets baggage_belt
     *
     * @return string|null
     */
    public function getBaggageBelt()
    {
        return $this->container['baggage_belt'];
    }

    /**
     * Sets baggage_belt
     *
     * @param string|null $baggage_belt Baggage belt(s) for the flight (only for arriving flights)
     *
     * @return self
     */
    public function setBaggageBelt($baggage_belt)
    {
        if (is_null($baggage_belt)) {
            array_push($this->openAPINullablesSetToNull, 'baggage_belt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('baggage_belt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['baggage_belt'] = $baggage_belt;

        return $this;
    }

    /**
     * Gets runway
     *
     * @return string|null
     */
    public function getRunway()
    {
        return $this->container['runway'];
    }

    /**
     * Sets runway
     *
     * @param string|null $runway Name of a runway of landing (for arriving flights) or take-off (for departing flights), if known.
     *
     * @return self
     */
    public function setRunway($runway)
    {
        if (is_null($runway)) {
            array_push($this->openAPINullablesSetToNull, 'runway');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('runway', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['runway'] = $runway;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return \OpenAPI\Client\Model\FlightAirportMovementQualityEnum[]
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param \OpenAPI\Client\Model\FlightAirportMovementQualityEnum[] $quality Array of quality characteristics of the data. Check this to know which information  you can expect within this contract (basic, live and/or approximate data).
     *
     * @return self
     */
    public function setQuality($quality)
    {
        if (is_null($quality)) {
            throw new \InvalidArgumentException('non-nullable quality cannot be null');
        }
        $this->container['quality'] = $quality;

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


