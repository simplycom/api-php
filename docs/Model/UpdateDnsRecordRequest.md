# # UpdateDnsRecordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | DNS record type (A, AAAA, CNAME, MX, TXT, SRV, etc.) |
**name** | **string** | The hostname or label for the DNS record |
**data** | **string** | The record data (IP address, hostname, text value, etc.) |
**priority** | **int** | Priority value (required for MX and SRV records) | [optional]
**ttl** | **int** | Time To Live in seconds | [optional]
**comment** | **string** | Optional comment for the DNS record | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
