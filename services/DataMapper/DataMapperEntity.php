<?php 
declare(strict_types=1);

namespace Services\DataMapper;

use Services\DB\DB;

abstract class DataMapperEntity 
{
    /** @var integer */
    protected int $id;

    /**
     * getId of table in db
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * __set helps to set values to $codeWord, $authToken, $createdAt
     *
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    /**
     * convert this string $variable_name to $variableName
     *
     * @param string $name
     * @return string
     */
    private function underscoreToCamelCase(string $name): string
    {
        return lcfirst(str_replace('_', '', ucwords($name, '_')));
    }

    /**
     * Return all rows and columns from DB
     *
     * @return array
     */
    public static function findAll(): array
    {
        $db = DB::getInstance();
        return $db->query("SELECT * FROM " . static::getTableName(), [], static::class);
    }

    /**
     * find only one row from DB
     *
     * @param integer $id
     * @return null|self
     */
    public static function find(int $id): null|self
    {
        $db = DB::getInstance();
        $itemsById = $db->query('SELECT * FROM `' . static::getTableName() . '` WHERE id=:id;', [':id' => $id], static::class);

        return $itemsById ? $itemsById[0] : null;
    }

    abstract protected static function getTableName(): string;
}