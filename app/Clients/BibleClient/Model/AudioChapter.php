<?php
/**
 * AudioChapter
 *
 * PHP version 5
 *
 * @category Class
 * @package  App\Clients\BibleClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API.Bible
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.6.3
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace App\Clients\BibleClient\Model;

use \ArrayAccess;
use \App\Clients\BibleClient\ObjectSerializer;

/**
 * AudioChapter Class Doc Comment
 *
 * @category Class
 * @package  App\Clients\BibleClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudioChapter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AudioChapter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bible_id' => 'string',
        'number' => 'string',
        'book_id' => 'string',
        'resource_url' => 'string',
        'timecodes' => '\App\Clients\BibleClient\Model\AudioChapterTimecodes[]',
        'expires_at' => 'int',
        'reference' => 'string',
        'next' => '\App\Clients\BibleClient\Model\ChapterNext',
        'previous' => '\App\Clients\BibleClient\Model\ChapterNext',
        'copyright' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bible_id' => null,
        'number' => null,
        'book_id' => null,
        'resource_url' => null,
        'timecodes' => null,
        'expires_at' => null,
        'reference' => null,
        'next' => null,
        'previous' => null,
        'copyright' => null
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
        'bible_id' => 'bibleId',
        'number' => 'number',
        'book_id' => 'bookId',
        'resource_url' => 'resourceUrl',
        'timecodes' => 'timecodes',
        'expires_at' => 'expiresAt',
        'reference' => 'reference',
        'next' => 'next',
        'previous' => 'previous',
        'copyright' => 'copyright'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bible_id' => 'setBibleId',
        'number' => 'setNumber',
        'book_id' => 'setBookId',
        'resource_url' => 'setResourceUrl',
        'timecodes' => 'setTimecodes',
        'expires_at' => 'setExpiresAt',
        'reference' => 'setReference',
        'next' => 'setNext',
        'previous' => 'setPrevious',
        'copyright' => 'setCopyright'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bible_id' => 'getBibleId',
        'number' => 'getNumber',
        'book_id' => 'getBookId',
        'resource_url' => 'getResourceUrl',
        'timecodes' => 'getTimecodes',
        'expires_at' => 'getExpiresAt',
        'reference' => 'getReference',
        'next' => 'getNext',
        'previous' => 'getPrevious',
        'copyright' => 'getCopyright'
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
        $this->container['bible_id'] = isset($data['bible_id']) ? $data['bible_id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['book_id'] = isset($data['book_id']) ? $data['book_id'] : null;
        $this->container['resource_url'] = isset($data['resource_url']) ? $data['resource_url'] : null;
        $this->container['timecodes'] = isset($data['timecodes']) ? $data['timecodes'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['previous'] = isset($data['previous']) ? $data['previous'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['bible_id'] === null) {
            $invalidProperties[] = "'bible_id' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['book_id'] === null) {
            $invalidProperties[] = "'book_id' can't be null";
        }
        if ($this->container['resource_url'] === null) {
            $invalidProperties[] = "'resource_url' can't be null";
        }
        if ($this->container['expires_at'] === null) {
            $invalidProperties[] = "'expires_at' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets bible_id
     *
     * @return string
     */
    public function getBibleId()
    {
        return $this->container['bible_id'];
    }

    /**
     * Sets bible_id
     *
     * @param string $bible_id bible_id
     *
     * @return $this
     */
    public function setBibleId($bible_id)
    {
        $this->container['bible_id'] = $bible_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets book_id
     *
     * @return string
     */
    public function getBookId()
    {
        return $this->container['book_id'];
    }

    /**
     * Sets book_id
     *
     * @param string $book_id book_id
     *
     * @return $this
     */
    public function setBookId($book_id)
    {
        $this->container['book_id'] = $book_id;

        return $this;
    }

    /**
     * Gets resource_url
     *
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->container['resource_url'];
    }

    /**
     * Sets resource_url
     *
     * @param string $resource_url resource_url
     *
     * @return $this
     */
    public function setResourceUrl($resource_url)
    {
        $this->container['resource_url'] = $resource_url;

        return $this;
    }

    /**
     * Gets timecodes
     *
     * @return \App\Clients\BibleClient\Model\AudioChapterTimecodes[]
     */
    public function getTimecodes()
    {
        return $this->container['timecodes'];
    }

    /**
     * Sets timecodes
     *
     * @param \App\Clients\BibleClient\Model\AudioChapterTimecodes[] $timecodes timecodes
     *
     * @return $this
     */
    public function setTimecodes($timecodes)
    {
        $this->container['timecodes'] = $timecodes;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets next
     *
     * @return \App\Clients\BibleClient\Model\ChapterNext
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param \App\Clients\BibleClient\Model\ChapterNext $next next
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets previous
     *
     * @return \App\Clients\BibleClient\Model\ChapterNext
     */
    public function getPrevious()
    {
        return $this->container['previous'];
    }

    /**
     * Sets previous
     *
     * @param \App\Clients\BibleClient\Model\ChapterNext $previous previous
     *
     * @return $this
     */
    public function setPrevious($previous)
    {
        $this->container['previous'] = $previous;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string $copyright copyright
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

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


