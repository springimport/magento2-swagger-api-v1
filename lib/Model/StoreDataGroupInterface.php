<?php
/**
 * StoreDataGroupInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;

/**
 * StoreDataGroupInterface Class Doc Comment
 *
 * @category    Class
 * @description Group interface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoreDataGroupInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'store-data-group-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'websiteId' => 'int',
        'rootCategoryId' => 'int',
        'defaultStoreId' => 'int',
        'name' => 'string',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\StoreDataGroupExtensionInterface'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'websiteId' => 'website_id',
        'rootCategoryId' => 'root_category_id',
        'defaultStoreId' => 'default_store_id',
        'name' => 'name',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'websiteId' => 'setWebsiteId',
        'rootCategoryId' => 'setRootCategoryId',
        'defaultStoreId' => 'setDefaultStoreId',
        'name' => 'setName',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'websiteId' => 'getWebsiteId',
        'rootCategoryId' => 'getRootCategoryId',
        'defaultStoreId' => 'getDefaultStoreId',
        'name' => 'getName',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['websiteId'] = isset($data['websiteId']) ? $data['websiteId'] : null;
        $this->container['rootCategoryId'] = isset($data['rootCategoryId']) ? $data['rootCategoryId'] : null;
        $this->container['defaultStoreId'] = isset($data['defaultStoreId']) ? $data['defaultStoreId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['websiteId'] === null) {
            $invalid_properties[] = "'websiteId' can't be null";
        }
        if ($this->container['rootCategoryId'] === null) {
            $invalid_properties[] = "'rootCategoryId' can't be null";
        }
        if ($this->container['defaultStoreId'] === null) {
            $invalid_properties[] = "'defaultStoreId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['websiteId'] === null) {
            return false;
        }
        if ($this->container['rootCategoryId'] === null) {
            return false;
        }
        if ($this->container['defaultStoreId'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets websiteId
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->container['websiteId'];
    }

    /**
     * Sets websiteId
     * @param int $websiteId
     * @return $this
     */
    public function setWebsiteId($websiteId)
    {
        $this->container['websiteId'] = $websiteId;

        return $this;
    }

    /**
     * Gets rootCategoryId
     * @return int
     */
    public function getRootCategoryId()
    {
        return $this->container['rootCategoryId'];
    }

    /**
     * Sets rootCategoryId
     * @param int $rootCategoryId
     * @return $this
     */
    public function setRootCategoryId($rootCategoryId)
    {
        $this->container['rootCategoryId'] = $rootCategoryId;

        return $this;
    }

    /**
     * Gets defaultStoreId
     * @return int
     */
    public function getDefaultStoreId()
    {
        return $this->container['defaultStoreId'];
    }

    /**
     * Sets defaultStoreId
     * @param int $defaultStoreId
     * @return $this
     */
    public function setDefaultStoreId($defaultStoreId)
    {
        $this->container['defaultStoreId'] = $defaultStoreId;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\StoreDataGroupExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\StoreDataGroupExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


