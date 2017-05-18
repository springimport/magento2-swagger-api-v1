<?php
/**
 * SalesRuleDataConditionInterface
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
 * SalesRuleDataConditionInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface ConditionInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesRuleDataConditionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-rule-data-condition-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditionType' => 'string',
        'conditions' => '\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionInterface[]',
        'aggregatorType' => 'string',
        'operator' => 'string',
        'attributeName' => 'string',
        'value' => 'string',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionExtensionInterface'
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
        'conditionType' => 'condition_type',
        'conditions' => 'conditions',
        'aggregatorType' => 'aggregator_type',
        'operator' => 'operator',
        'attributeName' => 'attribute_name',
        'value' => 'value',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'conditionType' => 'setConditionType',
        'conditions' => 'setConditions',
        'aggregatorType' => 'setAggregatorType',
        'operator' => 'setOperator',
        'attributeName' => 'setAttributeName',
        'value' => 'setValue',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'conditionType' => 'getConditionType',
        'conditions' => 'getConditions',
        'aggregatorType' => 'getAggregatorType',
        'operator' => 'getOperator',
        'attributeName' => 'getAttributeName',
        'value' => 'getValue',
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
        $this->container['conditionType'] = isset($data['conditionType']) ? $data['conditionType'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['aggregatorType'] = isset($data['aggregatorType']) ? $data['aggregatorType'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['attributeName'] = isset($data['attributeName']) ? $data['attributeName'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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

        if ($this->container['conditionType'] === null) {
            $invalid_properties[] = "'conditionType' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalid_properties[] = "'operator' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
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

        if ($this->container['conditionType'] === null) {
            return false;
        }
        if ($this->container['operator'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets conditionType
     * @return string
     */
    public function getConditionType()
    {
        return $this->container['conditionType'];
    }

    /**
     * Sets conditionType
     * @param string $conditionType Condition type
     * @return $this
     */
    public function setConditionType($conditionType)
    {
        $this->container['conditionType'] = $conditionType;

        return $this;
    }

    /**
     * Gets conditions
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionInterface[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionInterface[] $conditions List of conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets aggregatorType
     * @return string
     */
    public function getAggregatorType()
    {
        return $this->container['aggregatorType'];
    }

    /**
     * Sets aggregatorType
     * @param string $aggregatorType The aggregator type
     * @return $this
     */
    public function setAggregatorType($aggregatorType)
    {
        $this->container['aggregatorType'] = $aggregatorType;

        return $this;
    }

    /**
     * Gets operator
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     * @param string $operator The operator of the condition
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets attributeName
     * @return string
     */
    public function getAttributeName()
    {
        return $this->container['attributeName'];
    }

    /**
     * Sets attributeName
     * @param string $attributeName The attribute name of the condition
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->container['attributeName'] = $attributeName;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value of the condition
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataConditionExtensionInterface $extensionAttributes
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


