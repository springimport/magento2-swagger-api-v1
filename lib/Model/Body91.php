<?php
/**
 * Body91
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B 2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;
use \SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * Body91 Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body91 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_91';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoItemCreationInterface[]',
        'isOnline' => 'bool',
        'notify' => 'bool',
        'appendComment' => 'bool',
        'comment' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCommentCreationInterface',
        'arguments' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCreationArgumentsInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'isOnline' => null,
        'notify' => null,
        'appendComment' => null,
        'comment' => null,
        'arguments' => null
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
        'items' => 'items',
        'isOnline' => 'isOnline',
        'notify' => 'notify',
        'appendComment' => 'appendComment',
        'comment' => 'comment',
        'arguments' => 'arguments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'isOnline' => 'setIsOnline',
        'notify' => 'setNotify',
        'appendComment' => 'setAppendComment',
        'comment' => 'setComment',
        'arguments' => 'setArguments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'isOnline' => 'getIsOnline',
        'notify' => 'getNotify',
        'appendComment' => 'getAppendComment',
        'comment' => 'getComment',
        'arguments' => 'getArguments'
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
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['isOnline'] = isset($data['isOnline']) ? $data['isOnline'] : null;
        $this->container['notify'] = isset($data['notify']) ? $data['notify'] : null;
        $this->container['appendComment'] = isset($data['appendComment']) ? $data['appendComment'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets items
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoItemCreationInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoItemCreationInterface[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets isOnline
     *
     * @return bool
     */
    public function getIsOnline()
    {
        return $this->container['isOnline'];
    }

    /**
     * Sets isOnline
     *
     * @param bool $isOnline isOnline
     *
     * @return $this
     */
    public function setIsOnline($isOnline)
    {
        $this->container['isOnline'] = $isOnline;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return bool
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param bool $notify notify
     *
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

        return $this;
    }

    /**
     * Gets appendComment
     *
     * @return bool
     */
    public function getAppendComment()
    {
        return $this->container['appendComment'];
    }

    /**
     * Sets appendComment
     *
     * @param bool $appendComment appendComment
     *
     * @return $this
     */
    public function setAppendComment($appendComment)
    {
        $this->container['appendComment'] = $appendComment;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCommentCreationInterface
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCommentCreationInterface $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets arguments
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCreationArgumentsInterface
     */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
     * Sets arguments
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCreationArgumentsInterface $arguments arguments
     *
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;

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


