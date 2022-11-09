<?php 
declare(strict_types=1);

namespace App\Models;

use Services\DataMapper\DataMapperEntity;

class Article extends DataMapperEntity
{
    /** @var int */
    protected int $id;

    /** @var int */
    protected int $authorId;

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $createdAt;

    /**
     * get 'User' table name
     *
     * @return string
     */
    protected static function getTableName(): string
    {
        return 'articles';
    }
}