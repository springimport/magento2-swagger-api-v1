<?php
/**
 * ConfigurableProductDataOptionInterface
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
 * ConfigurableProductDataOptionInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface OptionInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurableProductDataOptionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'configurable-product-data-option-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'attributeId' => 'string',
        'label' => 'string',
        'position' => 'int',
        'isUseDefault' => 'bool',
        'values' => '\SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionValueInterface[]',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionExtensionInterface',
        'productId' => 'int'
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
        'attributeId' => 'attribute_id',
        'label' => 'label',
        'position' => 'position',
        'isUseDefault' => 'is_use_default',
        'values' => 'values',
        'extensionAttributes' => 'extension_attributes',
        'productId' => 'product_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'attributeId' => 'setAttributeId',
        'label' => 'setLabel',
        'position' => 'setPosition',
        'isUseDefault' => 'setIsUseDefault',
        'values' => 'setValues',
        'extensionAttributes' => 'setExtensionAttributes',
        'productId' => 'setProductId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'attributeId' => 'getAttributeId',
        'label' => 'getLabel',
        'position' => 'getPosition',
        'isUseDefault' => 'getIsUseDefault',
        'values' => 'getValues',
        'extensionAttributes' => 'getExtensionAttributes',
        'productId' => 'getProductId'
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
        $this->container['attributeId'] = isset($data['attributeId']) ? $data['attributeId'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['isUseDefault'] = isset($data['isUseDefault']) ? $data['isUseDefault'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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
     * Gets attributeId
     * @return string
     */
    public function getAttributeId()
    {
        return $this->container['attributeId'];
    }

    /**
     * Sets attributeId
     * @param string $attributeId
     * @return $this
     */
    public function setAttributeId($attributeId)
    {
        $this->container['attributeId'] = $attributeId;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets isUseDefault
     * @return bool
     */
    public function getIsUseDefault()
    {
        return $this->container['isUseDefault'];
    }

    /**
     * Sets isUseDefault
     * @param bool $isUseDefault
     * @return $this
     */
    public function setIsUseDefault($isUseDefault)
    {
        $this->container['isUseDefault'] = $isUseDefault;

        return $this;
    }

    /**
     * Gets values
     * @return \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionValueInterface[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionValueInterface[] $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets productId
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

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


