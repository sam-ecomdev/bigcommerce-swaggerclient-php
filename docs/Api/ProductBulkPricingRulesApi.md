# Swagger\Client\ProductBulkPricingRulesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBulkPricingRule**](ProductBulkPricingRulesApi.md#createBulkPricingRule) | **POST** /catalog/products/{product_id}/bulk-pricing-rules | Creates a Bulk Pricing Rule
[**deleteBulkPricingRuleById**](ProductBulkPricingRulesApi.md#deleteBulkPricingRuleById) | **DELETE** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Delete a Bulk Pricing Rule
[**getBulkPricingRuleById**](ProductBulkPricingRulesApi.md#getBulkPricingRuleById) | **GET** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Get a Bulk Pricing Rule
[**getBulkPricingRules**](ProductBulkPricingRulesApi.md#getBulkPricingRules) | **GET** /catalog/products/{product_id}/bulk-pricing-rules | Get All Bulk Pricing Rules
[**updateBulkPricingRule**](ProductBulkPricingRulesApi.md#updateBulkPricingRule) | **PUT** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Update a Bulk Pricing Rule


# **createBulkPricingRule**
> \Swagger\Client\Model\InlineResponse2006 createBulkPricingRule($product_id, $bulk_pricing_rule, $accept, $content_type, $page, $limit)

Creates a Bulk Pricing Rule

Creates a *Bulk Pricing Rule*.  **Required Fields** - quantity_min - quantity_max - type - amount  **Read-Only Fields** - id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductBulkPricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$bulk_pricing_rule = new \Swagger\Client\Model\BulkPricingRuleFull(); // \Swagger\Client\Model\BulkPricingRuleFull | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.

try {
    $result = $apiInstance->createBulkPricingRule($product_id, $bulk_pricing_rule, $accept, $content_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBulkPricingRulesApi->createBulkPricingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **bulk_pricing_rule** | [**\Swagger\Client\Model\BulkPricingRuleFull**](../Model/BulkPricingRuleFull.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBulkPricingRuleById**
> deleteBulkPricingRuleById($product_id, $bulk_pricing_rule_id, $accept, $content_type)

Delete a Bulk Pricing Rule

Deletes a *Bulk Pricing Rule*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductBulkPricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$bulk_pricing_rule_id = 56; // int | The ID of the `BulkPricingRule`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteBulkPricingRuleById($product_id, $bulk_pricing_rule_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductBulkPricingRulesApi->deleteBulkPricingRuleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **bulk_pricing_rule_id** | **int**| The ID of the &#x60;BulkPricingRule&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkPricingRuleById**
> \Swagger\Client\Model\InlineResponse2006 getBulkPricingRuleById($product_id, $bulk_pricing_rule_id, $accept, $content_type, $include_fields, $exclude_fields)

Get a Bulk Pricing Rule

Returns a single *Bulk Pricing Rule*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductBulkPricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$bulk_pricing_rule_id = 56; // int | The ID of the `BulkPricingRule`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getBulkPricingRuleById($product_id, $bulk_pricing_rule_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBulkPricingRulesApi->getBulkPricingRuleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **bulk_pricing_rule_id** | **int**| The ID of the &#x60;BulkPricingRule&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkPricingRules**
> \Swagger\Client\Model\InlineResponse2005 getBulkPricingRules($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit)

Get All Bulk Pricing Rules

Returns a list of *Bulk Pricing Rules*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductBulkPricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.

try {
    $result = $apiInstance->getBulkPricingRules($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBulkPricingRulesApi->getBulkPricingRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBulkPricingRule**
> \Swagger\Client\Model\InlineResponse2007 updateBulkPricingRule($product_id, $bulk_pricing_rule_id, $bulk_pricing_rule, $accept, $content_type)

Update a Bulk Pricing Rule

Updates a *Bulk Pricing Rule*.  **Required Fields** * none  **Read-Only Fields** - id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductBulkPricingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$bulk_pricing_rule_id = 56; // int | The ID of the `BulkPricingRule`.
$bulk_pricing_rule = new \Swagger\Client\Model\BulkPricingRuleFull(); // \Swagger\Client\Model\BulkPricingRuleFull | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateBulkPricingRule($product_id, $bulk_pricing_rule_id, $bulk_pricing_rule, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBulkPricingRulesApi->updateBulkPricingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **bulk_pricing_rule_id** | **int**| The ID of the &#x60;BulkPricingRule&#x60;. |
 **bulk_pricing_rule** | [**\Swagger\Client\Model\BulkPricingRuleFull**](../Model/BulkPricingRuleFull.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

