# # AircraftContractPagedCollectionContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_count** | **int** | The total number of items across all pages |
**page_offset** | **int** | The offset of the current page of the collection   (number of items skipped before this page) |
**page_size** | **int** | Maximum number of items on the current page of the collection  (&#x60;Count&#x60; cannot be more than this value) |
**has_next_page** | **bool** | This value is true when collection has more pages | [readonly]
**count** | **int** | The number of items in the collection | [readonly]
**items** | [**\OpenAPI\Client\Model\AircraftContract[]**](AircraftContract.md) | The collection of items |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
