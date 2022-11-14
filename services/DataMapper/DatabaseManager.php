<?php 
declare(strict_types=1);

namespace Services\DataMapper;

use ReflectionObject;
use Services\DB\DB;

abstract class DatabaseManager 
{
    /**
     * Function convert string from $varName to $var_name 
     * 
     * @param string $source
     * @return string
     */
    private function convertStringToDbFormat(string $source): string
    {
       return strtolower(preg_replace("~[A-Z]~", "_$0", $source));
    }

    /**
     * This function will convert all properties to usign reflection
     * [
     *  'nameOfProperty' => valuesOfPropert1
     * ]
     *
     * @return array
     */
    private function convertPropertiesToDbFormat(): array 
    {
        $reflection = new ReflectionObject($this);
        $properties = $reflection->getProperties();

        $convertedProperties = [];
        foreach($properties as $property)
        {
            $propertyName = $property->getName();
            $propertyNameConvertedToUnderScore = $this->convertStringToDbFormat($propertyName);
            $convertedProperties[$propertyNameConvertedToUnderScore] = $this->$propertyName;
        }
        return $convertedProperties;
    }

    abstract protected static function getTableName(): string;
}