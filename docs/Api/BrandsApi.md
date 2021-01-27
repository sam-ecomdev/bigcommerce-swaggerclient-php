# Swagger\Client\BrandsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrand**](BrandsApi.md#createBrand) | **POST** /catalog/brands | Create a Brand
[**deleteBrandById**](BrandsApi.md#deleteBrandById) | **DELETE** /catalog/brands/{brand_id} | Delete a Brand
[**deleteBrands**](BrandsApi.md#deleteBrands) | **DELETE** /catalog/brands | Delete Brands
[**getBrandById**](BrandsApi.md#getBrandById) | **GET** /catalog/brands/{brand_id} | Get a Brand
[**getBrands**](BrandsApi.md#getBrands) | **GET** /catalog/brands | Get All Brands
[**updateBrand**](BrandsApi.md#updateBrand) | **PUT** /catalog/brands/{brand_id} | Update a Brand


# **createBrand**
> \Swagger\Client\Model\BrandResponse createBrand($brand, $accept, $content_type)

Create a Brand

Creates a *Brand*.  **Required Fields** - name  **Read-Only Fields** - id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = new \Swagger\Client\Model\Brand(); // \Swagger\Client\Model\Brand | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createBrand($brand, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->createBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | [**\Swagger\Client\Model\Brand**](../Model/Brand.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\BrandResponse**](../Model/BrandResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBrandById**
> deleteBrandById($brand_id, $accept, $content_type)

Delete a Brand

Deletes a *Brand*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteBrandById($brand_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->deleteBrandById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
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

# **deleteBrands**
> deleteBrands($accept, $content_type, $name, $page_title)

Delete Brands

By default, it deletes all *Brand* objects. A filter should be added to avoid deleting all *Brand* objects in a store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$name = "name_example"; // string | Filter items by name.
$page_title = "page_title_example"; // string | Filter items by page_title.

try {
    $apiInstance->deleteBrands($accept, $content_type, $name, $page_title);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->deleteBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **name** | **string**| Filter items by name. | [optional]
 **page_title** | **string**| Filter items by page_title. | [optional]

### Return type

void (empty response body)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandById**
> \Swagger\Client\Model\BrandResponse1 getBrandById($brand_id, $content_type, $accept, $include_fields, $exclude_fields)

Get a Brand

Returns a single *Brand*. Optional filter parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getBrandById($brand_id, $content_type, $accept, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->getBrandById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\BrandResponse1**](../Model/BrandResponse1.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrands**
> \Swagger\Client\Model\BrandCollectionResponse getBrands($accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $page_title, $page, $limit, $include_fields, $exclude_fields)

Get All Brands

Returns a list of *Brands*. Optional filter parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$id = 56; // int | Filter items by id.
$idin = array(56); // int[] | 
$idnot_in = array(56); // int[] | 
$idmin = array(56); // int[] | 
$idmax = array(56); // int[] | 
$idgreater = array(56); // int[] | 
$idless = array(56); // int[] | 
$name = "name_example"; // string | Filter items by name.
$page_title = "page_title_example"; // string | Filter items by page_title.
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getBrands($accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $page_title, $page, $limit, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->getBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **id** | **int**| Filter items by id. | [optional]
 **idin** | [**int[]**](../Model/int.md)|  | [optional]
 **idnot_in** | [**int[]**](../Model/int.md)|  | [optional]
 **idmin** | [**int[]**](../Model/int.md)|  | [optional]
 **idmax** | [**int[]**](../Model/int.md)|  | [optional]
 **idgreater** | [**int[]**](../Model/int.md)|  | [optional]
 **idless** | [**int[]**](../Model/int.md)|  | [optional]
 **name** | **string**| Filter items by name. | [optional]
 **page_title** | **string**| Filter items by page_title. | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\BrandCollectionResponse**](../Model/BrandCollectionResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBrand**
> \Swagger\Client\Model\BrandResponse updateBrand($brand_id, $brand, $content_type, $accept)

Update a Brand

Updates a *Brand*.  **Required Fields** - None  **Read-Only Fields** - id  To update a *Brand Image*, send a request with an `image_url`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$brand = new \Swagger\Client\Model\Brand2(); // \Swagger\Client\Model\Brand2 | 
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $result = $apiInstance->updateBrand($brand_id, $brand, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->updateBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **brand** | [**\Swagger\Client\Model\Brand2**](../Model/Brand2.md)|  |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\BrandResponse**](../Model/BrandResponse.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

