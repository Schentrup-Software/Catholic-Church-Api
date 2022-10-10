<?php
/**
 * Chapter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
use \Swagger\Client\ObjectSerializer;

/**
 * Chapter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Chapter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chapter';

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
        'content' => 'string',
        'reference' => 'string',
        'verse_count' => 'int',
        'next' => '\Swagger\Client\Model\ChapterNext',
        'previous' => '\Swagger\Client\Model\ChapterNext',
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
        'content' => null,
        'reference' => null,
        'verse_count' => null,
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
        'content' => 'content',
        'reference' => 'reference',
        'verse_count' => 'verseCount',
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
        'content' => 'setContent',
        'reference' => 'setReference',
        'verse_count' => 'setVerseCount',
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
        'content' => 'getContent',
        'reference' => 'getReference',
        'verse_count' => 'getVerseCount',
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['verse_count'] = isset($data['verse_count']) ? $data['verse_count'] : null;
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
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['verse_count'] === null) {
            $invalidProperties[] = "'verse_count' can't be null";
        }
        if ($this->container['copyright'] === null) {
            $invalidProperties[] = "'copyright' can't be null";
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
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
     * Gets verse_count
     *
     * @return int
     */
    public function getVerseCount()
    {
        return $this->container['verse_count'];
    }

    /**
     * Sets verse_count
     *
     * @param int $verse_count verse_count
     *
     * @return $this
     */
    public function setVerseCount($verse_count)
    {
        $this->container['verse_count'] = $verse_count;

        return $this;
    }

    /**
     * Gets next
     *
     * @return \Swagger\Client\Model\ChapterNext
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param \Swagger\Client\Model\ChapterNext $next next
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
     * @return \Swagger\Client\Model\ChapterNext
     */
    public function getPrevious()
    {
        return $this->container['previous'];
    }

    /**
     * Sets previous
     *
     * @param \Swagger\Client\Model\ChapterNext $previous previous
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


