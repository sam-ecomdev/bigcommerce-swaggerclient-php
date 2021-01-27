# ProductVariantFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**product_id** | **int** |  | [optional] 
**sku** | **string** |  | [optional] 
**sku_id** | **int** | Read-only reference to v2 API&#39;s SKU ID. Null if it is a base variant. | [optional] 
**option_values** | [**\Swagger\Client\Model\ProductVariantOptionValueFull[]**](ProductVariantOptionValueFull.md) | Array of option and option values IDs that make up this variant. Will be empty if the variant is the product&#39;s base variant. | [optional] 
**calculated_price** | **double** | The price of the variant as seen on the storefront. This price takes into account &#x60;sale_price&#x60; and any price adjustment rules that are applicable to this variant. | [optional] 
**** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


