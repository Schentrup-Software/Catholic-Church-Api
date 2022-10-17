<?php
/**
 * Celebration
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
 * Celebration Class Doc Comment
 *
 * @category Class
 * @description Liturgical celebration (Sunday, ferial, feast, ...)
 * @package  App\Clients\CalendarClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Celebration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Celebration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'colour' => 'string',
        'rank' => 'string',
        'rank_num' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'colour' => null,
        'rank' => null,
        'rank_num' => 'float'
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
        'title' => 'title',
        'colour' => 'colour',
        'rank' => 'rank',
        'rank_num' => 'rank_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'colour' => 'setColour',
        'rank' => 'setRank',
        'rank_num' => 'setRankNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'colour' => 'getColour',
        'rank' => 'getRank',
        'rank_num' => 'getRankNum'
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

    const COLOUR_GREEN = 'green';
    const COLOUR_VIOLET = 'violet';
    const COLOUR_WHITE = 'white';
    const COLOUR_RED = 'red';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColourAllowableValues()
    {
        return [
            self::COLOUR_GREEN,
            self::COLOUR_VIOLET,
            self::COLOUR_WHITE,
            self::COLOUR_RED,
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['colour'] = isset($data['colour']) ? $data['colour'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['rank_num'] = isset($data['rank_num']) ? $data['rank_num'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getColourAllowableValues();
        if (!is_null($this->container['colour']) && !in_array($this->container['colour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'colour', must be one of '%s'",
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the celebration, for humans
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     *
     * @param string $colour Liturgical colour
     *
     * @return $this
     */
    public function setColour($colour)
    {
        $allowedValues = $this->getColourAllowableValues();
        if (!is_null($colour) && !in_array($colour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'colour', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['colour'] = $colour;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return string
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param string $rank Short name of the celebration's liturgical rank, localized
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets rank_num
     *
     * @return float
     */
    public function getRankNum()
    {
        return $this->container['rank_num'];
    }

    /**
     * Sets rank_num
     *
     * @param float $rank_num Number from 1.1 to 4. The smaller number, the greater rank. Numbers correspond with section numbering in the Table of Liturgical Days.
     *
     * @return $this
     */
    public function setRankNum($rank_num)
    {
        $this->container['rank_num'] = $rank_num;

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


