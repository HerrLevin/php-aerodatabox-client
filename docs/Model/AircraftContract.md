# # AircraftContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the aircraft record in our database |
**reg** | **string** | Tail-number of the aircraft |
**active** | **bool** | Indicator if aircraft is operational under this registration |
**serial** | **string** | Serial number | [optional]
**hex_icao** | **string** | ICAO 24 bit Mode-S hexadecimal transponder address | [optional]
**airline_name** | **string** | Name of the airline operating the aircraft | [optional]
**iata_type** | **string** | IATA-type of the aircraft | [optional]
**iata_code_short** | **string** | Short variant of IATA-code of the aircraft | [optional]
**icao_code** | **string** | ICAO-code of the aircraft | [optional]
**model** | **string** | Model of the aircraft | [optional]
**model_code** | **string** | Model code of the aircraft | [optional]
**num_seats** | **int** | Number of passenger seats | [optional]
**rollout_date** | **\DateTime** | Date of roll-out (UTC) | [optional]
**first_flight_date** | **\DateTime** | First flight date | [optional]
**delivery_date** | **\DateTime** | Date of delivery to the owner | [optional]
**registration_date** | **\DateTime** | Date of assigning current registration | [optional]
**type_name** | **string** | Type name | [optional]
**num_engines** | **int** | Number of engines | [optional]
**engine_type** | [**\OpenAPI\Client\Model\EngineType**](EngineType.md) | Engine type | [optional]
**is_freighter** | **bool** | Marker if aircraft is cargo or not |
**production_line** | **string** | Production line | [optional]
**age_years** | **float** | Age of the aircraft in year | [optional]
**verified** | **bool** |  |
**image** | [**\OpenAPI\Client\Model\ResourceContract**](ResourceContract.md) | Image of the aircraft (if provided by the endpoint) | [optional]
**num_registrations** | **int** | An aircraft may have a history of past registrations with other airlines or operators.  This field represents a total number of registration records known in our database. |
**registrations** | [**\OpenAPI\Client\Model\AircraftRegistrationContract[]**](AircraftRegistrationContract.md) | A history of all registrations with other airlines or operators (if provided by the endpoint). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
