# Swagger\Client\ProductOptionsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOption**](ProductOptionsApi.md#createOption) | **POST** /catalog/products/{product_id}/options | Create a Product Option
[**deleteOptionById**](ProductOptionsApi.md#deleteOptionById) | **DELETE** /catalog/products/{product_id}/options/{option_id} | Delete a Product Option
[**getOptionById**](ProductOptionsApi.md#getOptionById) | **GET** /catalog/products/{product_id}/options/{option_id} | Get a Product Option
[**getOptions**](ProductOptionsApi.md#getOptions) | **GET** /catalog/products/{product_id}/options | Get all Product Options
[**updateOption**](ProductOptionsApi.md#updateOption) | **PUT** /catalog/products/{product_id}/options/{option_id} | Update a Product Option


# **createOption**
> \Swagger\Client\Model\VariantResponse createOption($product_id, $option, $accept, $content_type)

Create a Product Option

Creates a *Variant Option*.  **Required Fields** * display_name * type * option_values  **Read-Only Fields** * id  **Notes**  * Only one variant option at a time can be created; individual variant options will contain an array of multiple values. * There are several examples listed below that create options, but the SKU’s are not updated and they are not a variant on the product. Variant SKUs must be created with a separate request. * Variant options will show on the storefront as an option that can be selected by the customer. A request like this could be used to add new choices to a variant that has already been created. * If more than one variant needs to be created use the [Create a Product](/api-reference/catalog/catalog-api/products/createproduct) endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option = new \stdClass; // object | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createOption($product_id, $option, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->createOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option** | [**object**](../Model/.md)|  |
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

# **deleteOptionById**
> deleteOptionById($product_id, $option_id, $accept, $content_type)

Delete a Product Option

Deletes a *Variant Option*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteOptionById($product_id, $option_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->deleteOptionById: ', $e->getMessage(), PHP_EOL;
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

### Return type

void (empty response body)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptionById**
> \Swagger\Client\Model\OptionResponse getOptionById($product_id, $option_id, $content_type, $accept, $include_fields, $exclude_fields)

Get a Product Option

Returns a single *Variant Option*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getOptionById($product_id, $option_id, $content_type, $accept, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->getOptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\OptionResponse**](../Model/OptionResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptions**
> \Swagger\Client\Model\OptionCollectionResponse getOptions($product_id, $page, $limit, $include_fields, $exclude_fields)

Get all Product Options

Returns a list of product *Variant Options*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getOptions($product_id, $page, $limit, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->getOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\OptionCollectionResponse**](../Model/OptionCollectionResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOption**
> \Swagger\Client\Model\VariantResponse updateOption($product_id, $option_id, $option, $accept, $content_type)

Update a Product Option

Updates a *Variant Option*.  **Read-Only Fields** * id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$option_id = 56; // int | The ID of the `Option`.
$option = new \stdClass; // object | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateOption($product_id, $option_id, $option, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->updateOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **option_id** | **int**| The ID of the &#x60;Option&#x60;. |
 **option** | [**object**](../Model/.md)|  |
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

