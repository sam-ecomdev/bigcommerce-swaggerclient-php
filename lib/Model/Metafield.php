<?php
/**
 * Metafield
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
 * Metafield Class Doc Comment
 *
 * @category Class
 * @description Common Metafield properties.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Metafield implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Metafield';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'permission_set' => 'string',
        'namespace' => 'string',
        'key' => 'string',
        'value' => 'string',
        'description' => 'string',
        'resource_type' => 'string',
        'resource_id' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'permission_set' => null,
        'namespace' => null,
        'key' => null,
        'value' => null,
        'description' => null,
        'resource_type' => null,
        'resource_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'permission_set' => 'permission_set',
        'namespace' => 'namespace',
        'key' => 'key',
        'value' => 'value',
        'description' => 'description',
        'resource_type' => 'resource_type',
        'resource_id' => 'resource_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'permission_set' => 'setPermissionSet',
        'namespace' => 'setNamespace',
        'key' => 'setKey',
        'value' => 'setValue',
        'description' => 'setDescription',
        'resource_type' => 'setResourceType',
        'resource_id' => 'setResourceId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'permission_set' => 'getPermissionSet',
        'namespace' => 'getNamespace',
        'key' => 'getKey',
        'value' => 'getValue',
        'description' => 'getDescription',
        'resource_type' => 'getResourceType',
        'resource_id' => 'getResourceId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const PERMISSION_SET_APP_ONLY = 'app_only';
    const PERMISSION_SET_READ = 'read';
    const PERMISSION_SET_WRITE = 'write';
    const PERMISSION_SET_READ_AND_SF_ACCESS = 'read_and_sf_access';
    const PERMISSION_SET_WRITE_AND_SF_ACCESS = 'write_and_sf_access';
    const RESOURCE_TYPE_CATEGORY = 'category';
    const RESOURCE_TYPE_BRAND = 'brand';
    const RESOURCE_TYPE_PRODUCT = 'product';
    const RESOURCE_TYPE_VARIANT = 'variant';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionSetAllowableValues()
    {
        return [
            self::PERMISSION_SET_APP_ONLY,
            self::PERMISSION_SET_READ,
            self::PERMISSION_SET_WRITE,
            self::PERMISSION_SET_READ_AND_SF_ACCESS,
            self::PERMISSION_SET_WRITE_AND_SF_ACCESS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CATEGORY,
            self::RESOURCE_TYPE_BRAND,
            self::RESOURCE_TYPE_PRODUCT,
            self::RESOURCE_TYPE_VARIANT,
        ];
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
        $this->container['permission_set'] = isset($data['permission_set']) ? $data['permission_set'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resource_type'] = isset($data['resource_type']) ? $data['resource_type'] : null;
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['permission_set'] === null) {
            $invalidProperties[] = "'permission_set' can't be null";
        }
        $allowedValues = $this->getPermissionSetAllowableValues();
        if (!is_null($this->container['permission_set']) && !in_array($this->container['permission_set'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'permission_set', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ((mb_strlen($this->container['namespace']) > 64)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['namespace']) < 1)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ((mb_strlen($this->container['key']) > 64)) {
            $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['key']) < 1)) {
            $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((mb_strlen($this->container['value']) > 65535)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['value']) < 1)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resource_type']) && !in_array($this->container['resource_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resource_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['resource_id']) && ($this->container['resource_id'] > 10000000000)) {
            $invalidProperties[] = "invalid value for 'resource_id', must be smaller than or equal to 10000000000.";
        }

        if (!is_null($this->container['resource_id']) && ($this->container['resource_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'resource_id', must be bigger than or equal to 0.";
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
     * @param int $id Unique ID of the *Metafield*. Read-Only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets permission_set
     *
     * @return string
     */
    public function getPermissionSet()
    {
        return $this->container['permission_set'];
    }

    /**
     * Sets permission_set
     *
     * @param string $permission_set Determines whether the field is completely private to the app that owns the field (`app_only`), or visible to other API consumers (`read`), or completely open for reading and writing to other apps (`write`). Required for POST.
     *
     * @return $this
     */
    public function setPermissionSet($permission_set)
    {
        $allowedValues = $this->getPermissionSetAllowableValues();
        if (!in_array($permission_set, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'permission_set', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permission_set'] = $permission_set;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace Namespace for the metafield, for organizational purposes. This is set set by the developer. Required for POST.
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        if ((mb_strlen($namespace) > 64)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling Metafield., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($namespace) < 1)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key The name of the field, for example: `location_id`, `color`. Required for POST.
     *
     * @return $this
     */
    public function setKey($key)
    {
        if ((mb_strlen($key) > 64)) {
            throw new \InvalidArgumentException('invalid length for $key when calling Metafield., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $key when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The value of the field, for example: `1`, `blue`. Required for POST.
     *
     * @return $this
     */
    public function setValue($value)
    {
        if ((mb_strlen($value) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Metafield., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Metafield., must be bigger than or equal to 1.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description for the metafields.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Metafield., must be smaller than or equal to 255.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Metafield., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets resource_type
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param string $resource_type The type of resource with which the metafield is associated.
     *
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($resource_type) && !in_array($resource_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resource_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return int
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param int $resource_id The ID for the resource with which the metafield is associated.
     *
     * @return $this
     */
    public function setResourceId($resource_id)
    {

        if (!is_null($resource_id) && ($resource_id > 10000000000)) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling Metafield., must be smaller than or equal to 10000000000.');
        }
        if (!is_null($resource_id) && ($resource_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling Metafield., must be bigger than or equal to 0.');
        }

        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time of the metafield's creation. Read-Only.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date and time when the metafield was last updated. Read-Only.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


