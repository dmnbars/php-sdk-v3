<?php

/**
 * PHP SDK for Unlimit API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class RecurringUpdateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringUpdateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'merchant_order' => '\Cardpay\model\TransactionResponseMerchantOrder',
        'recurring_data' => '\Cardpay\model\ResponseUpdatedTransactionData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation' => null,
        'merchant_order' => null,
        'recurring_data' => null
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
        'operation' => 'operation',
        'merchant_order' => 'merchant_order',
        'recurring_data' => 'recurring_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'merchant_order' => 'setMerchantOrder',
        'recurring_data' => 'setRecurringData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'merchant_order' => 'getMerchantOrder',
        'recurring_data' => 'getRecurringData'
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

    const OPERATION_CHANGE_STATUS = 'CHANGE_STATUS';
    const OPERATION_CONFIRM_3_DS = 'CONFIRM_3DS';
    const OPERATION_EXECUTE = 'EXECUTE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_CHANGE_STATUS,
            self::OPERATION_CONFIRM_3_DS,
            self::OPERATION_EXECUTE,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['merchant_order'] = isset($data['merchant_order']) ? $data['merchant_order'] : null;
        $this->container['recurring_data'] = isset($data['recurring_data']) ? $data['recurring_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation `CHANGE_STATUS` value
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets merchant_order
     *
     * @return \Cardpay\model\TransactionResponseMerchantOrder
     */
    public function getMerchantOrder()
    {
        return $this->container['merchant_order'];
    }

    /**
     * Sets merchant_order
     *
     * @param \Cardpay\model\TransactionResponseMerchantOrder $merchant_order Merchant data
     *
     * @return $this
     */
    public function setMerchantOrder($merchant_order)
    {
        $this->container['merchant_order'] = $merchant_order;

        return $this;
    }

    /**
     * Gets recurring_data
     *
     * @return \Cardpay\model\ResponseUpdatedTransactionData
     */
    public function getRecurringData()
    {
        return $this->container['recurring_data'];
    }

    /**
     * Sets recurring_data
     *
     * @param \Cardpay\model\ResponseUpdatedTransactionData $recurring_data Recurring data
     *
     * @return $this
     */
    public function setRecurringData($recurring_data)
    {
        $this->container['recurring_data'] = $recurring_data;

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

