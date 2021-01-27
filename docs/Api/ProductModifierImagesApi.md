# Swagger\Client\ProductModifierImagesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createModifierImage**](ProductModifierImagesApi.md#createModifierImage) | **POST** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image | Create Modifier Image
[**deleteModifierImage**](ProductModifierImagesApi.md#deleteModifierImage) | **DELETE** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image | Delete Modifier Image


# **createModifierImage**
> \Swagger\Client\Model\ImageResponse createModifierImage($product_id, $modifier_id, $value_id, $accept, $content_type, $image_file)

Create Modifier Image

Creates a *Modifier Image*.  The image will show on the storefront when the value is selected.   **Required Fields** - image_file: Form posts are the only accepted upload option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductModifierImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$value_id = 56; // int | The ID of the `Modifier`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$image_file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->createModifierImage($product_id, $modifier_id, $value_id, $accept, $content_type, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierImagesApi->createModifierImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **image_file** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageResponse**](../Model/ImageResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModifierImage**
> deleteModifierImage($product_id, $modifier_id, $value_id, $accept, $content_type)

Delete Modifier Image

Deletes a *Modifier Image*.  Deletes the image that was set to show when the modifier value is selected.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductModifierImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$value_id = 56; // int | The ID of the `Modifier`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteModifierImage($product_id, $modifier_id, $value_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierImagesApi->deleteModifierImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
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

