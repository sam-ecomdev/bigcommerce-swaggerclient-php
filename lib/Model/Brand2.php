<?php
/**
 * Brand2
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Brand2 Class Doc Comment
 *
 * @category Class
 * @description Common Brand properties.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Brand2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Brand_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'page_title' => 'string',
        'meta_keywords' => 'string[]',
        'meta_description' => 'string',
        'search_keywords' => 'string',
        'image_url' => 'string',
        'custom_url' => '\Swagger\Client\Model\CustomUrlBrand'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'page_title' => null,
        'meta_keywords' => null,
        'meta_description' => null,
        'search_keywords' => null,
        'image_url' => null,
        'custom_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'page_title' => 'page_title',
        'meta_keywords' => 'meta_keywords',
        'meta_description' => 'meta_description',
        'search_keywords' => 'search_keywords',
        'image_url' => 'image_url',
        'custom_url' => 'custom_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'page_title' => 'setPageTitle',
        'meta_keywords' => 'setMetaKeywords',
        'meta_description' => 'setMetaDescription',
        'search_keywords' => 'setSearchKeywords',
        'image_url' => 'setImageUrl',
        'custom_url' => 'setCustomUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'page_title' => 'getPageTitle',
        'meta_keywords' => 'getMetaKeywords',
        'meta_description' => 'getMetaDescription',
        'search_keywords' => 'getSearchKeywords',
        'image_url' => 'getImageUrl',
        'custom_url' => 'getCustomUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['search_keywords'] = isset($data['search_keywords']) ? $data['search_keywords'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['custom_url'] = isset($data['custom_url']) ? $data['custom_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page_title']) && (mb_strlen($this->container['page_title']) > 255)) {
            $invalidProperties[] = "invalid value for 'page_title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['page_title']) && (mb_strlen($this->container['page_title']) < 0)) {
            $invalidProperties[] = "invalid value for 'page_title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['meta_description']) && (mb_strlen($this->container['meta_description']) > 65535)) {
            $invalidProperties[] = "invalid value for 'meta_description', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['meta_description']) && (mb_strlen($this->container['meta_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'meta_description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['search_keywords']) && (mb_strlen($this->container['search_keywords']) > 65535)) {
            $invalidProperties[] = "invalid value for 'search_keywords', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['search_keywords']) && (mb_strlen($this->container['search_keywords']) < 0)) {
            $invalidProperties[] = "invalid value for 'search_keywords', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique ID of the *Brand*. Read-Only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the brand. Must be unique. Required in POST.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Brand2., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Brand2., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets page_title
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     *
     * @param string $page_title The title shown in the browser while viewing the brand.
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        if (!is_null($page_title) && (mb_strlen($page_title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling Brand2., must be smaller than or equal to 255.');
        }
        if (!is_null($page_title) && (mb_strlen($page_title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling Brand2., must be bigger than or equal to 0.');
        }

        $this->container['page_title'] = $page_title;

        return $this;
    }

    /**
     * Gets meta_keywords
     *
     * @return string[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     *
     * @param string[] $meta_keywords Comma-separated list of meta keywords to include in the HTML.
     *
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string $meta_description A meta description to include.
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        if (!is_null($meta_description) && (mb_strlen($meta_description) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling Brand2., must be smaller than or equal to 65535.');
        }
        if (!is_null($meta_description) && (mb_strlen($meta_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling Brand2., must be bigger than or equal to 0.');
        }

        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return string
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param string $search_keywords A comma-separated list of keywords that can be used to locate this brand.
     *
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        if (!is_null($search_keywords) && (mb_strlen($search_keywords) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling Brand2., must be smaller than or equal to 65535.');
        }
        if (!is_null($search_keywords) && (mb_strlen($search_keywords) < 0)) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling Brand2., must be bigger than or equal to 0.');
        }

        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image URL used for this category on the storefront. Images can be uploaded via form file post to `/brands/{brandId}/image`, or by providing a publicly accessible URL in this field.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets custom_url
     *
     * @return \Swagger\Client\Model\CustomUrlBrand
     */
    public function getCustomUrl()
    {
        return $this->container['custom_url'];
    }

    /**
     * Sets custom_url
     *
     * @param \Swagger\Client\Model\CustomUrlBrand $custom_url custom_url
     *
     * @return $this
     */
    public function setCustomUrl($custom_url)
    {
        $this->container['custom_url'] = $custom_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


