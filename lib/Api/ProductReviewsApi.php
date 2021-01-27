<?php
/**
 * ProductReviewsApi
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
 * ProductReviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductReviewsApi
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
     * Operation createProductReview
     *
     * Create a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  object $product_review product_review (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductReviewResponse
     */
    public function createProductReview($product_id, $product_review, $accept, $content_type)
    {
        list($response) = $this->createProductReviewWithHttpInfo($product_id, $product_review, $accept, $content_type);
        return $response;
    }

    /**
     * Operation createProductReviewWithHttpInfo
     *
     * Create a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  object $product_review (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductReviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProductReviewWithHttpInfo($product_id, $product_review, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->createProductReviewRequest($product_id, $product_review, $accept, $content_type);

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
                        '\Swagger\Client\Model\ProductReviewResponse',
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
     * Operation createProductReviewAsync
     *
     * Create a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  object $product_review (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProductReviewAsync($product_id, $product_review, $accept, $content_type)
    {
        return $this->createProductReviewAsyncWithHttpInfo($product_id, $product_review, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createProductReviewAsyncWithHttpInfo
     *
     * Create a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  object $product_review (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProductReviewAsyncWithHttpInfo($product_id, $product_review, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->createProductReviewRequest($product_id, $product_review, $accept, $content_type);

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
     * Create request for operation 'createProductReview'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  object $product_review (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createProductReviewRequest($product_id, $product_review, $accept, $content_type)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling createProductReview'
            );
        }
        // verify the required parameter 'product_review' is set
        if ($product_review === null || (is_array($product_review) && count($product_review) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_review when calling createProductReview'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling createProductReview'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling createProductReview'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/reviews';
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($product_review)) {
            $_tempBody = $product_review;
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
     * Operation deleteProductReview
     *
     * Delete a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteProductReview($product_id, $review_id, $accept, $content_type)
    {
        $this->deleteProductReviewWithHttpInfo($product_id, $review_id, $accept, $content_type);
    }

    /**
     * Operation deleteProductReviewWithHttpInfo
     *
     * Delete a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProductReviewWithHttpInfo($product_id, $review_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteProductReviewRequest($product_id, $review_id, $accept, $content_type);

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
     * Operation deleteProductReviewAsync
     *
     * Delete a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductReviewAsync($product_id, $review_id, $accept, $content_type)
    {
        return $this->deleteProductReviewAsyncWithHttpInfo($product_id, $review_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteProductReviewAsyncWithHttpInfo
     *
     * Delete a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductReviewAsyncWithHttpInfo($product_id, $review_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteProductReviewRequest($product_id, $review_id, $accept, $content_type);

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
     * Create request for operation 'deleteProductReview'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteProductReviewRequest($product_id, $review_id, $accept, $content_type)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling deleteProductReview'
            );
        }
        // verify the required parameter 'review_id' is set
        if ($review_id === null || (is_array($review_id) && count($review_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $review_id when calling deleteProductReview'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteProductReview'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteProductReview'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/reviews/{review_id}';
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($review_id !== null) {
            $resourcePath = str_replace(
                '{' . 'review_id' . '}',
                ObjectSerializer::toPathValue($review_id),
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
     * Operation getProductReviewById
     *
     * Get a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductReviewResponse
     */
    public function getProductReviewById($product_id, $review_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getProductReviewByIdWithHttpInfo($product_id, $review_id, $accept, $content_type, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getProductReviewByIdWithHttpInfo
     *
     * Get a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductReviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductReviewByIdWithHttpInfo($product_id, $review_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->getProductReviewByIdRequest($product_id, $review_id, $accept, $content_type, $include_fields, $exclude_fields);

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
                        '\Swagger\Client\Model\ProductReviewResponse',
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
     * Operation getProductReviewByIdAsync
     *
     * Get a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewByIdAsync($product_id, $review_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        return $this->getProductReviewByIdAsyncWithHttpInfo($product_id, $review_id, $accept, $content_type, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductReviewByIdAsyncWithHttpInfo
     *
     * Get a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewByIdAsyncWithHttpInfo($product_id, $review_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->getProductReviewByIdRequest($product_id, $review_id, $accept, $content_type, $include_fields, $exclude_fields);

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
     * Create request for operation 'getProductReviewById'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductReviewByIdRequest($product_id, $review_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProductReviewById'
            );
        }
        // verify the required parameter 'review_id' is set
        if ($review_id === null || (is_array($review_id) && count($review_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $review_id when calling getProductReviewById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getProductReviewById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getProductReviewById'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/reviews/{review_id}';
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($review_id !== null) {
            $resourcePath = str_replace(
                '{' . 'review_id' . '}',
                ObjectSerializer::toPathValue($review_id),
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
     * Operation getProductReviews
     *
     * Get Product Reviews
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductReviewCollectionResponse
     */
    public function getProductReviews($product_id, $accept, $content_type, $include_fields = null, $exclude_fields = null, $page = null, $limit = null)
    {
        list($response) = $this->getProductReviewsWithHttpInfo($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit);
        return $response;
    }

    /**
     * Operation getProductReviewsWithHttpInfo
     *
     * Get Product Reviews
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductReviewCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductReviewsWithHttpInfo($product_id, $accept, $content_type, $include_fields = null, $exclude_fields = null, $page = null, $limit = null)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewCollectionResponse';
        $request = $this->getProductReviewsRequest($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit);

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
                        '\Swagger\Client\Model\ProductReviewCollectionResponse',
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
     * Operation getProductReviewsAsync
     *
     * Get Product Reviews
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewsAsync($product_id, $accept, $content_type, $include_fields = null, $exclude_fields = null, $page = null, $limit = null)
    {
        return $this->getProductReviewsAsyncWithHttpInfo($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductReviewsAsyncWithHttpInfo
     *
     * Get Product Reviews
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewsAsyncWithHttpInfo($product_id, $accept, $content_type, $include_fields = null, $exclude_fields = null, $page = null, $limit = null)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewCollectionResponse';
        $request = $this->getProductReviewsRequest($product_id, $accept, $content_type, $include_fields, $exclude_fields, $page, $limit);

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
     * Create request for operation 'getProductReviews'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductReviewsRequest($product_id, $accept, $content_type, $include_fields = null, $exclude_fields = null, $page = null, $limit = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProductReviews'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getProductReviews'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getProductReviews'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/reviews';
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
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
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
     * Operation updateProductReview
     *
     * Update a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  object $product_review A BigCommerce &#x60;ProductReview&#x60; object. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ProductReviewResponse
     */
    public function updateProductReview($product_id, $review_id, $product_review, $accept, $content_type)
    {
        list($response) = $this->updateProductReviewWithHttpInfo($product_id, $review_id, $product_review, $accept, $content_type);
        return $response;
    }

    /**
     * Operation updateProductReviewWithHttpInfo
     *
     * Update a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  object $product_review A BigCommerce &#x60;ProductReview&#x60; object. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ProductReviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProductReviewWithHttpInfo($product_id, $review_id, $product_review, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->updateProductReviewRequest($product_id, $review_id, $product_review, $accept, $content_type);

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
                        '\Swagger\Client\Model\ProductReviewResponse',
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
     * Operation updateProductReviewAsync
     *
     * Update a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  object $product_review A BigCommerce &#x60;ProductReview&#x60; object. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductReviewAsync($product_id, $review_id, $product_review, $accept, $content_type)
    {
        return $this->updateProductReviewAsyncWithHttpInfo($product_id, $review_id, $product_review, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateProductReviewAsyncWithHttpInfo
     *
     * Update a Product Review
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  object $product_review A BigCommerce &#x60;ProductReview&#x60; object. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductReviewAsyncWithHttpInfo($product_id, $review_id, $product_review, $accept, $content_type)
    {
        $returnType = '\Swagger\Client\Model\ProductReviewResponse';
        $request = $this->updateProductReviewRequest($product_id, $review_id, $product_review, $accept, $content_type);

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
     * Create request for operation 'updateProductReview'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $review_id The ID of the &#x60;review&#x60; that is being operated on. (required)
     * @param  object $product_review A BigCommerce &#x60;ProductReview&#x60; object. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateProductReviewRequest($product_id, $review_id, $product_review, $accept, $content_type)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling updateProductReview'
            );
        }
        // verify the required parameter 'review_id' is set
        if ($review_id === null || (is_array($review_id) && count($review_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $review_id when calling updateProductReview'
            );
        }
        // verify the required parameter 'product_review' is set
        if ($product_review === null || (is_array($product_review) && count($product_review) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_review when calling updateProductReview'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateProductReview'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateProductReview'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/reviews/{review_id}';
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($review_id !== null) {
            $resourcePath = str_replace(
                '{' . 'review_id' . '}',
                ObjectSerializer::toPathValue($review_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($product_review)) {
            $_tempBody = $product_review;
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
