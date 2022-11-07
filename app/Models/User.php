<?php 
declare(strict_types=1);

namespace App\Models;

class User 
{
    /** @var int */
    private int $id;

    /** @var string */
    private string $login;

    /** @var string */
    private string $codeWord;

    /** @var string */
    private string $authToken;

    /** @var string */
    private string $createdAt;

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
}