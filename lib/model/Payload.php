<?php
/**
 * Payload
 *
 * PHP version 5
 *
 * @category Class
 * @package  daxslab\enzona\qr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QRAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace daxslab\enzona\qr\model;

use \ArrayAccess;
use \daxslab\enzona\qr\ObjectSerializer;

/**
 * Payload Class Doc Comment
 *
 * @category Class
 * @package  daxslab\enzona\qr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'string',
        'currency' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'currency' => null,
        'description' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'description' => 'getDescription'
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

    const AMOUNT__001 = '0.01';
    const CURRENCY_CUP = 'cup';
    const DESCRIPTION_PRUEBA = 'Prueba';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmountAllowableValues()
    {
        return [
            self::AMOUNT__001,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_CUP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDescriptionAllowableValues()
    {
        return [
            self::DESCRIPTION_PRUEBA,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

//        $allowedValues = $this->getAmountAllowableValues();
//        if (!is_null($this->container['amount']) && !in_array($this->container['amount'], $allowedValues, true)) {
//            $invalidProperties[] = sprintf(
//                "invalid value for 'amount', must be one of '%s'",
//                implode("', '", $allowedValues)
//            );
//        }
//
//        $allowedValues = $this->getCurrencyAllowableValues();
//        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
//            $invalidProperties[] = sprintf(
//                "invalid value for 'currency', must be one of '%s'",
//                implode("', '", $allowedValues)
//            );
//        }
//
//        $allowedValues = $this->getDescriptionAllowableValues();
//        if (!is_null($this->container['description']) && !in_array($this->container['description'], $allowedValues, true)) {
//            $invalidProperties[] = sprintf(
//                "invalid value for 'description', must be one of '%s'",
//                implode("', '", $allowedValues)
//            );
//        }

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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $allowedValues = $this->getAmountAllowableValues();
//        if (!is_null($amount) && !in_array($amount, $allowedValues, true)) {
//            throw new \InvalidArgumentException(
//                sprintf(
//                    "Invalid value for 'amount', must be one of '%s'",
//                    implode("', '", $allowedValues)
//                )
//            );
//        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
//        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
//            throw new \InvalidArgumentException(
//                sprintf(
//                    "Invalid value for 'currency', must be one of '%s'",
//                    implode("', '", $allowedValues)
//                )
//            );
//        }
        $this->container['currency'] = $currency;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $allowedValues = $this->getDescriptionAllowableValues();
//        if (!is_null($description) && !in_array($description, $allowedValues, true)) {
//            throw new \InvalidArgumentException(
//                sprintf(
//                    "Invalid value for 'description', must be one of '%s'",
//                    implode("', '", $allowedValues)
//                )
//            );
//        }
        $this->container['description'] = $description;

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


