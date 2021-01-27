# Swagger\Client\ProductComplexRulesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComplexRule**](ProductComplexRulesApi.md#createComplexRule) | **POST** /catalog/products/{product_id}/complex-rules | Create a Complex Rule
[**deleteComplexRuleById**](ProductComplexRulesApi.md#deleteComplexRuleById) | **DELETE** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Delete a Complex Rule
[**getComplexRuleById**](ProductComplexRulesApi.md#getComplexRuleById) | **GET** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Get a Complex Rule
[**getComplexRules**](ProductComplexRulesApi.md#getComplexRules) | **GET** /catalog/products/{product_id}/complex-rules | Get Complex Rules
[**updateComplexRule**](ProductComplexRulesApi.md#updateComplexRule) | **PUT** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Update a Complex Rule


# **createComplexRule**
> \Swagger\Client\Model\InlineResponse2001 createComplexRule($product_id, $complex_rule, $accept, $content_type)

Create a Complex Rule

Creates a product *Complex Rule*.  **Required Fields** - modifier_id - modifier_value_id - modifier_value_id - variant_id  **Read-Only Fields** - complex_rule_id - conditions_id - rule_id - combination_id - id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductComplexRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$complex_rule = new \Swagger\Client\Model\ComplexRule(); // \Swagger\Client\Model\ComplexRule | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createComplexRule($product_id, $complex_rule, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductComplexRulesApi->createComplexRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **complex_rule** | [**\Swagger\Client\Model\ComplexRule**](../Model/ComplexRule.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteComplexRuleById**
> deleteComplexRuleById($product_id, $complex_rule_id, $content_type, $accept)

Delete a Complex Rule

Deletes a product *Complex Rule*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductComplexRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$complex_rule_id = 56; // int | The ID of the `ComplexRule`.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $apiInstance->deleteComplexRuleById($product_id, $complex_rule_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ProductComplexRulesApi->deleteComplexRuleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **complex_rule_id** | **int**| The ID of the &#x60;ComplexRule&#x60;. |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComplexRuleById**
> \Swagger\Client\Model\InlineResponse2001 getComplexRuleById($product_id, $complex_rule_id, $accept, $content_type, $include_fields, $exclude_fields)

Get a Complex Rule

Returns a single *Complex Rule*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductComplexRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$complex_rule_id = 56; // int | The ID of the `ComplexRule`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getComplexRuleById($product_id, $complex_rule_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductComplexRulesApi->getComplexRuleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **complex_rule_id** | **int**| The ID of the &#x60;ComplexRule&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComplexRules**
> \Swagger\Client\Model\ComplexRuleCollectionResponse getComplexRules($product_id, $accept, $content_type, $include_fields, $exclude_fields)

Get Complex Rules

Returns a list of all product *Complex Rules*. Optional parameters may be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductComplexRulesApi(
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

try {
    $result = $apiInstance->getComplexRules($product_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductComplexRulesApi->getComplexRules: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\ComplexRuleCollectionResponse**](../Model/ComplexRuleCollectionResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateComplexRule**
> \Swagger\Client\Model\InlineResponse2001 updateComplexRule($product_id, $complex_rule_id, $complex_rule)

Update a Complex Rule

Updates a *Complex Rule*.  **Required Fields**: - none  **Read-Only Fields**: - complex_rule_id - conditions_id - rule_id - combination_id - id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductComplexRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$complex_rule_id = 56; // int | The ID of the `ComplexRule`.
$complex_rule = new \Swagger\Client\Model\ComplexRule2(); // \Swagger\Client\Model\ComplexRule2 | 

try {
    $result = $apiInstance->updateComplexRule($product_id, $complex_rule_id, $complex_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductComplexRulesApi->updateComplexRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **complex_rule_id** | **int**| The ID of the &#x60;ComplexRule&#x60;. |
 **complex_rule** | [**\Swagger\Client\Model\ComplexRule2**](../Model/ComplexRule2.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

