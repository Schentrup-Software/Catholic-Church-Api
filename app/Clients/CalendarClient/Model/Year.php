<?php
/**
 * Year
 *
 * PHP version 5
 *
 * @category Class
 * @package  App\Clients\CalendarClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Liturgical Calendar API
 *
 * Roman Catholic liturgical calendar
 *
 * OpenAPI spec version: v0
 * Contact: jkb.pavlik@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace App\Clients\CalendarClient\Model;

use \ArrayAccess;
use \App\Clients\CalendarClient\ObjectSerializer;

/**
 * Year Class Doc Comment
 *
 * @category Class
 * @description General characteristics of a liturgical year
 * @package  App\Clients\CalendarClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Year implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Year';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lectionary' => 'string',
        'ferial_lectionary' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lectionary' => null,
        'ferial_lectionary' => null
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
        'lectionary' => 'lectionary',
        'ferial_lectionary' => 'ferial_lectionary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lectionary' => 'setLectionary',
        'ferial_lectionary' => 'setFerialLectionary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lectionary' => 'getLectionary',
        'ferial_lectionary' => 'getFerialLectionary'
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

    const LECTIONARY_A = 'A';
    const LECTIONARY_B = 'B';
    const LECTIONARY_C = 'C';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLectionaryAllowableValues()
    {
        return [
            self::LECTIONARY_A,
            self::LECTIONARY_B,
            self::LECTIONARY_C,
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
        $this->container['lectionary'] = isset($data['lectionary']) ? $data['lectionary'] : null;
        $this->container['ferial_lectionary'] = isset($data['ferial_lectionary']) ? $data['ferial_lectionary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLectionaryAllowableValues();
        if (!is_null($this->container['lectionary']) && !in_array($this->container['lectionary'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'lectionary', must be one of '%s'",
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
     * Gets lectionary
     *
     * @return string
     */
    public function getLectionary()
    {
        return $this->container['lectionary'];
    }

    /**
     * Sets lectionary
     *
     * @param string $lectionary Sunday lectionary cycle
     *
     * @return $this
     */
    public function setLectionary($lectionary)
    {
        $allowedValues = $this->getLectionaryAllowableValues();
        if (!is_null($lectionary) && !in_array($lectionary, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'lectionary', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lectionary'] = $lectionary;

        return $this;
    }

    /**
     * Gets ferial_lectionary
     *
     * @return int
     */
    public function getFerialLectionary()
    {
        return $this->container['ferial_lectionary'];
    }

    /**
     * Sets ferial_lectionary
     *
     * @param int $ferial_lectionary Ferial lectionary cycle
     *
     * @return $this
     */
    public function setFerialLectionary($ferial_lectionary)
    {
        $this->container['ferial_lectionary'] = $ferial_lectionary;

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


