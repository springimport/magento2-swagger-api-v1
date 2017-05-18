<?php
/**
 * GiftWrappingDataWrappingInterface
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
 * GiftWrappingDataWrappingInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface WrappingInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GiftWrappingDataWrappingInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'gift-wrapping-data-wrapping-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wrappingId' => 'int',
        'design' => 'string',
        'status' => 'int',
        'basePrice' => 'float',
        'imageName' => 'string',
        'imageBase64Content' => 'string',
        'baseCurrencyCode' => 'string',
        'websiteIds' => 'int[]',
        'imageUrl' => 'string',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingExtensionInterface'
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
        'wrappingId' => 'wrapping_id',
        'design' => 'design',
        'status' => 'status',
        'basePrice' => 'base_price',
        'imageName' => 'image_name',
        'imageBase64Content' => 'image_base64_content',
        'baseCurrencyCode' => 'base_currency_code',
        'websiteIds' => 'website_ids',
        'imageUrl' => 'image_url',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'wrappingId' => 'setWrappingId',
        'design' => 'setDesign',
        'status' => 'setStatus',
        'basePrice' => 'setBasePrice',
        'imageName' => 'setImageName',
        'imageBase64Content' => 'setImageBase64Content',
        'baseCurrencyCode' => 'setBaseCurrencyCode',
        'websiteIds' => 'setWebsiteIds',
        'imageUrl' => 'setImageUrl',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'wrappingId' => 'getWrappingId',
        'design' => 'getDesign',
        'status' => 'getStatus',
        'basePrice' => 'getBasePrice',
        'imageName' => 'getImageName',
        'imageBase64Content' => 'getImageBase64Content',
        'baseCurrencyCode' => 'getBaseCurrencyCode',
        'websiteIds' => 'getWebsiteIds',
        'imageUrl' => 'getImageUrl',
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
        $this->container['wrappingId'] = isset($data['wrappingId']) ? $data['wrappingId'] : null;
        $this->container['design'] = isset($data['design']) ? $data['design'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['basePrice'] = isset($data['basePrice']) ? $data['basePrice'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageBase64Content'] = isset($data['imageBase64Content']) ? $data['imageBase64Content'] : null;
        $this->container['baseCurrencyCode'] = isset($data['baseCurrencyCode']) ? $data['baseCurrencyCode'] : null;
        $this->container['websiteIds'] = isset($data['websiteIds']) ? $data['websiteIds'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
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

        if ($this->container['design'] === null) {
            $invalid_properties[] = "'design' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['basePrice'] === null) {
            $invalid_properties[] = "'basePrice' can't be null";
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

        if ($this->container['design'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['basePrice'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets wrappingId
     * @return int
     */
    public function getWrappingId()
    {
        return $this->container['wrappingId'];
    }

    /**
     * Sets wrappingId
     * @param int $wrappingId
     * @return $this
     */
    public function setWrappingId($wrappingId)
    {
        $this->container['wrappingId'] = $wrappingId;

        return $this;
    }

    /**
     * Gets design
     * @return string
     */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
     * Sets design
     * @param string $design
     * @return $this
     */
    public function setDesign($design)
    {
        $this->container['design'] = $design;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets basePrice
     * @return float
     */
    public function getBasePrice()
    {
        return $this->container['basePrice'];
    }

    /**
     * Sets basePrice
     * @param float $basePrice
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        $this->container['basePrice'] = $basePrice;

        return $this;
    }

    /**
     * Gets imageName
     * @return string
     */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
     * Sets imageName
     * @param string $imageName
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;

        return $this;
    }

    /**
     * Gets imageBase64Content
     * @return string
     */
    public function getImageBase64Content()
    {
        return $this->container['imageBase64Content'];
    }

    /**
     * Sets imageBase64Content
     * @param string $imageBase64Content
     * @return $this
     */
    public function setImageBase64Content($imageBase64Content)
    {
        $this->container['imageBase64Content'] = $imageBase64Content;

        return $this;
    }

    /**
     * Gets baseCurrencyCode
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['baseCurrencyCode'];
    }

    /**
     * Sets baseCurrencyCode
     * @param string $baseCurrencyCode
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        $this->container['baseCurrencyCode'] = $baseCurrencyCode;

        return $this;
    }

    /**
     * Gets websiteIds
     * @return int[]
     */
    public function getWebsiteIds()
    {
        return $this->container['websiteIds'];
    }

    /**
     * Sets websiteIds
     * @param int[] $websiteIds
     * @return $this
     */
    public function setWebsiteIds($websiteIds)
    {
        $this->container['websiteIds'] = $websiteIds;

        return $this;
    }

    /**
     * Gets imageUrl
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     * @param string $imageUrl Wrapping image URL.
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingExtensionInterface $extensionAttributes
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


