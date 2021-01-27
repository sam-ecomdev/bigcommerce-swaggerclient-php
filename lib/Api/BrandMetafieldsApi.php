<?php
/**
 * BrandMetafieldsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog
 *
 * Manage products, brands and categories. To learn more about catalog resources see [Catalog Overview](https://developer.bigcommerce.com/api-docs/catalog/products-overview).  - [Authentication](#authentication) - [Differentiating Variants & Modifiers](#variants-and-modifiers) - [Available Endpoints](#available-endpoints) - [Resources](#resources)  ## Authentication Requests can be authenticated by sending an `access_token` via `X-Auth-Token` HTTP header:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### OAuth Scopes | UI Name  | Permission | Parameter                     | |----------|------------|-------------------------------| | Products | modify     | `store_v2_products`           | | Products | read-only  | `store_v2_products_read_only` |  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Differentiating Variants and Modifiers [Variants](https://support.bigcommerce.com/s/article/Product-Options-v3#variations) represent a physical product made up of [Product Option](https://support.bigcommerce.com/s/article/Product-Options-v3) choices, i.e. a large blue t-shirt. Each variant can have a unique SKU.  Modifiers represent a choice a customer makes about a product that doesn't represent a physical item, i.e. text to be printed on a t-shirt. Assigning a SKU to a modifier will turn it into a variant.  See [Variant Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#variant-options) and [Modifier Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#modifier-options) for more information.  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Brand Images                            | Create and manage brand images                                          | | Brand Metafields                        | Create and manage brand metafields                                      | | Brands                                  | Create and manage brands                                                | | Catalog                                 | Create and manage store categories, products, and brands                | | Categories                              | Create and manage categorties                                           | | Category Images                         | Create and manage category images                                       | | Category Metafields                     | Create and manage category metafields                                   | | Product Bulk Pricing Rules              | Create and manage product bulk pricing rules                            | | Product Complex Rules                   | Create and manage product complex rules                                 | | Product Custom Fields                   | Create and manage product custom fields                                 | | Product Images                          | Create and manage product images                                        | | Product Metafields                      | Create and manage product meta fields                                   | | Product Modifier Images                 | Create and manage product modifer images                                | | Product Modifier Values                 | Create and manage product modifier values                               | | Product Modifiers                       | Create and manage product midifiers                                     | | Product Reviews                         | Create and manage product reviews                                       | | Product Variant Option Values           | Create and manage product variant option values                         | | Product Variant Options                 | Create and manage product variant options                               | | Product Variants                        | Create and manage product variants                                      | | Product Videos                          | Create and manage product videos                                        | | Products                                | Create and manage products                                              | | ProductVariant Metafields               | Create and manage product meta flields                                  | | Variants                                | Get and update all variants                                             |  ## Resources  ### Webhooks * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [Categories](/api-docs/getting-started/webhooks/webhook-events#webhook-events_category) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related Endpoints * [Catalog API](/api-reference/catalog/catalog-api)
 *
 * OpenAPI spec version: 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BrandMetafieldsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BrandMetafieldsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createBrandMetafield
     *
     * Create a Brand Metafield
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPost $metafield metafield (required)
     * @param  string $content_type content_type (required)
     * @param  string $accept accept (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\MetafieldResponse3
     */
    public function createBrandMetafield($brand_id, $metafield, $content_type, $accept)
    {
        list($response) = $this->createBrandMetafieldWithHttpInfo($brand_id, $metafield, $content_type, $accept);
        return $response;
    }

    /**
     * Operation createBrandMetafieldWithHttpInfo
     *
     * Create a Brand Metafield
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPost $metafield (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\MetafieldResponse3, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBrandMetafieldWithHttpInfo($brand_id, $metafield, $content_type, $accept)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse3';
        $request = $this->createBrandMetafieldRequest($brand_id, $metafield, $content_type, $accept);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MetafieldResponse3',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createBrandMetafieldAsync
     *
     * Create a Brand Metafield
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPost $metafield (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBrandMetafieldAsync($brand_id, $metafield, $content_type, $accept)
    {
        return $this->createBrandMetafieldAsyncWithHttpInfo($brand_id, $metafield, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createBrandMetafieldAsyncWithHttpInfo
     *
     * Create a Brand Metafield
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPost $metafield (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBrandMetafieldAsyncWithHttpInfo($brand_id, $metafield, $content_type, $accept)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse3';
        $request = $this->createBrandMetafieldRequest($brand_id, $metafield, $content_type, $accept);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createBrandMetafield'
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPost $metafield (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createBrandMetafieldRequest($brand_id, $metafield, $content_type, $accept)
    {
        // verify the required parameter 'brand_id' is set
        if ($brand_id === null || (is_array($brand_id) && count($brand_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $brand_id when calling createBrandMetafield'
            );
        }
        // verify the required parameter 'metafield' is set
        if ($metafield === null || (is_array($metafield) && count($metafield) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield when calling createBrandMetafield'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling createBrandMetafield'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling createBrandMetafield'
            );
        }

        $resourcePath = '/catalog/brands/{brand_id}/metafields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($brand_id !== null) {
            $resourcePath = str_replace(
                '{' . 'brand_id' . '}',
                ObjectSerializer::toPathValue($brand_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($metafield)) {
            $_tempBody = $metafield;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteBrandMetafieldById
     *
     * Delete a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteBrandMetafieldById($metafield_id, $brand_id, $accept, $content_type)
    {
        $this->deleteBrandMetafieldByIdWithHttpInfo($metafield_id, $brand_id, $accept, $content_type);
    }

    /**
     * Operation deleteBrandMetafieldByIdWithHttpInfo
     *
     * Delete a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBrandMetafieldByIdWithHttpInfo($metafield_id, $brand_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteBrandMetafieldByIdRequest($metafield_id, $brand_id, $accept, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteBrandMetafieldByIdAsync
     *
     * Delete a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBrandMetafieldByIdAsync($metafield_id, $brand_id, $accept, $content_type)
    {
        return $this->deleteBrandMetafieldByIdAsyncWithHttpInfo($metafield_id, $brand_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteBrandMetafieldByIdAsyncWithHttpInfo
     *
     * Delete a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBrandMetafieldByIdAsyncWithHttpInfo($metafield_id, $brand_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteBrandMetafieldByIdRequest($metafield_id, $brand_id, $accept, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteBrandMetafieldById'
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteBrandMetafieldByIdRequest($metafield_id, $brand_id, $accept, $content_type)
    {
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling deleteBrandMetafieldById'
            );
        }
        // verify the required parameter 'brand_id' is set
        if ($brand_id === null || (is_array($brand_id) && count($brand_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $brand_id when calling deleteBrandMetafieldById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteBrandMetafieldById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteBrandMetafieldById'
            );
        }

        $resourcePath = '/catalog/brands/{brand_id}/metafields/{metafield_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($brand_id !== null) {
            $resourcePath = str_replace(
                '{' . 'brand_id' . '}',
                ObjectSerializer::toPathValue($brand_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBrandMetafieldByBrandId
     *
     * Get a Brand Metafields
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\MetafieldResponse1
     */
    public function getBrandMetafieldByBrandId($metafield_id, $brand_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getBrandMetafieldByBrandIdWithHttpInfo($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getBrandMetafieldByBrandIdWithHttpInfo
     *
     * Get a Brand Metafields
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\MetafieldResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandMetafieldByBrandIdWithHttpInfo($metafield_id, $brand_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse1';
        $request = $this->getBrandMetafieldByBrandIdRequest($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MetafieldResponse1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBrandMetafieldByBrandIdAsync
     *
     * Get a Brand Metafields
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBrandMetafieldByBrandIdAsync($metafield_id, $brand_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        return $this->getBrandMetafieldByBrandIdAsyncWithHttpInfo($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBrandMetafieldByBrandIdAsyncWithHttpInfo
     *
     * Get a Brand Metafields
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBrandMetafieldByBrandIdAsyncWithHttpInfo($metafield_id, $brand_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse1';
        $request = $this->getBrandMetafieldByBrandIdRequest($metafield_id, $brand_id, $accept, $content_type, $include_fields, $exclude_fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBrandMetafieldByBrandId'
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBrandMetafieldByBrandIdRequest($metafield_id, $brand_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling getBrandMetafieldByBrandId'
            );
        }
        // verify the required parameter 'brand_id' is set
        if ($brand_id === null || (is_array($brand_id) && count($brand_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $brand_id when calling getBrandMetafieldByBrandId'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getBrandMetafieldByBrandId'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getBrandMetafieldByBrandId'
            );
        }

        $resourcePath = '/catalog/brands/{brand_id}/metafields/{metafield_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($brand_id !== null) {
            $resourcePath = str_replace(
                '{' . 'brand_id' . '}',
                ObjectSerializer::toPathValue($brand_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBrandMetafieldsByBrandId
     *
     * Get All Brand Metafields
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $content_type content_type (required)
     * @param  string $accept accept (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin idin (optional)
     * @param  int[] $idnot_in idnot_in (optional)
     * @param  int[] $idmin idmin (optional)
     * @param  int[] $idmax idmax (optional)
     * @param  int[] $idgreater idgreater (optional)
     * @param  int[] $idless idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#39;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#39;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\MetaFieldCollectionResponse1
     */
    public function getBrandMetafieldsByBrandId($brand_id, $content_type, $accept, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getBrandMetafieldsByBrandIdWithHttpInfo($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getBrandMetafieldsByBrandIdWithHttpInfo
     *
     * Get All Brand Metafields
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#39;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#39;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\MetaFieldCollectionResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBrandMetafieldsByBrandIdWithHttpInfo($brand_id, $content_type, $accept, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\MetaFieldCollectionResponse1';
        $request = $this->getBrandMetafieldsByBrandIdRequest($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MetaFieldCollectionResponse1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBrandMetafieldsByBrandIdAsync
     *
     * Get All Brand Metafields
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#39;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#39;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBrandMetafieldsByBrandIdAsync($brand_id, $content_type, $accept, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        return $this->getBrandMetafieldsByBrandIdAsyncWithHttpInfo($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBrandMetafieldsByBrandIdAsyncWithHttpInfo
     *
     * Get All Brand Metafields
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#39;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#39;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBrandMetafieldsByBrandIdAsyncWithHttpInfo($brand_id, $content_type, $accept, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\MetaFieldCollectionResponse1';
        $request = $this->getBrandMetafieldsByBrandIdRequest($brand_id, $content_type, $accept, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBrandMetafieldsByBrandId'
     *
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#39;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#39;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBrandMetafieldsByBrandIdRequest($brand_id, $content_type, $accept, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'brand_id' is set
        if ($brand_id === null || (is_array($brand_id) && count($brand_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $brand_id when calling getBrandMetafieldsByBrandId'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getBrandMetafieldsByBrandId'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getBrandMetafieldsByBrandId'
            );
        }

        $resourcePath = '/catalog/brands/{brand_id}/metafields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if (is_array($idin)) {
            $queryParams['id:in'] = $idin;
        } else
        if ($idin !== null) {
            $queryParams['id:in'] = ObjectSerializer::toQueryValue($idin);
        }
        // query params
        if (is_array($idnot_in)) {
            $queryParams['id:not_in'] = $idnot_in;
        } else
        if ($idnot_in !== null) {
            $queryParams['id:not_in'] = ObjectSerializer::toQueryValue($idnot_in);
        }
        // query params
        if (is_array($idmin)) {
            $queryParams['id:min'] = $idmin;
        } else
        if ($idmin !== null) {
            $queryParams['id:min'] = ObjectSerializer::toQueryValue($idmin);
        }
        // query params
        if (is_array($idmax)) {
            $queryParams['id:max'] = $idmax;
        } else
        if ($idmax !== null) {
            $queryParams['id:max'] = ObjectSerializer::toQueryValue($idmax);
        }
        // query params
        if (is_array($idgreater)) {
            $queryParams['id:greater'] = $idgreater;
        } else
        if ($idgreater !== null) {
            $queryParams['id:greater'] = ObjectSerializer::toQueryValue($idgreater);
        }
        // query params
        if (is_array($idless)) {
            $queryParams['id:less'] = $idless;
        } else
        if ($idless !== null) {
            $queryParams['id:less'] = ObjectSerializer::toQueryValue($idless);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key);
        }
        // query params
        if ($namespace !== null) {
            $queryParams['namespace'] = ObjectSerializer::toQueryValue($namespace);
        }
        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($brand_id !== null) {
            $resourcePath = str_replace(
                '{' . 'brand_id' . '}',
                ObjectSerializer::toPathValue($brand_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateBrandMetafield
     *
     * Update a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPut $metafield metafield (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\MetafieldResponse1
     */
    public function updateBrandMetafield($metafield_id, $brand_id, $metafield, $accept, $content_type)
    {
        list($response) = $this->updateBrandMetafieldWithHttpInfo($metafield_id, $brand_id, $metafield, $accept, $content_type);
        return $response;
    }

    /**
     * Operation updateBrandMetafieldWithHttpInfo
     *
     * Update a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPut $metafield (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\MetafieldResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBrandMetafieldWithHttpInfo($metafield_id, $brand_id, $metafield, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse1';
        $request = $this->updateBrandMetafieldRequest($metafield_id, $brand_id, $metafield, $accept, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MetafieldResponse1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateBrandMetafieldAsync
     *
     * Update a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPut $metafield (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBrandMetafieldAsync($metafield_id, $brand_id, $metafield, $accept, $content_type)
    {
        return $this->updateBrandMetafieldAsyncWithHttpInfo($metafield_id, $brand_id, $metafield, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBrandMetafieldAsyncWithHttpInfo
     *
     * Update a Brand Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPut $metafield (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBrandMetafieldAsyncWithHttpInfo($metafield_id, $brand_id, $metafield, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\MetafieldResponse1';
        $request = $this->updateBrandMetafieldRequest($metafield_id, $brand_id, $metafield, $accept, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateBrandMetafield'
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $brand_id The ID of the &#x60;Brand&#x60; to which the resource belongs. (required)
     * @param  \Swagger\Client\Model\MetafieldPut $metafield (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateBrandMetafieldRequest($metafield_id, $brand_id, $metafield, $accept, $content_type)
    {
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling updateBrandMetafield'
            );
        }
        // verify the required parameter 'brand_id' is set
        if ($brand_id === null || (is_array($brand_id) && count($brand_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $brand_id when calling updateBrandMetafield'
            );
        }
        // verify the required parameter 'metafield' is set
        if ($metafield === null || (is_array($metafield) && count($metafield) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield when calling updateBrandMetafield'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateBrandMetafield'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateBrandMetafield'
            );
        }

        $resourcePath = '/catalog/brands/{brand_id}/metafields/{metafield_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($brand_id !== null) {
            $resourcePath = str_replace(
                '{' . 'brand_id' . '}',
                ObjectSerializer::toPathValue($brand_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($metafield)) {
            $_tempBody = $metafield;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
