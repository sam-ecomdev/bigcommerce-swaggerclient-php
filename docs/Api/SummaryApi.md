# Swagger\Client\SummaryApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogSummary**](SummaryApi.md#getCatalogSummary) | **GET** /catalog/summary | Get a Catalog Summary


# **getCatalogSummary**
> \Swagger\Client\Model\CatalogSummaryResponse getCatalogSummary($accept, $content_type)

Get a Catalog Summary

Returns a lightweight inventory summary from the BigCommerce Catalog.  The inventory summary includes: * \"inventory_count\" * \"variant_count\" * \"inventory_value\" * \"highest_variant_price\" * \"average_variant_price\" * \"lowest_variant_price\" * \"oldest_variant_date\" * \"newest_variant_date\" * \"primary_category_id\" * \"primary_category_name\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getCatalogSummary($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryApi->getCatalogSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\CatalogSummaryResponse**](../Model/CatalogSummaryResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

