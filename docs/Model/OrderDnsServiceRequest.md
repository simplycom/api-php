# # OrderDnsServiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Fully qualified domain name (e.g., example.com). Both ASCII and IDN domains are supported. |
**domainaction** | **string** | Action to perform on the domain. Must match domain availability status. |
**coupon** | **string** | Optional coupon code to apply to the order | [optional]
**authid** | **string** | Authorization code for domain transfer (required for transfer and transferonly actions) | [optional]
**autorenew** | **bool** | Whether to enable automatic renewal for the product | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
