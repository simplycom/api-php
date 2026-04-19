# DnsRecordPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SimplyCom\SimplyCom\Model\DnsRecordType**](DnsRecordType.md) |  |
**name** | **string** | The hostname or label for the DNS record |
**data** | **string** | The record data (IP address, hostname, text value, etc.) |
**ttl** | **int** | Time To Live in seconds. Defaults to zone default if not specified. | [optional]
**priority** | **int** | Priority value (required for MX and SRV records) | [optional]
**comment** | **string** | Optional comment for the DNS record | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
