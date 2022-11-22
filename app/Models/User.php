<?php 
declare(strict_types=1);

namespace App\Models;

use Services\DataManagment\DataMapperEntity;

class User extends DataMapperEntity
{
    /** @var string */
    protected string $login;

    /** @var string */
    protected string $codeWord;

    /** @var string */
    protected string $authToken;

    /** @var string */
    protected string $createdAt;

    /** @var integer */
    protected int $id;

    /**
     * get name of user from db
     *
     * @return string
     */
    public function getName(): string 
    {
        return $this->login;
    }

    /**
     * get auth token of user from db
     *
     * @return string
     */
    public function getAuthToken(): string 
    {
        return $this->authToken;
    }

    /**
     * get 'User' table name
     *
     * @return string
     */
    protected static function getTableName(): string
    {
        return "users";
    }
}