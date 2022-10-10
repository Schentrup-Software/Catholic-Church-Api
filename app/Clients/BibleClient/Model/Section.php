<?php
/**
 * Section
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
 * Section Class Doc Comment
 *
 * @category Class
 * @package  App\Clients\BibleClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Section implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Section';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bible_id' => 'string',
        'book_id' => 'string',
        'chapter_id' => 'string',
        'title' => 'string',
        'content' => 'string',
        'verse_count' => 'int',
        'first_verse_id' => 'string',
        'last_verse_id' => 'string',
        'first_verse_org_id' => 'string',
        'last_verse_org_id' => 'string',
        'copyright' => 'string',
        'next' => '\App\Clients\BibleClient\Model\SectionNext',
        'previous' => '\App\Clients\BibleClient\Model\SectionNext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bible_id' => null,
        'book_id' => null,
        'chapter_id' => null,
        'title' => null,
        'content' => null,
        'verse_count' => null,
        'first_verse_id' => null,
        'last_verse_id' => null,
        'first_verse_org_id' => null,
        'last_verse_org_id' => null,
        'copyright' => null,
        'next' => null,
        'previous' => null
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
        'book_id' => 'bookId',
        'chapter_id' => 'chapterId',
        'title' => 'title',
        'content' => 'content',
        'verse_count' => 'verseCount',
        'first_verse_id' => 'firstVerseId',
        'last_verse_id' => 'lastVerseId',
        'first_verse_org_id' => 'firstVerseOrgId',
        'last_verse_org_id' => 'lastVerseOrgId',
        'copyright' => 'copyright',
        'next' => 'next',
        'previous' => 'previous'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bible_id' => 'setBibleId',
        'book_id' => 'setBookId',
        'chapter_id' => 'setChapterId',
        'title' => 'setTitle',
        'content' => 'setContent',
        'verse_count' => 'setVerseCount',
        'first_verse_id' => 'setFirstVerseId',
        'last_verse_id' => 'setLastVerseId',
        'first_verse_org_id' => 'setFirstVerseOrgId',
        'last_verse_org_id' => 'setLastVerseOrgId',
        'copyright' => 'setCopyright',
        'next' => 'setNext',
        'previous' => 'setPrevious'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bible_id' => 'getBibleId',
        'book_id' => 'getBookId',
        'chapter_id' => 'getChapterId',
        'title' => 'getTitle',
        'content' => 'getContent',
        'verse_count' => 'getVerseCount',
        'first_verse_id' => 'getFirstVerseId',
        'last_verse_id' => 'getLastVerseId',
        'first_verse_org_id' => 'getFirstVerseOrgId',
        'last_verse_org_id' => 'getLastVerseOrgId',
        'copyright' => 'getCopyright',
        'next' => 'getNext',
        'previous' => 'getPrevious'
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
        $this->container['book_id'] = isset($data['book_id']) ? $data['book_id'] : null;
        $this->container['chapter_id'] = isset($data['chapter_id']) ? $data['chapter_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['verse_count'] = isset($data['verse_count']) ? $data['verse_count'] : null;
        $this->container['first_verse_id'] = isset($data['first_verse_id']) ? $data['first_verse_id'] : null;
        $this->container['last_verse_id'] = isset($data['last_verse_id']) ? $data['last_verse_id'] : null;
        $this->container['first_verse_org_id'] = isset($data['first_verse_org_id']) ? $data['first_verse_org_id'] : null;
        $this->container['last_verse_org_id'] = isset($data['last_verse_org_id']) ? $data['last_verse_org_id'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['previous'] = isset($data['previous']) ? $data['previous'] : null;
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
        if ($this->container['book_id'] === null) {
            $invalidProperties[] = "'book_id' can't be null";
        }
        if ($this->container['chapter_id'] === null) {
            $invalidProperties[] = "'chapter_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['verse_count'] === null) {
            $invalidProperties[] = "'verse_count' can't be null";
        }
        if ($this->container['first_verse_id'] === null) {
            $invalidProperties[] = "'first_verse_id' can't be null";
        }
        if ($this->container['last_verse_id'] === null) {
            $invalidProperties[] = "'last_verse_id' can't be null";
        }
        if ($this->container['first_verse_org_id'] === null) {
            $invalidProperties[] = "'first_verse_org_id' can't be null";
        }
        if ($this->container['last_verse_org_id'] === null) {
            $invalidProperties[] = "'last_verse_org_id' can't be null";
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
     * Gets chapter_id
     *
     * @return string
     */
    public function getChapterId()
    {
        return $this->container['chapter_id'];
    }

    /**
     * Sets chapter_id
     *
     * @param string $chapter_id chapter_id
     *
     * @return $this
     */
    public function setChapterId($chapter_id)
    {
        $this->container['chapter_id'] = $chapter_id;

        return $this;
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
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets first_verse_id
     *
     * @return string
     */
    public function getFirstVerseId()
    {
        return $this->container['first_verse_id'];
    }

    /**
     * Sets first_verse_id
     *
     * @param string $first_verse_id first_verse_id
     *
     * @return $this
     */
    public function setFirstVerseId($first_verse_id)
    {
        $this->container['first_verse_id'] = $first_verse_id;

        return $this;
    }

    /**
     * Gets last_verse_id
     *
     * @return string
     */
    public function getLastVerseId()
    {
        return $this->container['last_verse_id'];
    }

    /**
     * Sets last_verse_id
     *
     * @param string $last_verse_id last_verse_id
     *
     * @return $this
     */
    public function setLastVerseId($last_verse_id)
    {
        $this->container['last_verse_id'] = $last_verse_id;

        return $this;
    }

    /**
     * Gets first_verse_org_id
     *
     * @return string
     */
    public function getFirstVerseOrgId()
    {
        return $this->container['first_verse_org_id'];
    }

    /**
     * Sets first_verse_org_id
     *
     * @param string $first_verse_org_id first_verse_org_id
     *
     * @return $this
     */
    public function setFirstVerseOrgId($first_verse_org_id)
    {
        $this->container['first_verse_org_id'] = $first_verse_org_id;

        return $this;
    }

    /**
     * Gets last_verse_org_id
     *
     * @return string
     */
    public function getLastVerseOrgId()
    {
        return $this->container['last_verse_org_id'];
    }

    /**
     * Sets last_verse_org_id
     *
     * @param string $last_verse_org_id last_verse_org_id
     *
     * @return $this
     */
    public function setLastVerseOrgId($last_verse_org_id)
    {
        $this->container['last_verse_org_id'] = $last_verse_org_id;

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
     * Gets next
     *
     * @return \App\Clients\BibleClient\Model\SectionNext
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param \App\Clients\BibleClient\Model\SectionNext $next next
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
     * @return \App\Clients\BibleClient\Model\SectionNext
     */
    public function getPrevious()
    {
        return $this->container['previous'];
    }

    /**
     * Sets previous
     *
     * @param \App\Clients\BibleClient\Model\SectionNext $previous previous
     *
     * @return $this
     */
    public function setPrevious($previous)
    {
        $this->container['previous'] = $previous;

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


