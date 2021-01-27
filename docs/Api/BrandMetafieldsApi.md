# Swagger\Client\BrandMetafieldsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrandMetafield**](BrandMetafieldsApi.md#createBrandMetafield) | **POST** /catalog/brands/{brand_id}/metafields | Create a Brand Metafield
[**deleteBrandMetafieldById**](BrandMetafieldsApi.md#deleteBrandMetafieldById) | **DELETE** /catalog/brands/{brand_id}/metafields/{metafield_id} | Delete a Brand Metafield
[**getBrandMetafieldByBrandId**](BrandMetafieldsApi.md#getBrandMetafieldByBrandId) | **GET** /catalog/brands/{brand_id}/metafields/{metafield_id} | Get a Brand Metafields
[**getBrandMetafieldsByBrandId**](BrandMetafieldsApi.md#getBrandMetafieldsByBrandId) | **GET** /catalog/brands/{brand_id}/metafields | Get All Brand Metafields
[**updateBrandMetafield**](BrandMetafieldsApi.md#updateBrandMetafield) | **PUT** /catalog/brands/{brand_id}/metafields/{metafield_id} | Update a Brand Metafield


# **createBrandMetafield**
> \Swagger\Client\Model\MetafieldResponse3 createBrandMetafield($brand_id, $metafield, $content_type, $accept)

Create a Brand Metafield

Creates a *Brand Metafield*.  **Required Fields** - permission_set - namespace - key - value  **Read-Only Fields** - id  **Note:** The max number of metafields allowed on each product, category, variant, or brand is fifty. For more information, see [Platform Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$metafield = new \Swagger\Client\Model\MetafieldPost(); // \Swagger\Client\Model\MetafieldPost | 
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $result = $apiInstance->createBrandMetafield($brand_id, $metafield, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMetafieldsApi->createBrandMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **metafield** | [**\Swagger\Client\Model\MetafieldPost**](../Model/MetafieldPost.md)|  |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\MetafieldResponse3**](../Model/MetafieldResponse3.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBrandMetafieldById**
> deleteBrandMetafieldById($metafield_id, $brand_id, $accept, $content_type)

Delete a Brand Metafield

Deletes a *Brand Metafield*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteBrandMetafieldById($metafield_id, $brand_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling BrandMetafieldsApi->deleteBrandMetafieldById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
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

# **getBrandMetafieldByBrandId**
> \Swagger\Client\Model\MetafieldResponse1 getBrandMetafieldByBrandId($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields)

Get a Brand Metafields

Returns a *Brand Metafield*. Optional filter parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getBrandMetafieldByBrandId($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMetafieldsApi->getBrandMetafieldByBrandId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\MetafieldResponse1**](../Model/MetafieldResponse1.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandMetafieldsByBrandId**
> \Swagger\Client\Model\MetaFieldCollectionResponse1 getBrandMetafieldsByBrandId($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields)

Get All Brand Metafields

Returns a list of *Brand Metafields*. Optional filter parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 
$id = 56; // int | Filter items by id.
$idin = array(56); // int[] | 
$idnot_in = array(56); // int[] | 
$idmin = array(56); // int[] | 
$idmax = array(56); // int[] | 
$idgreater = array(56); // int[] | 
$idless = array(56); // int[] | 
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$key = "key_example"; // string | Filter based on a metafield's key.
$namespace = "namespace_example"; // string | Filter based on a metafield's namespace.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getBrandMetafieldsByBrandId($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMetafieldsApi->getBrandMetafieldsByBrandId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]
 **id** | **int**| Filter items by id. | [optional]
 **idin** | [**int[]**](../Model/int.md)|  | [optional]
 **idnot_in** | [**int[]**](../Model/int.md)|  | [optional]
 **idmin** | [**int[]**](../Model/int.md)|  | [optional]
 **idmax** | [**int[]**](../Model/int.md)|  | [optional]
 **idgreater** | [**int[]**](../Model/int.md)|  | [optional]
 **idless** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **key** | **string**| Filter based on a metafield&#39;s key. | [optional]
 **namespace** | **string**| Filter based on a metafield&#39;s namespace. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\Swagger\Client\Model\MetaFieldCollectionResponse1**](../Model/MetaFieldCollectionResponse1.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBrandMetafield**
> \Swagger\Client\Model\MetafieldResponse1 updateBrandMetafield($metafield_id, $brand_id, $metafield, $accept, $content_type)

Update a Brand Metafield

Updates a *Brand Metafield*.  **Required Fields**   * none  **Read-Only Fields** * id * These fields can only be modified by the app (API credentials) that created the metafield:  * namespace  * key  * permission_set  **Usage Notes** * Attempting to modify `namespace`, `key`, and `permission_set` fields using a client ID different from the one used to create those metafields will result in a 403 error message. * The max number of metafields allowed on each product, category, variant, or brand is fifty. For more information, see [Platform Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$metafield = new \Swagger\Client\Model\MetafieldPut(); // \Swagger\Client\Model\MetafieldPut | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateBrandMetafield($metafield_id, $brand_id, $metafield, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandMetafieldsApi->updateBrandMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **metafield** | [**\Swagger\Client\Model\MetafieldPut**](../Model/MetafieldPut.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\Swagger\Client\Model\MetafieldResponse1**](../Model/MetafieldResponse1.md)

### Authorization

[X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

