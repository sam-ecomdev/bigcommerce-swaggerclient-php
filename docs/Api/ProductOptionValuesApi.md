# Swagger\Client\ProductOptionValuesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOptionValue**](ProductOptionValuesApi.md#createOptionValue) | **POST** /catalog/products/{product_id}/options/{option_id}/values | Create Product Option Values
[**deleteOptionValueById**](ProductOptionValuesApi.md#deleteOptionValueById) | **DELETE** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Delete a Product Option Value
[**getOptionValueById**](ProductOptionValuesApi.md#getOptionValueById) | **GET** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Get a Product Option Value
[**getOptionValues**](ProductOptionValuesApi.md#getOptionValues) | **GET** /catalog/products/{product_id}/options/{option_id}/values | Get all Product Option Values
[**updateOptionValue**](ProductOptionValuesApi.md#updateOptionValue) | **PUT** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Update a Product Option Value


# **createOptionValue**
> \Swagger\Client\Model\VariantResponse createOptionValue($product_id, $option_id, $option_value, $accept, $content_type)

Create Product Option Values

Creates a *Variant Option Value*.  **Required Fields** * label * sort_order  **Read-Only Fields** * id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$option_value = new \stdClass; // object | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createOptionValue($product_id, $option_id, $option_value, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionValuesApi->createOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **option_value** | [**object**](../Model/.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\VariantResponse**](../Model/VariantResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOptionValueById**
> deleteOptionValueById($product_id, $option_id, $value_id, $accept, $content_type)

Delete a Product Option Value

Deletea a *Variant Option Value*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteOptionValueById($product_id, $option_id, $value_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionValuesApi->deleteOptionValueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |
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

# **getOptionValueById**
> \Swagger\Client\Model\VariantResponse getOptionValueById($product_id, $option_id, $value_id, $include_fields, $exclude_fields)

Get a Product Option Value

Returns a single *Variant Option Value*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getOptionValueById($product_id, $option_id, $value_id, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionValuesApi->getOptionValueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\VariantResponse**](../Model/VariantResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptionValues**
> \Swagger\Client\Model\OptionValueCollectionResponse getOptionValues($product_id, $option_id, $accept, $content_type, $include_fields, $exclude_fields)

Get all Product Option Values

Returns a list of all *Variant Option Values*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getOptionValues($product_id, $option_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionValuesApi->getOptionValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\OptionValueCollectionResponse**](../Model/OptionValueCollectionResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOptionValue**
> \Swagger\Client\Model\VariantResponse updateOptionValue($product_id, $option_id, $value_id, $option_value, $accept, $content_type)

Update a Product Option Value

Updates a *Variant Option Value*.  **Read-Only Fields** * id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.
$option_value = new \stdClass; // object | A BigCommerce `OptionValue` object.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateOptionValue($product_id, $option_id, $value_id, $option_value, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionValuesApi->updateOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |
 **option_value** | [**object**](../Model/.md)| A BigCommerce &#x60;OptionValue&#x60; object. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\VariantResponse**](../Model/VariantResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

