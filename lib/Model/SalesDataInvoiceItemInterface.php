<?php
/**
 * SalesDataInvoiceItemInterface
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
 * SalesDataInvoiceItemInterface Class Doc Comment
 *
 * @category Class
 * @description Invoice item interface. An invoice is a record of the receipt of payment for an order. An invoice item is a purchased item in an invoice.
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesDataInvoiceItemInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-invoice-item-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additionalData' => 'string',
        'baseCost' => 'float',
        'baseDiscountAmount' => 'float',
        'baseDiscountTaxCompensationAmount' => 'float',
        'basePrice' => 'float',
        'basePriceInclTax' => 'float',
        'baseRowTotal' => 'float',
        'baseRowTotalInclTax' => 'float',
        'baseTaxAmount' => 'float',
        'description' => 'string',
        'discountAmount' => 'float',
        'entityId' => 'int',
        'discountTaxCompensationAmount' => 'float',
        'name' => 'string',
        'parentId' => 'int',
        'price' => 'float',
        'priceInclTax' => 'float',
        'productId' => 'int',
        'rowTotal' => 'float',
        'rowTotalInclTax' => 'float',
        'sku' => 'string',
        'taxAmount' => 'float',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceItemExtensionInterface',
        'orderItemId' => 'int',
        'qty' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additionalData' => null,
        'baseCost' => null,
        'baseDiscountAmount' => null,
        'baseDiscountTaxCompensationAmount' => null,
        'basePrice' => null,
        'basePriceInclTax' => null,
        'baseRowTotal' => null,
        'baseRowTotalInclTax' => null,
        'baseTaxAmount' => null,
        'description' => null,
        'discountAmount' => null,
        'entityId' => null,
        'discountTaxCompensationAmount' => null,
        'name' => null,
        'parentId' => null,
        'price' => null,
        'priceInclTax' => null,
        'productId' => null,
        'rowTotal' => null,
        'rowTotalInclTax' => null,
        'sku' => null,
        'taxAmount' => null,
        'extensionAttributes' => null,
        'orderItemId' => null,
        'qty' => null
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
        'additionalData' => 'additional_data',
        'baseCost' => 'base_cost',
        'baseDiscountAmount' => 'base_discount_amount',
        'baseDiscountTaxCompensationAmount' => 'base_discount_tax_compensation_amount',
        'basePrice' => 'base_price',
        'basePriceInclTax' => 'base_price_incl_tax',
        'baseRowTotal' => 'base_row_total',
        'baseRowTotalInclTax' => 'base_row_total_incl_tax',
        'baseTaxAmount' => 'base_tax_amount',
        'description' => 'description',
        'discountAmount' => 'discount_amount',
        'entityId' => 'entity_id',
        'discountTaxCompensationAmount' => 'discount_tax_compensation_amount',
        'name' => 'name',
        'parentId' => 'parent_id',
        'price' => 'price',
        'priceInclTax' => 'price_incl_tax',
        'productId' => 'product_id',
        'rowTotal' => 'row_total',
        'rowTotalInclTax' => 'row_total_incl_tax',
        'sku' => 'sku',
        'taxAmount' => 'tax_amount',
        'extensionAttributes' => 'extension_attributes',
        'orderItemId' => 'order_item_id',
        'qty' => 'qty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalData' => 'setAdditionalData',
        'baseCost' => 'setBaseCost',
        'baseDiscountAmount' => 'setBaseDiscountAmount',
        'baseDiscountTaxCompensationAmount' => 'setBaseDiscountTaxCompensationAmount',
        'basePrice' => 'setBasePrice',
        'basePriceInclTax' => 'setBasePriceInclTax',
        'baseRowTotal' => 'setBaseRowTotal',
        'baseRowTotalInclTax' => 'setBaseRowTotalInclTax',
        'baseTaxAmount' => 'setBaseTaxAmount',
        'description' => 'setDescription',
        'discountAmount' => 'setDiscountAmount',
        'entityId' => 'setEntityId',
        'discountTaxCompensationAmount' => 'setDiscountTaxCompensationAmount',
        'name' => 'setName',
        'parentId' => 'setParentId',
        'price' => 'setPrice',
        'priceInclTax' => 'setPriceInclTax',
        'productId' => 'setProductId',
        'rowTotal' => 'setRowTotal',
        'rowTotalInclTax' => 'setRowTotalInclTax',
        'sku' => 'setSku',
        'taxAmount' => 'setTaxAmount',
        'extensionAttributes' => 'setExtensionAttributes',
        'orderItemId' => 'setOrderItemId',
        'qty' => 'setQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalData' => 'getAdditionalData',
        'baseCost' => 'getBaseCost',
        'baseDiscountAmount' => 'getBaseDiscountAmount',
        'baseDiscountTaxCompensationAmount' => 'getBaseDiscountTaxCompensationAmount',
        'basePrice' => 'getBasePrice',
        'basePriceInclTax' => 'getBasePriceInclTax',
        'baseRowTotal' => 'getBaseRowTotal',
        'baseRowTotalInclTax' => 'getBaseRowTotalInclTax',
        'baseTaxAmount' => 'getBaseTaxAmount',
        'description' => 'getDescription',
        'discountAmount' => 'getDiscountAmount',
        'entityId' => 'getEntityId',
        'discountTaxCompensationAmount' => 'getDiscountTaxCompensationAmount',
        'name' => 'getName',
        'parentId' => 'getParentId',
        'price' => 'getPrice',
        'priceInclTax' => 'getPriceInclTax',
        'productId' => 'getProductId',
        'rowTotal' => 'getRowTotal',
        'rowTotalInclTax' => 'getRowTotalInclTax',
        'sku' => 'getSku',
        'taxAmount' => 'getTaxAmount',
        'extensionAttributes' => 'getExtensionAttributes',
        'orderItemId' => 'getOrderItemId',
        'qty' => 'getQty'
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
        $this->container['additionalData'] = isset($data['additionalData']) ? $data['additionalData'] : null;
        $this->container['baseCost'] = isset($data['baseCost']) ? $data['baseCost'] : null;
        $this->container['baseDiscountAmount'] = isset($data['baseDiscountAmount']) ? $data['baseDiscountAmount'] : null;
        $this->container['baseDiscountTaxCompensationAmount'] = isset($data['baseDiscountTaxCompensationAmount']) ? $data['baseDiscountTaxCompensationAmount'] : null;
        $this->container['basePrice'] = isset($data['basePrice']) ? $data['basePrice'] : null;
        $this->container['basePriceInclTax'] = isset($data['basePriceInclTax']) ? $data['basePriceInclTax'] : null;
        $this->container['baseRowTotal'] = isset($data['baseRowTotal']) ? $data['baseRowTotal'] : null;
        $this->container['baseRowTotalInclTax'] = isset($data['baseRowTotalInclTax']) ? $data['baseRowTotalInclTax'] : null;
        $this->container['baseTaxAmount'] = isset($data['baseTaxAmount']) ? $data['baseTaxAmount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['discountTaxCompensationAmount'] = isset($data['discountTaxCompensationAmount']) ? $data['discountTaxCompensationAmount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['priceInclTax'] = isset($data['priceInclTax']) ? $data['priceInclTax'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['rowTotal'] = isset($data['rowTotal']) ? $data['rowTotal'] : null;
        $this->container['rowTotalInclTax'] = isset($data['rowTotalInclTax']) ? $data['rowTotalInclTax'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['orderItemId'] = isset($data['orderItemId']) ? $data['orderItemId'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['orderItemId'] === null) {
            $invalidProperties[] = "'orderItemId' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
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

        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['orderItemId'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets additionalData
     *
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->container['additionalData'];
    }

    /**
     * Sets additionalData
     *
     * @param string $additionalData Additional data.
     *
     * @return $this
     */
    public function setAdditionalData($additionalData)
    {
        $this->container['additionalData'] = $additionalData;

        return $this;
    }

    /**
     * Gets baseCost
     *
     * @return float
     */
    public function getBaseCost()
    {
        return $this->container['baseCost'];
    }

    /**
     * Sets baseCost
     *
     * @param float $baseCost Base cost.
     *
     * @return $this
     */
    public function setBaseCost($baseCost)
    {
        $this->container['baseCost'] = $baseCost;

        return $this;
    }

    /**
     * Gets baseDiscountAmount
     *
     * @return float
     */
    public function getBaseDiscountAmount()
    {
        return $this->container['baseDiscountAmount'];
    }

    /**
     * Sets baseDiscountAmount
     *
     * @param float $baseDiscountAmount Base discount amount.
     *
     * @return $this
     */
    public function setBaseDiscountAmount($baseDiscountAmount)
    {
        $this->container['baseDiscountAmount'] = $baseDiscountAmount;

        return $this;
    }

    /**
     * Gets baseDiscountTaxCompensationAmount
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount()
    {
        return $this->container['baseDiscountTaxCompensationAmount'];
    }

    /**
     * Sets baseDiscountTaxCompensationAmount
     *
     * @param float $baseDiscountTaxCompensationAmount Base discount tax compensation amount.
     *
     * @return $this
     */
    public function setBaseDiscountTaxCompensationAmount($baseDiscountTaxCompensationAmount)
    {
        $this->container['baseDiscountTaxCompensationAmount'] = $baseDiscountTaxCompensationAmount;

        return $this;
    }

    /**
     * Gets basePrice
     *
     * @return float
     */
    public function getBasePrice()
    {
        return $this->container['basePrice'];
    }

    /**
     * Sets basePrice
     *
     * @param float $basePrice Base price.
     *
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        $this->container['basePrice'] = $basePrice;

        return $this;
    }

    /**
     * Gets basePriceInclTax
     *
     * @return float
     */
    public function getBasePriceInclTax()
    {
        return $this->container['basePriceInclTax'];
    }

    /**
     * Sets basePriceInclTax
     *
     * @param float $basePriceInclTax Base price including tax.
     *
     * @return $this
     */
    public function setBasePriceInclTax($basePriceInclTax)
    {
        $this->container['basePriceInclTax'] = $basePriceInclTax;

        return $this;
    }

    /**
     * Gets baseRowTotal
     *
     * @return float
     */
    public function getBaseRowTotal()
    {
        return $this->container['baseRowTotal'];
    }

    /**
     * Sets baseRowTotal
     *
     * @param float $baseRowTotal Base row total.
     *
     * @return $this
     */
    public function setBaseRowTotal($baseRowTotal)
    {
        $this->container['baseRowTotal'] = $baseRowTotal;

        return $this;
    }

    /**
     * Gets baseRowTotalInclTax
     *
     * @return float
     */
    public function getBaseRowTotalInclTax()
    {
        return $this->container['baseRowTotalInclTax'];
    }

    /**
     * Sets baseRowTotalInclTax
     *
     * @param float $baseRowTotalInclTax Base row total including tax.
     *
     * @return $this
     */
    public function setBaseRowTotalInclTax($baseRowTotalInclTax)
    {
        $this->container['baseRowTotalInclTax'] = $baseRowTotalInclTax;

        return $this;
    }

    /**
     * Gets baseTaxAmount
     *
     * @return float
     */
    public function getBaseTaxAmount()
    {
        return $this->container['baseTaxAmount'];
    }

    /**
     * Sets baseTaxAmount
     *
     * @param float $baseTaxAmount Base tax amount.
     *
     * @return $this
     */
    public function setBaseTaxAmount($baseTaxAmount)
    {
        $this->container['baseTaxAmount'] = $baseTaxAmount;

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
     * @param string $description Description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param float $discountAmount Discount amount.
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets entityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param int $entityId Invoice item ID.
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets discountTaxCompensationAmount
     *
     * @return float
     */
    public function getDiscountTaxCompensationAmount()
    {
        return $this->container['discountTaxCompensationAmount'];
    }

    /**
     * Sets discountTaxCompensationAmount
     *
     * @param float $discountTaxCompensationAmount Discount tax compensation amount.
     *
     * @return $this
     */
    public function setDiscountTaxCompensationAmount($discountTaxCompensationAmount)
    {
        $this->container['discountTaxCompensationAmount'] = $discountTaxCompensationAmount;

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
     * @param string $name Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId Parent ID.
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

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
     * @param float $price Price.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets priceInclTax
     *
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->container['priceInclTax'];
    }

    /**
     * Sets priceInclTax
     *
     * @param float $priceInclTax Price including tax.
     *
     * @return $this
     */
    public function setPriceInclTax($priceInclTax)
    {
        $this->container['priceInclTax'] = $priceInclTax;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId Product ID.
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets rowTotal
     *
     * @return float
     */
    public function getRowTotal()
    {
        return $this->container['rowTotal'];
    }

    /**
     * Sets rowTotal
     *
     * @param float $rowTotal Row total.
     *
     * @return $this
     */
    public function setRowTotal($rowTotal)
    {
        $this->container['rowTotal'] = $rowTotal;

        return $this;
    }

    /**
     * Gets rowTotalInclTax
     *
     * @return float
     */
    public function getRowTotalInclTax()
    {
        return $this->container['rowTotalInclTax'];
    }

    /**
     * Sets rowTotalInclTax
     *
     * @param float $rowTotalInclTax Row total including tax.
     *
     * @return $this
     */
    public function setRowTotalInclTax($rowTotalInclTax)
    {
        $this->container['rowTotalInclTax'] = $rowTotalInclTax;

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
     * @param string $sku SKU.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param float $taxAmount Tax amount.
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceItemExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceItemExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets orderItemId
     *
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     *
     * @param int $orderItemId Order item ID.
     *
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        $this->container['orderItemId'] = $orderItemId;

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
     * @param float $qty Quantity.
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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


