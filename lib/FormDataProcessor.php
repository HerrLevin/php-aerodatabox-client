<?php
/**
 * FormDataProcessor
 * PHP version 7.4
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

namespace OpenAPI\Client;

use ArrayAccess;
use DateTime;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\StreamInterface;
use SplFileObject;
use OpenAPI\Client\Model\ModelInterface;

/**
 * FormDataProcessor Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FormDataProcessor
{
    /**
     * Tags whether payload passed to ::prepare() contains one or more
     * SplFileObject or stream values.
     */
    public bool $has_file = false;

    /**
     * Take value and turn it into an array suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param array<string|bool|array|DateTime|ArrayAccess|SplFileObject> $values the value of the form parameter
     *
     * @return array [key => value] of formdata
     */
    public function prepare(array $values): array
    {
        $this->has_file = false;
        $result = [];

        foreach ($values as $k => $v) {
            if ($v === null) {
                continue;
            }

            $result[$k] = $this->makeFormSafe($v);
        }

        return $result;
    }

    /**
     * Flattens a multi-level array of data and generates a single-level array
     * compatible with formdata - a single-level array where the keys use bracket
     * notation to signify nested data.
     *
     * credit: https://github.com/FranBar1966/FlatPHP
     */
    public static function flatten(array $source, string $start = ''): array
    {
        $opt = [
            'prefix'          => '[',
            'suffix'          => ']',
            'suffix-end'      => true,
            'prefix-list'     => '[',
            'suffix-list'     => ']',
            'suffix-list-end' => true,
        ];

        if ($start === '') {
            $currentPrefix    = '';
            $currentSuffix    = '';
            $currentSuffixEnd = false;
        } elseif (array_is_list($source)) {
            $currentPrefix    = $opt['prefix-list'];
            $currentSuffix    = $opt['suffix-list'];
            $currentSuffixEnd = $opt['suffix-list-end'];
        } else {
            $currentPrefix    = $opt['prefix'];
            $currentSuffix    = $opt['suffix'];
            $currentSuffixEnd = $opt['suffix-end'];
        }

        $currentName = $start;
        $result = [];

        foreach ($source as $key => $val) {
            $currentName .= $currentPrefix.$key;

            if (is_array($val) && !empty($val)) {
                $currentName .= $currentSuffix;
                $result += self::flatten($val, $currentName);
            } else {
                if ($currentSuffixEnd) {
                    $currentName .= $currentSuffix;
                }

                $result[$currentName] = ObjectSerializer::toString($val);
            }

            $currentName = $start;
        }

        return $result;
    }

    /**
     * formdata must be limited to scalars or arrays of scalar values,
     * or a resource for a file upload. Here we iterate through all available
     * data and identify how to handle each scenario
     */
    protected function makeFormSafe($value)
    {
        if ($value instanceof SplFileObject) {
            return $this->processFiles([$value])[0];
        }

        if (is_resource($value)) {
            $this->has_file = true;

            return $value;
        }

        if ($value instanceof ModelInterface) {
            return $this->processModel($value);
        }

        if (is_array($value) || (is_object($value) && !$value instanceof \DateTimeInterface)) {
            $data = [];

            foreach ($value as $k => $v) {
                $data[$k] = $this->makeFormSafe($v);
            }

            return $data;
        }

        return ObjectSerializer::toString($value);
    }

    /**
     * We are able to handle nested ModelInterface. We do not simply call
     * json_decode(json_encode()) because any given model may have binary data
     * or other data that cannot be serialized to a JSON string
     */
    protected function processModel(ModelInterface $model): array
    {
        $result = [];

        foreach ($model::openAPITypes() as $name => $type) {
            $value = $model->offsetGet($name);

            if ($value === null) {
                continue;
            }

            if (strpos($type, '\SplFileObject') !== false) {
                $file = is_array($value) ? $value : [$value];
                $result[$name] = $this->processFiles($file);

                continue;
            }

            if ($value instanceof ModelInterface) {
                $result[$name] = $this->processModel($value);

                continue;
            }

            if (is_array($value) || is_object($value)) {
                $result[$name] = $this->makeFormSafe($value);

                continue;
            }

            $result[$name] = ObjectSerializer::toString($value);
        }

        return $result;
    }

    /**
     * Handle file data
     */
    protected function processFiles(array $files): array
    {
        $this->has_file = true;

        $result = [];

        foreach ($files as $i => $file) {
            if (is_array($file)) {
                $result[$i] = $this->processFiles($file);

                continue;
            }

            if ($file instanceof StreamInterface) {
                $result[$i] = $file;

                continue;
            }

            if ($file instanceof SplFileObject) {
                $result[$i] = $this->tryFopen($file);
            }
        }

        return $result;
    }

    private function tryFopen(SplFileObject $file)
    {
        return Utils::tryFopen($file->getRealPath(), 'rb');
    }
}
