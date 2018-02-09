<?php
/**
 * CustomerDataAddressInterface
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
 * CustomerDataAddressInterface Class Doc Comment
 *
 * @category Class
 * @description Customer address interface.
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDataAddressInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer-data-address-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'customerId' => 'int',
        'region' => '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataRegionInterface',
        'regionId' => 'int',
        'countryId' => 'string',
        'street' => 'string[]',
        'company' => 'string',
        'telephone' => 'string',
        'fax' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'middlename' => 'string',
        'prefix' => 'string',
        'suffix' => 'string',
        'vatId' => 'string',
        'defaultShipping' => 'bool',
        'defaultBilling' => 'bool',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\CustomerDataAddressExtensionInterface',
        'customAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'customerId' => null,
        'region' => null,
        'regionId' => null,
        'countryId' => null,
        'street' => null,
        'company' => null,
        'telephone' => null,
        'fax' => null,
        'postcode' => null,
        'city' => null,
        'firstname' => null,
        'lastname' => null,
        'middlename' => null,
        'prefix' => null,
        'suffix' => null,
        'vatId' => null,
        'defaultShipping' => null,
        'defaultBilling' => null,
        'extensionAttributes' => null,
        'customAttributes' => null
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
        'customerId' => 'customer_id',
        'region' => 'region',
        'regionId' => 'region_id',
        'countryId' => 'country_id',
        'street' => 'street',
        'company' => 'company',
        'telephone' => 'telephone',
        'fax' => 'fax',
        'postcode' => 'postcode',
        'city' => 'city',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'middlename' => 'middlename',
        'prefix' => 'prefix',
        'suffix' => 'suffix',
        'vatId' => 'vat_id',
        'defaultShipping' => 'default_shipping',
        'defaultBilling' => 'default_billing',
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customerId' => 'setCustomerId',
        'region' => 'setRegion',
        'regionId' => 'setRegionId',
        'countryId' => 'setCountryId',
        'street' => 'setStreet',
        'company' => 'setCompany',
        'telephone' => 'setTelephone',
        'fax' => 'setFax',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'middlename' => 'setMiddlename',
        'prefix' => 'setPrefix',
        'suffix' => 'setSuffix',
        'vatId' => 'setVatId',
        'defaultShipping' => 'setDefaultShipping',
        'defaultBilling' => 'setDefaultBilling',
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customerId' => 'getCustomerId',
        'region' => 'getRegion',
        'regionId' => 'getRegionId',
        'countryId' => 'getCountryId',
        'street' => 'getStreet',
        'company' => 'getCompany',
        'telephone' => 'getTelephone',
        'fax' => 'getFax',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'middlename' => 'getMiddlename',
        'prefix' => 'getPrefix',
        'suffix' => 'getSuffix',
        'vatId' => 'getVatId',
        'defaultShipping' => 'getDefaultShipping',
        'defaultBilling' => 'getDefaultBilling',
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['countryId'] = isset($data['countryId']) ? $data['countryId'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['middlename'] = isset($data['middlename']) ? $data['middlename'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['vatId'] = isset($data['vatId']) ? $data['vatId'] : null;
        $this->container['defaultShipping'] = isset($data['defaultShipping']) ? $data['defaultShipping'] : null;
        $this->container['defaultBilling'] = isset($data['defaultBilling']) ? $data['defaultBilling'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
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
     * @param int $id ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param int $customerId Customer ID
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets region
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataRegionInterface
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\CustomerDataRegionInterface $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets regionId
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
     * Sets regionId
     *
     * @param int $regionId Region ID
     *
     * @return $this
     */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;

        return $this;
    }

    /**
     * Gets countryId
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['countryId'];
    }

    /**
     * Sets countryId
     *
     * @param string $countryId Country code in ISO_3166-2 format
     *
     * @return $this
     */
    public function setCountryId($countryId)
    {
        $this->container['countryId'] = $countryId;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string[]
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string[] $street Street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone Telephone number
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax Fax number
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City name
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname First name
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Last name
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets middlename
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->container['middlename'];
    }

    /**
     * Sets middlename
     *
     * @param string $middlename Middle name
     *
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->container['middlename'] = $middlename;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix Prefix
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix Suffix
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets vatId
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vatId'];
    }

    /**
     * Sets vatId
     *
     * @param string $vatId Vat id
     *
     * @return $this
     */
    public function setVatId($vatId)
    {
        $this->container['vatId'] = $vatId;

        return $this;
    }

    /**
     * Gets defaultShipping
     *
     * @return bool
     */
    public function getDefaultShipping()
    {
        return $this->container['defaultShipping'];
    }

    /**
     * Sets defaultShipping
     *
     * @param bool $defaultShipping If this address is default shipping address.
     *
     * @return $this
     */
    public function setDefaultShipping($defaultShipping)
    {
        $this->container['defaultShipping'] = $defaultShipping;

        return $this;
    }

    /**
     * Gets defaultBilling
     *
     * @return bool
     */
    public function getDefaultBilling()
    {
        return $this->container['defaultBilling'];
    }

    /**
     * Sets defaultBilling
     *
     * @param bool $defaultBilling If this address is default billing address
     *
     * @return $this
     */
    public function setDefaultBilling($defaultBilling)
    {
        $this->container['defaultBilling'] = $defaultBilling;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAddressExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\CustomerDataAddressExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     *
     * @return \SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     *
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


