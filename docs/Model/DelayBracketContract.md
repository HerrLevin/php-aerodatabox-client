# # DelayBracketContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delayed_from** | **string** | The beginning of the delay range (format: [-]hh:mm:ss).  E.g. in the expresssion \&quot;delayed from 30 to 60 minutes\&quot; stands for \&quot;from 30 minutes\&quot;.  Value can be negative (therefore, means early occurence).    Must be preset if \&quot;DelayedTo\&quot; is not specified. | [optional]
**delayed_to** | **string** | The end of the delay range (format: [-]hh:mm:ss).  E.g. in the expresssion \&quot;delayed from 30 to 60 minutes\&quot; stands for \&quot;to 60 minutes\&quot;.  Value can be negative (therefore, means early occurence).    Must be preset if \&quot;DelayedFrom\&quot; is not specified. | [optional]
**num** | **int** | Count of records subject to a specified delay range |
**percentage** | **float** | Percentage of records subject to a specified delay range.    Only available when this delay bracket is provided as a part  of a statistical information of a bigger context and the \&quot;total\&quot;  count of records is known. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
