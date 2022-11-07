<?php 

function underCamelCase(string $name)
{
    return lcfirst(str_replace('_', '', ucwords($name, '_')));
}

echo underCamelCase("created_at");

