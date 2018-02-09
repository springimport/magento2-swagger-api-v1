<?php
/**
 * QuoteDataCartItemInterface
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
 * QuoteDataCartItemInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CartItemInterface
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataCartItemInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-cart-item-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemId' => 'int',
        'sku' => 'string',
        'qty' => 'float',
        'name' => 'string',
        'price' => 'float',
        'productType' => 'string',
        'quoteId' => 'string',
        'productOption' => '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataProductOptionInterface',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemId' => null,
        'sku' => null,
        'qty' => null,
        'name' => null,
        'price' => null,
        'productType' => null,
        'quoteId' => null,
        'productOption' => null,
        'extensionAttributes' => null
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
        'itemId' => 'item_id',
        'sku' => 'sku',
        'qty' => 'qty',
        'name' => 'name',
        'price' => 'price',
        'productType' => 'product_type',
        'quoteId' => 'quote_id',
        'productOption' => 'product_option',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemId' => 'setItemId',
        'sku' => 'setSku',
        'qty' => 'setQty',
        'name' => 'setName',
        'price' => 'setPrice',
        'productType' => 'setProductType',
        'quoteId' => 'setQuoteId',
        'productOption' => 'setProductOption',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemId' => 'getItemId',
        'sku' => 'getSku',
        'qty' => 'getQty',
        'name' => 'getName',
        'price' => 'getPrice',
        'productType' => 'getProductType',
        'quoteId' => 'getQuoteId',
        'productOption' => 'getProductOption',
        'extensionAttributes' => 'getExtensionAttributes'
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['quoteId'] = isset($data['quoteId']) ? $data['quoteId'] : null;
        $this->container['productOption'] = isset($data['productOption']) ? $data['productOption'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        if ($this->container['quoteId'] === null) {
            $invalidProperties[] = "'quoteId' can't be null";
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

        if ($this->container['qty'] === null) {
            return false;
        }
        if ($this->container['quoteId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets itemId
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param int $itemId Item ID. Otherwise, null.
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Product SKU. Otherwise, null.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float $qty Product quantity.
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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
     * @param string $name Product name. Otherwise, null.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Product price. Otherwise, null.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string $productType Product type. Otherwise, null.
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

        return $this;
    }

    /**
     * Gets quoteId
     *
     * @return string
     */
    public function getQuoteId()
    {
        return $this->container['quoteId'];
    }

    /**
     * Sets quoteId
     *
     * @param string $quoteId Quote id.
     *
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        $this->container['quoteId'] = $quoteId;

        return $this;
    }

    /**
     * Gets productOption
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\QuoteDataProductOptionInterface
     */
    public function getProductOption()
    {
        return $this->container['productOption'];
    }

    /**
     * Sets productOption
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\QuoteDataProductOptionInterface $productOption productOption
     *
     * @return $this
     */
    public function setProductOption($productOption)
    {
        $this->container['productOption'] = $productOption;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

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


